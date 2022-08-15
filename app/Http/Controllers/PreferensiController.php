<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preferensi;

class PreferensiController extends Controller
{
    public function index()
    {
        $preferensi = Preferensi::all()->SortByDesc('rangking');
        return view('dashboard.preferensi.index', [
            'title' => 'Preferensi',
            'active' => 'preferensi'
        ])->with('preferensi', $preferensi);
    }
}
