@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Manage Alternatif</h1>
</div>

<div>
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            @foreach ($kriteria as $k)
              <th scope="col">{{ $k->name }}</th>
            @endforeach
            <th scope="col" style="text-align: center;width:90px;">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($alternatif as $a)
          <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>
              {{ $a->warga->name }}
            </td>
            @foreach ($kriteria as $k)
            <td>
              <?php 
                $id = 'c'.$k->id;
              ?>
              {{ $a->$id }}
            </td>
            @endforeach
            <td>
                <a href="/editalternatif/{{ $a->id }}" class="btn btn-sm btn-warning"><span data-feather="edit"></span></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
{{ $alternatif->links() }}
@endsection