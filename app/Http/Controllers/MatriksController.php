<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;
use App\Models\Warga;
use App\Models\Kriteria;

class MatriksController extends Controller
{
    public function index(Request $request)
    {

        $periode = $request->periode;
        if($periode == 0){
            $periode =  date("Y-m");
        }

        $matriks   = Alternatif::where('periode', $periode)->paginate(10);
        $kriteria   = Kriteria::all();
        return view('dashboard.matriks.index', [
            'title' => 'Manage matriks',
            'active' => 'matriks',
            'matriks' => $matriks,
            'kriteria' => $kriteria,
            'periode' => $periode,
            'no' => 1
        ]);
    }
}
