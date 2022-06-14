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
        <tr>
            <th scope="col">A1</th>
            <th scope="col">4</th>
        </tr>
        <tr>
            <th scope="col">A2</th>
            <th scope="col">3</th>
        </tr>
    </tbody>
</table>
</div>
    
@endsection