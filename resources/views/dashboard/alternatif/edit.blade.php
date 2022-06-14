@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data</h1>
</div>

<div class="container pb-5">
    <form action="/update/{{ $alternatif->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="alternatif" class="mb-2 fw-bold">Alternatif</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="A1" value="{{$alternatif->name}}">
        </div>
        <div class="mb-3">
            <label for="status_bangunan" class="mb-2 fw-bold">Status Bangunan</label> <br>

            <input class="form-check-input" type="radio" name="status_bangunan" id="status_bangunan" value="1" {{ ($alternatif->status_bangunan === 1) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="status_bangunan">
                Milik Sendiri
            </label>
            <input class="form-check-input" type="radio" name="status_bangunan" id="status_bangunan" value="2" {{ ($alternatif->status_bangunan === 2) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="status_bangunan">
                Kontrakan/Sewa
            </label>
            <input class="form-check-input" type="radio" name="status_bangunan" id="status_bangunan" value="3" {{ ($alternatif->status_bangunan === 3) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="status_bangunan">
                Bebas Sewa
            </label>
            <input class="form-check-input" type="radio" name="status_bangunan" id="status_bangunan" value="4" {{ ($alternatif->status_bangunan === 4) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="status_bangunan">
                Dinas
            </label>
            <input class="form-check-input" type="radio" name="status_bangunan" id="status_bangunan" value="5" {{ ($alternatif->status_bangunan === 5) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="status_bangunan">
                Lainnya
            </label>
        </div>

        <div class="mb-3">
            <label for="status_lahan" class="mb-2 fw-bold">Status Lahan</label><br>

            <input class="form-check-input" type="radio" name="status_lahan" id="status_lahan" value="1" {{ ($alternatif->status_lahan === 1) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="status_lahan">
                Milik Sendiri
            </label>
            <input class="form-check-input" type="radio" name="status_lahan" id="status_lahan" value="2" {{ ($alternatif->status_lahan === 2) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="status_lahan">
                Milik Orang Lain
            </label>
            <input class="form-check-input" type="radio" name="status_lahan" id="status_lahan" value="3" {{ ($alternatif->status_lahan === 3) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="status_lahan">
                Tanah Negara
            </label>
            <input class="form-check-input" type="radio" name="status_lahan" id="status_lahan" value="4" {{ ($alternatif->status_lahan === 4) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="status_lahan">
                Lainnya
            </label>
        </div>

        <div class="mb-3">
            <label for="luas_lantai" class="mb-2 fw-bold">Luas Lantai</label>
            <input type="text" class="form-control" id="luas_lantai" name="luas_lantai" placeholder="dalam satuan meter" value="{{$alternatif->luas_lantai}}">
        </div>

        <div class="mb-3">
            <label for="jenis_lantai" class="mb-2 fw-bold">Jenis Lantai</label><br>

            <input class="form-check-input" type="radio" name="jenis_lantai" id="jenis_lantai" value="1" {{ ($alternatif->jenis_lantai === 1) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="jenis_lantai">
                Marmer/Granit
            </label>
            <input class="form-check-input" type="radio" name="jenis_lantai" id="jenis_lantai" value="2" {{ ($alternatif->jenis_lantai === 2) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="jenis_lantai">
                Keramik
            </label>
            <input class="form-check-input" type="radio" name="jenis_lantai" id="jenis_lantai" value="3" {{ ($alternatif->jenis_lantai === 3) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="jenis_lantai">
                Parket/Vinyl
            </label>
            <input class="form-check-input" type="radio" name="jenis_lantai" id="jenis_lantai" value="4" {{ ($alternatif->jenis_lantai === 4) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="jenis_lantai">
                Ubin/Tegel
            </label>
            <input class="form-check-input" type="radio" name="jenis_lantai" id="jenis_lantai" value="5" {{ ($alternatif->jenis_lantai === 5) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="jenis_lantai">
                Kayu/Papan Kualitas Tinggi
            </label>
            <input class="form-check-input" type="radio" name="jenis_lantai" id="jenis_lantai" value="6" {{ ($alternatif->jenis_lantai === 6) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="jenis_lantai">
                Semen/Bata
            </label>
            <input class="form-check-input" type="radio" name="jenis_lantai" id="jenis_lantai" value="7" {{ ($alternatif->jenis_lantai === 7) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="jenis_lantai">
                Bambu
            </label>
            <input class="form-check-input" type="radio" name="jenis_lantai" id="jenis_lantai" value="8" {{ ($alternatif->jenis_lantai === 8) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="jenis_lantai">
                Kayu/Papan Kualitas Rendah
            </label>
        </div>

        <div class="mb-3">
            <label for="jenis_dinding" class="mb-2 fw-bold">Jenis Dinding</label><br>

            <input class="form-check-input" type="radio" name="jenis_dinding" id="jenis_dinding" value="1" {{ ($alternatif->jenis_dinding === 1) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="jenis_dinding">
                Tembok
            </label>
            <input class="form-check-input" type="radio" name="jenis_dinding" id="jenis_dinding" value="2" {{ ($alternatif->jenis_dinding === 2) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="jenis_dinding">
                Plesteran Anyaman Bambu/Kawat
            </label>
            <input class="form-check-input" type="radio" name="jenis_dinding" id="jenis_dinding" value="3" {{ ($alternatif->jenis_dinding === 3) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="jenis_dinding">
                Kayu
            </label>
            <input class="form-check-input" type="radio" name="jenis_dinding" id="jenis_dinding" value="4" {{ ($alternatif->jenis_dinding === 4) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="jenis_dinding">
                Anyaman Bambu
            </label>
            <input class="form-check-input" type="radio" name="jenis_dinding" id="jenis_dinding" value="5" {{ ($alternatif->jenis_dinding === 5) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="jenis_dinding">
                Batang kayu
            </label>
        </div>

        <div class="mb-3">
            <label for="fas_bab" class="mb-2 fw-bold">Kepemilikan Fasilitas BAB</label><br>

            <input class="form-check-input" type="radio" name="fas_bab" id="fas_bab" value="1" {{ ($alternatif->fas_bab === 1) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="fas_bab">
                Sendiri
            </label>
            <input class="form-check-input" type="radio" name="fas_bab" id="fas_bab" value="2" {{ ($alternatif->fas_bab === 2) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="fas_bab">
                Bersama
            </label>
            <input class="form-check-input" type="radio" name="fas_bab" id="fas_bab" value="3" {{ ($alternatif->fas_bab === 3) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="fas_bab">
                Umum
            </label>
            <input class="form-check-input" type="radio" name="fas_bab" id="fas_bab" value="4" {{ ($alternatif->fas_bab === 4) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="fas_bab">
                Tidak Ada
            </label>
        </div>

        <div class="mb-3">
            <label for="daya_listrik" class="mb-2 fw-bold">Daya Listrik</label><br>

            <input class="form-check-input" type="radio" name="daya_listrik" id="daya_listrik" value="1" {{ ($alternatif->daya_listrik === 1) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="daya_listrik">
                450 Watt
            </label>
            <input class="form-check-input" type="radio" name="daya_listrik" id="daya_listrik" value="2" {{ ($alternatif->daya_listrik === 2) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="daya_listrik">
                900 Watt
            </label>
            <input class="form-check-input" type="radio" name="daya_listrik" id="daya_listrik" value="3" {{ ($alternatif->daya_listrik === 3) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="daya_listrik">
                1300 Watt
            </label>
            <input class="form-check-input" type="radio" name="daya_listrik" id="daya_listrik" value="4" {{ ($alternatif->daya_listrik === 4) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="daya_listrik">
                2200 Watt
            </label>
            <input class="form-check-input" type="radio" name="daya_listrik" id="daya_listrik" value="5" {{ ($alternatif->daya_listrik === 5) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="daya_listrik">
                >2200 Watt
            </label>
            <input class="form-check-input" type="radio" name="daya_listrik" id="daya_listrik" value="5" {{ ($alternatif->daya_listrik === 6) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="daya_listrik">
                Tanpa Meteran
            </label>
        </div>

        <div class="mb-3">
            <label for="status_bantuan" class="mb-2 fw-bold">Status Penerima Bantuan Lainnya</label><br>

            <input class="form-check-input" type="radio" name="status_bantuan" id="status_bantuan" value="1" {{ ($alternatif->status_bantuan === 1) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="status_bantuan">
                Ada
            </label>
            <input class="form-check-input" type="radio" name="status_bantuan" id="status_bantuan" value="2" {{ ($alternatif->status_bantuan === 2) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="status_bantuan">
                Tidak
            </label>
        </div>
        <button type="submit" class="btn btn-primary px-5 text-center">Submit</button>
    </form>
</div>

@endsection
