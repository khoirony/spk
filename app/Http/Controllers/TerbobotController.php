<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terbobot;
use App\Models\Kriteria;

class TerbobotController extends Controller
{
    public function index()
    {
        $terbobot   = Terbobot::paginate(10);
        $kriteria   = Kriteria::all();
        return view('dashboard.terbobot.index', [
            'title' => 'Normalisasi Terbobot',
            'active' => 'terbobot',
            'terbobot' => $terbobot,
            'kriteria' => $kriteria,
            'no' => 1
        ]);
    }
}
