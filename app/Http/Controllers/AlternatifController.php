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
    public function index()
    {

        $alternatif   = Alternatif::paginate(10);
        $kriteria   = Kriteria::all();
        return view('dashboard.alternatif.index', [
            'title' => 'Manage Alternatif',
            'active' => 'alternatif',
            'alternatif' => $alternatif,
            'kriteria' => $kriteria,
            'no' => 1
        ]);
    }

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

    public function edit($id)
    {
        $alternatif = Alternatif::find($id);
        $kriteria   = Kriteria::all();
        return view('dashboard.alternatif.edit',[
            'title' => 'Edit Data',
            'active' => 'alternatif',
            'kriteria' => $kriteria,
            'alternatif' => $alternatif
        ]);
    }

    public function update(Request $request, $id)
    {
        $alternatif = Alternatif::find($id);
        $kriteria   = Kriteria::all();
        foreach ($kriteria as $k){
            $kolom = 'c'.$k->id;
            $alternatif->$kolom = $request->input($kolom);
        }
        $alternatif->update();

        $this->_hitung();
        return redirect('/alternatif')->with('success', 'Data Sukses Diedit');
    }

    public function destroy($id)
    {
        $alternatif = Alternatif::where('id', $id)->delete();
        $this->_hitung();
        return redirect('/alternatif')->with('success', 'Data Sukses Dihapus');
    }

    private function _hitung()
	{
        // Mencari Pembagi
        $alternatif = Alternatif::all();
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
        foreach ($alternatif as $a){
            $kriteria = kriteria::all();
            $normalisasi = Normalisasi::where('id_warga', $a->id_warga)->first();
            foreach ($kriteria as $k){
                $kolom = 'c'.$k->id;
                $normalisasi->$kolom = $a->$kolom/sqrt($isi['c'.$k->id]);
            }
            $normalisasi->update();
        }

        //Mengisi Tabel Normalisasi Terbobot
        $normalisasi = Normalisasi::all();

        foreach ($normalisasi as $n){
            $terbobot = Terbobot::where('id_warga', $n->id_warga)->first();
            foreach ($kriteria as $k){
                $kolom = 'c'.$k->id;
                $terbobot->$kolom = $n->$kolom*$k->bobot;
            }
            $terbobot->update();
        }

        //Mengisi Tabel PositifNegatif
        Positifnegatif::truncate();

        $positifnegatif = new Positifnegatif;
        $positifnegatif->name = 'Positif';
        foreach ($kriteria as $k){
            $kolom = 'c'.$k->id;
            if($k->atribut == 'benefit'){
                $positifnegatif->$kolom = Terbobot::max('c'.$k->id);
            }else{
                $positifnegatif->$kolom = Terbobot::min('c'.$k->id);
            }
        }
        $positifnegatif->save();

        $positifnegatif = new Positifnegatif;
        $positifnegatif->name = 'Negatif';
        foreach ($kriteria as $k){
            $kolom = 'c'.$k->id;
            if($k->atribut == 'benefit'){
                $positifnegatif->$kolom = Terbobot::min('c'.$k->id);
            }else{
                $positifnegatif->$kolom = Terbobot::max('c'.$k->id);
            }
        }
        $positifnegatif->save();

        //Mengisi Tabel D Positif
        $positif = Positifnegatif::where('name', 'Positif')->first();
        $terbobot = Terbobot::all();
        foreach ($terbobot as $t){
            $kriteria = kriteria::all();
            $total = 0;
            foreach ($kriteria as $k){
                $kolom = 'c'.$k->id;
                $hasil = 0;
                $hasil = pow($positif->$kolom-$t['c'.$k->id], 2);
                $total += $hasil;
            }

            $dpositif = Dpositif::where('id_warga', $t->id_warga)->first();
            $dpositif->nilai = sqrt($total);
            $dpositif->update();
        }

        //Mengisi Tabel D Negatif
        $negatif = Positifnegatif::where('name', 'Negatif')->first();
        $terbobot = Terbobot::all();
        foreach ($terbobot as $t){
            $kriteria = kriteria::all();
            $total = 0;
            foreach ($kriteria as $k){
                $kolom = 'c'.$k->id;
                $hasil = 0;
                $hasil = pow($t['c'.$k->id]-$negatif->$kolom, 2);
                $total += $hasil;
            }

            $dnegatif = Dnegatif::where('id_warga', $t->id_warga)->first();
            $dnegatif->nilai = sqrt($total);
            $dnegatif->update();
        }

        //Mengisi Tabel Preferensi
        $dnegatif = Dnegatif::all();

        foreach ($dnegatif as $dn){
            $dpositif = Dpositif::where('id_warga', $dn->id_warga)->first();
            $preferensi = Preferensi::where('id_warga', $dn->id_warga)->first();
            $preferensi->nilai = $dn->nilai/($dn->nilai+$dpositif->nilai);
            $preferensi->update();
        }

        //Mengisi Rangking
        
        $preferensi = Preferensi::all()->SortByDesc('nilai');
        $n=1;
        foreach ($preferensi as $pre){
            $preferensi = Preferensi::find($pre['id']);
            $preferensi->rangking = $n++;
            $preferensi->update();
        }

    }
}
