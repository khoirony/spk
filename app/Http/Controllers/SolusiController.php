<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Positifnegatif;
use App\Models\Dpositif;
use App\Models\Dnegatif;

class SolusiController extends Controller
{
    public function index()
    {
        $positifnegatif = Positifnegatif::all();
        $dpositif = Dpositif::paginate(10);
        $dnegatif = Dnegatif::paginate(10);
        return view('dashboard.solusi.index', [
            'title' => 'Solusi Ideal Positif dan Negatif',
            'active' => 'solusi',
            'positifnegatif' => $positifnegatif,
            'dpositif' => $dpositif,
            'dnegatif' => $dnegatif
        ]);
    }
}
