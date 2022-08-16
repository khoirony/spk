@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}</h1>
</div>

<div class="container pb-5">
    <form action="/kriteriastore" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_kriteria" class="mb-2 fw-bold">Nama Kriteria</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="mb-3">
            <label for="atribut" class="mb-2 fw-bold">Atribut Kriteria</label>
            <select class="form-select"  id="atribut" name="atribut">
                <option value="benefit">benefit</option>
                <option value="cost">cost</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="bobot" class="mb-2 fw-bold">Bobot Kriteria</label>
            <input type="text" class="form-control" id="bobot" name="bobot" placeholder="1-5">
        </div>

        <button type="submit" class="btn btn-primary px-5 text-center">Submit</button>
    </form>
</div>

@endsection
