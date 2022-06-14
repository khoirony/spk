<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreferensiController extends Controller
{
    public function index()
    {
        return view('dashboard.preferensi.index', [
            'title' => 'Preferensi',
            'active' => 'preferensi'
        ]);
    }
}
