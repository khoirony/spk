@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Normalisasi</h1>
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
          @foreach ($normalisasi as $n)
          <tr>
            <th scope="row">{{ $n->name }}</th>
            <td>
              {{ $n->status_bangunan }}
            </td>
            <td>
              {{ $n->status_lahan }}
            </td>
            <td>
              {{ $n->luas_lantai }}</sup>
            </td>
            <td>
              {{ $n->jenis_lantai }}
            </td>
            <td>
              {{ $n->jenis_dinding }}
            </td>
            <td>
              {{ $n->fas_bab }}
            </td>
            <td>
              {{ $n->daya_listrik }}
            </td>
            <td>
              {{ $n->status_bantuan }}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
{{ $normalisasi->links() }}
@endsection