<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Positifnegatif;
use App\Models\Dpositif;
use App\Models\Dnegatif;
use App\Models\Kriteria;

class SolusiController extends Controller
{
    public function index()
    {
        $positifnegatif = Positifnegatif::all();
        $dpositif = Dpositif::paginate(10);
        $dnegatif = Dnegatif::paginate(10);
        $kriteria   = Kriteria::all();
        return view('dashboard.solusi.index', [
            'title' => 'Solusi Ideal Positif dan Negatif',
            'active' => 'solusi',
            'positifnegatif' => $positifnegatif,
            'dpositif' => $dpositif,
            'dnegatif' => $dnegatif,
            'kriteria' => $kriteria,
            'no' => 1
        ]);
    }
}
