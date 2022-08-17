@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Alternatif</h1>  <div class="col text-end pe-3">Periode : </div><div class="col-2"><form action="/editalternatif/{{ $warga->id }}" method="post"> @csrf <input type="month" class="form-control" id="periode" name="periode" value="{{ $periode }}" onchange="this.form.submit();"></form></div>
</div>

<div class="container pb-5">
    <form action="/updatealternatif/{{ $warga->id }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" id="periode" name="periode" value="{{ $periode }}"> 

        <div class="mb-3">
            Nama : {{ $warga->name }} <br>
        </div>

        @foreach ($kriteria as $k)
            @if($k->subkriteria == '[]')
            <div class="mb-3">
                <?php $kolom = 'c'.$k->id; ?>
                <label for="c{{ $k->id }}" class="mb-2 fw-bold">{{ $k->name }}</label>
                @if($cekalternatif == 0)
                <input type="text" class="form-control" id="c{{ $k->id }}" name="c{{ $k->id }}">
                @else
                <input type="text" class="form-control" id="c{{ $k->id }}" name="c{{ $k->id }}" value="{{ $alternatif->$kolom }}">
                @endif
                <?php $kolom = 0; ?>
            </div>
            @else
            <div class="mb-3">
                <label for="c{{ $k->id }}" class="mb-2 fw-bold">{{ $k->name }}</label> <br>
                @foreach ($k->subkriteria as $sub)
                    <?php $id = 'c'.$k->id; ?>
                    @if($cekalternatif == 0)
                    <input class="form-check-input" type="radio" name="c{{ $k->id }}" id="c{{ $k->id }}" value="{{ $sub->bobot }}">
                    @else
                    <input class="form-check-input" type="radio" name="c{{ $k->id }}" id="c{{ $k->id }}" value="{{ $sub->bobot }}" {{ ($alternatif->$id === $sub->bobot) ? 'checked' : '' }}>
                    @endif
                    <label class="form-check-label me-3" for="c{{ $k->id }}">
                        <b>{{ $sub->bobot }}.</b> {{ $sub->name }}
                    </label>
                    <?php $id = 0; ?>
                @endforeach
            </div>
            @endif
        @endforeach

        <button type="submit" class="btn btn-primary px-5 text-center">Submit</button>
    </form>
</div>

@endsection
