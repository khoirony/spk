<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\SubKriteria;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriteria   = Kriteria::paginate(10);
        return view('dashboard.kriteria.index', [
            'title' => 'Manage Kriteria',
            'active' => 'kriteria',
            'kriteria' => $kriteria,
            'no' => 1
        ]);
    }

    public function create()
    {
        return view('dashboard.kriteria.tambah', [
            'title' => 'Tambah Kriteria',
            'active' => 'kriteria'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'atribut' => 'required',
            'bobot' => 'required'
        ]);

        Kriteria::create($request->all());

        $kriteria = Kriteria::all()->SortByDesc('id')->first();
        $newColumnType = 'integer';
        $newColumnName = 'c'.$kriteria->id;

        echo $kriteria->id;

        Schema::table('alternatifs', function (Blueprint $table) use ($newColumnType, $newColumnName) {
            $table->$newColumnType($newColumnName)->nullable();
        });
        Schema::table('normalisasis', function (Blueprint $table) use ($newColumnType, $newColumnName) {
            $table->$newColumnType($newColumnName)->nullable();
        });
        Schema::table('terbobots', function (Blueprint $table) use ($newColumnType, $newColumnName) {
            $table->$newColumnType($newColumnName)->nullable();
        });
        Schema::table('positifnegatifs', function (Blueprint $table) use ($newColumnType, $newColumnName) {
            $table->$newColumnType($newColumnName)->nullable();
        });
        return redirect('/kriteria')->with('success', 'Kriteria Sukses Ditambahkan');
    }

    public function edit($id)
    {
        $kriteria = Kriteria::find($id);
        return view('dashboard.kriteria.edit',[
            'title' => 'Edit Kriteria',
            'active' => 'kriteria'
        ], compact('kriteria'));
    }

    public function update(Request $request, $id)
    {
        $kriteria = Kriteria::find($id);
        $kriteria->name = $request->input('name');
        $kriteria->atribut = $request->input('atribut');
        $kriteria->bobot = $request->input('bobot');
        $kriteria->update();

        return redirect('/kriteria')->with('success', 'Kriteria Sukses Diedit');
    }

    public function destroy($id)
    {
        $subkriteria = Subkriteria::where('id_kriteria', $id)->delete();
        $kriteria = kriteria::where('id', $id)->delete();

        $column = 'c'.$id;
        Schema::table('alternatifs', function (Blueprint $table) use ($column) {
            $table->dropColumn($column);
        });
        Schema::table('normalisasis', function (Blueprint $table) use ($column) {
            $table->dropColumn($column);
        });
        Schema::table('terbobots', function (Blueprint $table) use ($column) {
            $table->dropColumn($column);
        });
        Schema::table('positifnegatifs', function (Blueprint $table) use ($column) {
            $table->dropColumn($column);
        });
        return redirect('/kriteria')->with('success', 'Kriteria Sukses Dihapus');
    }

    public function subcreate($id)
    {
        return view('dashboard.subkriteria.tambah', [
            'title' => 'Tambah Sub Kriteria',
            'active' => 'kriteria',
            'id' => $id
        ]);
    }

    public function substore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'bobot' => 'required'
        ]);

        SubKriteria::create($request->all());

        return redirect('/kriteria')->with('success', 'Sub Kriteria Sukses Ditambahkan');
    }

    public function subedit($id)
    {
        $subkriteria = SubKriteria::find($id);
        return view('dashboard.subkriteria.edit',[
            'title' => 'Edit Sub Kriteria',
            'active' => 'kriteria'
        ], compact('subkriteria'));
    }

    public function subupdate(Request $request, $id)
    {
        $subkriteria = SubKriteria::find($id);
        $subkriteria->name = $request->input('name');
        $subkriteria->bobot = $request->input('bobot');
        $subkriteria->update();

        return redirect('/kriteria')->with('success', 'Sub kriteria Sukses Diedit');
    }

    public function subdestroy($id)
    {
        $subkriteria = Subkriteria::where('id', $id)->delete();
        return redirect('/kriteria')->with('success', 'Sub Kriteria Sukses Dihapus');
    }
}
