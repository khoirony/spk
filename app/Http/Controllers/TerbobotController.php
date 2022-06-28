<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terbobot;
use App\Models\Alternatif;

class TerbobotController extends Controller
{
    public function index()
    {
        $terbobot   = Terbobot::paginate(10);
        return view('dashboard.terbobot.index', [
            'title' => 'Normalisasi Terbobot',
            'active' => 'terbobot'
        ])->with('terbobot', $terbobot);
    }
}
