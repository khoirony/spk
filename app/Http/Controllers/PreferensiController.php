<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preferensi;

class PreferensiController extends Controller
{
    public function index(Request $request)
    {
        if($request->sort == 1){
            $sort = $request->sort;
            $preferensi = Preferensi::all()->SortBy('rangking');
        }else if($request->sort == 2){
            $sort = $request->sort;
            $preferensi = Preferensi::all()->SortByDesc('rangking');
        }else{
            $sort = 0;
            $preferensi = Preferensi::all();
        }
        return view('dashboard.preferensi.index', [
            'title' => 'Preferensi',
            'active' => 'preferensi',
            'sort' => $sort
        ])->with('preferensi', $preferensi);
    }
}
