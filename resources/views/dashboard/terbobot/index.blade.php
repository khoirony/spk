@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Normalisasi Terbobot</h1>
</div>

<div class="container-fluid">
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Alternatif</th>
            <th scope="col">Status Bangunan</th>
            <th scope="col">Status Lahan</th>
            <th scope="col">Luas Lantai</th>
            <th scope="col">Jenis Lantai</th>
            <th scope="col">Jenis Dinding</th>
            <th scope="col">Fasilitas BAB</th>
            <th scope="col">Daya Listrik</th>
            <th scope="col">Status Bantuan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($terbobot as $t)
          <tr>
            <th scope="row">{{ $t->name }}</th>
            <td>
              {{ $t->status_bangunan }}
            </td>
            <td>
              {{ $t->status_lahan }}
            </td>
            <td>
              {{ $t->luas_lantai }}</sup>
            </td>
            <td>
              {{ $t->jenis_lantai }}
            </td>
            <td>
              {{ $t->jenis_dinding }}
            </td>
            <td>
              {{ $t->fas_bab }}
            </td>
            <td>
              {{ $t->daya_listrik }}
            </td>
            <td>
              {{ $t->status_bantuan }}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
    
@endsection