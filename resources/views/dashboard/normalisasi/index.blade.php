@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Normalisasi</h1> <div class="col text-end pe-3">Periode : </div><div class="col-2"><form action="/normalisasi" method="post"> @csrf <input type="month" class="form-control" id="periode" name="periode" value="{{ $periode }}" onchange="this.form.submit();"></form></div>
</div>

<div class="container-fluid">
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            @foreach ($kriteria as $k)
              <th scope="col">{{ $k->name }}</th>
            @endforeach
          </tr>
        </thead>
        <tbody>
          @foreach ($normalisasi as $n)
          <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>
              {{ $n->warga->name }}
            </td>
            @foreach ($kriteria as $k)
            <td>
              <?php 
                $id = 'c'.$k->id;
              ?>
              {{ $n->$id }}
            </td>
            @endforeach
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
{{ $normalisasi->links() }}
@endsection