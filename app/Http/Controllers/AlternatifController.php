<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
use App\Models\Warga;
use App\Models\Kriteria;
use App\Models\Normalisasi;
use App\Models\Terbobot;
use App\Models\Positifnegatif;
use App\Models\Dpositif;
use App\Models\Dnegatif;
use App\Models\Preferensi;

class AlternatifController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->search;
        $alternatif = Alternatif::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('dashboard.alternatif.index', [
            'title' => $keyword,
            'active' => 'alternatif',
            'alternatif' => $alternatif
        ])->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function edit(Request $request, $id)
    {
        $periode = $request->periode;
        if($periode == 0){
            $periode =  date("Y-m");
        }

        $alternatif = Alternatif::where('id_warga', $id)->where('periode', $periode)->first();
        $cekalternatif = Alternatif::where('id_warga', $id)->where('periode', $periode)->count();
        $warga = Warga::where('id', $id)->first();
        $kriteria   = Kriteria::all();
        return view('dashboard.alternatif.edit',[
            'title' => 'Edit Data',
            'active' => 'warga',
            'kriteria' => $kriteria,
            'alternatif' => $alternatif,
            'cekalternatif' => $cekalternatif,
            'warga' => $warga,
            'periode' => $periode,
        ]);
    }

    public function update(Request $request, $id)
    {
        $cekalternatif = Alternatif::where('id_warga', $id)->where('periode', $request->input('periode'))->count();

        if($cekalternatif == 0){
            $alternatif = new Alternatif;
            $alternatif->id_warga = $id;
        }else{
            $alternatif = Alternatif::where('id_warga', $id)->where('periode', $request->input('periode'))->first();
        }

        $kriteria   = Kriteria::all();
        foreach ($kriteria as $k){
            $kolom = 'c'.$k->id;
            $alternatif->$kolom = $request->input($kolom);
        }

        if($cekalternatif == 0){
            $alternatif->periode = $request->input('periode');
            $alternatif->save();

            $normalisasi = new Normalisasi;
            $normalisasi->id_warga = $id;
            $normalisasi->periode = $request->input('periode');
            $normalisasi->save();

            $terbobot = new Terbobot;
            $terbobot->id_warga = $id;
            $terbobot->periode = $request->input('periode');
            $terbobot->save();

            $dpositif = new Dpositif;
            $dpositif->id_warga = $id;
            $dpositif->periode = $request->input('periode');
            $dpositif->save();

            $dnegatif = new Dnegatif;
            $dnegatif->id_warga = $id;
            $dnegatif->periode = $request->input('periode');
            $dnegatif->save();

            $preferensi = new Preferensi;
            $preferensi->id_warga = $id;
            $preferensi->periode = $request->input('periode');
            $preferensi->save();
        }else{
            $alternatif->update();
        }


        $periode = $request->input('periode');
        $this->_hitung($periode);
        return redirect('/warga')->with('success', 'Data Sukses Diedit');
    }

    private function _hitung($periode)
	{
        // Mencari Pembagi
        $alternatif = Alternatif::where('periode', $periode)->get();
        $kriteria = kriteria::all();
        foreach ($kriteria as $k){
            $isi['c'.$k->id] = 0;
            foreach ($alternatif as $a){
                $kriteria = 0;
                $kolom = 'c'.$k->id;
                $kriteria = pow($a->$kolom, 2);
                $isi['c'.$k->id] += $kriteria;
            }
        }

        //Mengisi Tabel Normalisasi
        $alternatif = Alternatif::where('periode', $periode)->get();
        foreach ($alternatif as $a){
            $kriteria = kriteria::all();
            $normalisasi = Normalisasi::where('id_warga', $a->id_warga)->where('periode', $periode)->first();
            foreach ($kriteria as $k){
                $kolom = 'c'.$k->id;
                $normalisasi->$kolom = $a->$kolom/sqrt($isi['c'.$k->id]);
                $total = $a->$kolom/sqrt($isi['c'.$k->id]);
                
            }
            $normalisasi->periode = $periode;
            $normalisasi->update();
        }

        //Mengisi Tabel Normalisasi Terbobot
        $normalisasi = Normalisasi::where('periode', $periode)->get();
        foreach ($normalisasi as $n){
            $terbobot = Terbobot::where('id_warga', $n->id_warga)->where('periode', $periode)->first();
            foreach ($kriteria as $k){
                $kolom = 'c'.$k->id;
                $terbobot->$kolom = $n->$kolom*$k->bobot;
            }
            $terbobot->periode = $periode;
            $terbobot->update();
        }

        //Mengisi Tabel PositifNegatif
        Positifnegatif::where('periode', $periode)->delete();

        $positifnegatif = new Positifnegatif;
        $positifnegatif->name = 'Positif';

        $kriteria = kriteria::all();
        foreach ($kriteria as $k){
            $kolom = 'c'.$k->id;
            if($k->atribut == 'benefit'){
                $positifnegatif->$kolom = Terbobot::where('periode', $periode)->max('c'.$k->id);
            }else{
                $positifnegatif->$kolom = Terbobot::where('periode', $periode)->min('c'.$k->id);
            }
        }
        $positifnegatif->periode = $periode;
        $positifnegatif->save();

        $positifnegatif = new Positifnegatif;
        $positifnegatif->name = 'Negatif';
        foreach ($kriteria as $k){
            $kolom = 'c'.$k->id;
            if($k->atribut == 'benefit'){
                $positifnegatif->$kolom = Terbobot::where('periode', $periode)->min('c'.$k->id);
            }else{
                $positifnegatif->$kolom = Terbobot::where('periode', $periode)->max('c'.$k->id);
            }
        }
        $positifnegatif->periode = $periode;
        $positifnegatif->save();

        //Mengisi Tabel D Positif
        $positif = Positifnegatif::where('name', 'Positif')->where('periode', $periode)->first();
        $terbobot = Terbobot::where('periode', $periode)->get();
        foreach ($terbobot as $t){
            $kriteria = kriteria::all();
            $total = 0;
            foreach ($kriteria as $k){
                $kolom = 'c'.$k->id;
                $hasil = 0;
                $hasil = pow($positif->$kolom-$t['c'.$k->id], 2);
                $total += $hasil;
            }

            $dpositif = Dpositif::where('id_warga', $t->id_warga)->where('periode', $periode)->first();
            $dpositif->nilai = sqrt($total);
            $dpositif->periode = $t->periode;
            $dpositif->update();
        }

        //Mengisi Tabel D Negatif
        $negatif = Positifnegatif::where('name', 'Negatif')->where('periode', $periode)->first();
        $terbobot = Terbobot::where('periode', $periode)->get();
        foreach ($terbobot as $t){
            $kriteria = kriteria::all();
            $total = 0;
            foreach ($kriteria as $k){
                $kolom = 'c'.$k->id;
                $hasil = 0;
                $hasil = pow($t['c'.$k->id]-$negatif->$kolom, 2);
                $total += $hasil;
            }

            $dnegatif = Dnegatif::where('id_warga', $t->id_warga)->where('periode', $periode)->first();
            $dnegatif->nilai = sqrt($total);
            $dnegatif->periode = $t->periode;
            $dnegatif->update();
        }

        //Mengisi Tabel Preferensi
        $dnegatif = Dnegatif::where('periode', $periode)->get();

        foreach ($dnegatif as $dn){
            $dpositif = Dpositif::where('id_warga', $dn->id_warga)->where('periode', $periode)->first();
            $preferensi = Preferensi::where('id_warga', $dn->id_warga)->where('periode', $periode)->first();
            if($dn->nilai != null){
                $preferensi->nilai = $dn->nilai/($dn->nilai+$dpositif->nilai);
            }
            $preferensi->periode = $dn->periode;
            $preferensi->update();
        }

        //Mengisi Rangking
        
        $preferensi = Preferensi::where('periode', $periode)->orderBy('nilai', 'desc')->get();
        $n=1;
        foreach ($preferensi as $pre){
            $preferensi = Preferensi::find($pre['id']);
            $preferensi->rangking = $n++;
            $preferensi->update();
        }

    }
}
