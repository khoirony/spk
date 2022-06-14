<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Positifnegatif;

class SolusiController extends Controller
{
    public function index()
    {
        $positifnegatif = Positifnegatif::all();
        return view('dashboard.solusi.index', [
            'title' => 'Solusi Ideal Positif dan Negatif',
            'active' => 'solusi'
        ])->with('positifnegatif', $positifnegatif);
    }
}
