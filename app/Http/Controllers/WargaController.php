<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;

class WargaController extends Controller
{
    public function index()
    {
        $warga   = Warga::paginate(10);
        return view('dashboard.warga.index', [
            'title' => 'Manage warga',
            'active' => 'warga',
            'warga' => $warga,
            'no' => 1
        ]);
    }

    public function create()
    {
        return view('dashboard.warga.tambah', [
            'title' => 'Tambah Warga',
            'active' => 'warga'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'alamat' => 'required'
        ]);

        Warga::create($request->all());

        return redirect('/warga')->with('success', 'Warga Sukses Ditambahkan');
    }

    public function edit($id)
    {
        $warga = Warga::find($id);
        return view('dashboard.warga.edit',[
            'title' => 'Edit Warga',
            'active' => 'warga'
        ], compact('warga'));
    }

    public function update(Request $request, $id)
    {
        $warga = Warga::find($id);
        $warga->name = $request->input('name');
        $warga->alamat = $request->input('alamat');
        $warga->update();

        return redirect('/warga')->with('success', 'Warga Sukses Diedit');
    }

    public function destroy($id)
    {
        $warga = Warga::where('id', $id)->delete();
        return redirect('/warga')->with('success', 'Warga Sukses Dihapus');
    }
}
