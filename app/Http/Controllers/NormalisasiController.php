<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Normalisasi;
use App\Models\Kriteria;

class NormalisasiController extends Controller
{
    public function index()
    {
        $normalisasi   = Normalisasi::paginate(10);
        $kriteria   = Kriteria::paginate(10);
        return view('dashboard.normalisasi.index', [
            'title' => 'Normalisasi',
            'active' => 'normalisasi',
            'normalisasi' => $normalisasi,
            'kriteria' => $kriteria,
            'no' => 1
        ]);
    }
}
