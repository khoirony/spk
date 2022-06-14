@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Preferensi</h1>
</div>

<div class="container-fluid">
  <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Alternatif</th>
            <th scope="col">Preferensi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($preferensi as $p)
            <tr>
              <th scope="row">{{ $p->name }}</th>
              <td>
                {{ $p->nilai }}
              </td>
            </tr>
            @endforeach
    </tbody>
</table>
</div>
    
@endsection