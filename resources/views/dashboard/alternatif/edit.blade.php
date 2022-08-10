@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Alternatif</h1>
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
                <b>1.</b> Milik Sendiri
            </label>
            <input class="form-check-input" type="radio" name="status_bangunan" id="status_bangunan" value="2" {{ ($alternatif->status_bangunan === 2) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="status_bangunan">
                <b>2.</b> Kontrakan/Sewa
            </label>
            <input class="form-check-input" type="radio" name="status_bangunan" id="status_bangunan" value="3" {{ ($alternatif->status_bangunan === 3) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="status_bangunan">
                <b>3.</b> Bebas Sewa
            </label>
            <input class="form-check-input" type="radio" name="status_bangunan" id="status_bangunan" value="4" {{ ($alternatif->status_bangunan === 4) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="status_bangunan">
                <b>4.</b> Dinas
            </label>
        </div>

        <div class="mb-3">
            <label for="status_lahan" class="mb-2 fw-bold">Status Lahan</label><br>

            <input class="form-check-input" type="radio" name="status_lahan" id="status_lahan" value="1" {{ ($alternatif->status_lahan === 1) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="status_lahan">
                <b>1.</b> Milik Sendiri
            </label>
            <input class="form-check-input" type="radio" name="status_lahan" id="status_lahan" value="2" {{ ($alternatif->status_lahan === 2) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="status_lahan">
                <b>2.</b> Tanah Negara
            </label>
            <input class="form-check-input" type="radio" name="status_lahan" id="status_lahan" value="3" {{ ($alternatif->status_lahan === 3) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="status_lahan">
                <b>3.</b> Milik Orang Lain
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
                <b>1.</b> Marmer/Granit
            </label>
            <input class="form-check-input" type="radio" name="jenis_lantai" id="jenis_lantai" value="2" {{ ($alternatif->jenis_lantai === 2) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="jenis_lantai">
                <b>2.</b> Parket/Vinyl
            </label>
            <input class="form-check-input" type="radio" name="jenis_lantai" id="jenis_lantai" value="3" {{ ($alternatif->jenis_lantai === 3) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="jenis_lantai">
                <b>3.</b> Keramik
            </label>
            <input class="form-check-input" type="radio" name="jenis_lantai" id="jenis_lantai" value="4" {{ ($alternatif->jenis_lantai === 4) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="jenis_lantai">
                <b>4.</b> Ubin/Tegel
            </label>
            <input class="form-check-input" type="radio" name="jenis_lantai" id="jenis_lantai" value="5" {{ ($alternatif->jenis_lantai === 5) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="jenis_lantai">
                <b>5.</b> Kayu Kualitas Tinggi
            </label>
            <input class="form-check-input" type="radio" name="jenis_lantai" id="jenis_lantai" value="6" {{ ($alternatif->jenis_lantai === 6) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="jenis_lantai">
                <b>6.</b> Semen/Bata
            </label>
            <input class="form-check-input" type="radio" name="jenis_lantai" id="jenis_lantai" value="7" {{ ($alternatif->jenis_lantai === 7) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="jenis_lantai">
                <b>7.</b> Bambu
            </label>
            <input class="form-check-input" type="radio" name="jenis_lantai" id="jenis_lantai" value="8" {{ ($alternatif->jenis_lantai === 8) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="jenis_lantai">
                <b>8.</b> Kayu Kualitas Rendah
            </label><br>
            <div class="mt-2">
                <input class="form-check-input" type="radio" name="jenis_lantai" id="jenis_lantai" value="9" {{ ($alternatif->jenis_lantai === 9) ? 'checked' : '' }}>
                <label class="form-check-label me-2" for="jenis_lantai">
                    <b>9.</b> Tanah
                </label>
            </div>
        </div>

        <div class="mb-3">
            <label for="jenis_dinding" class="mb-2 fw-bold">Jenis Dinding</label><br>

            <input class="form-check-input" type="radio" name="jenis_dinding" id="jenis_dinding" value="1" {{ ($alternatif->jenis_dinding === 1) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="jenis_dinding">
                <b>1.</b> Tembok
            </label>
            <input class="form-check-input" type="radio" name="jenis_dinding" id="jenis_dinding" value="2" {{ ($alternatif->jenis_dinding === 2) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="jenis_dinding">
                <b>2.</b> Plesteran Anyaman Bambu/Kawat
            </label>
            <input class="form-check-input" type="radio" name="jenis_dinding" id="jenis_dinding" value="3" {{ ($alternatif->jenis_dinding === 3) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="jenis_dinding">
                <b>3.</b> Kayu
            </label>
            <input class="form-check-input" type="radio" name="jenis_dinding" id="jenis_dinding" value="4" {{ ($alternatif->jenis_dinding === 4) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="jenis_dinding">
                <b>4.</b> Anyaman Bambu
            </label>
            <input class="form-check-input" type="radio" name="jenis_dinding" id="jenis_dinding" value="5" {{ ($alternatif->jenis_dinding === 5) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="jenis_dinding">
                <b>5.</b> Batang kayu
            </label>
            <input class="form-check-input" type="radio" name="jenis_dinding" id="jenis_dinding" value="6" {{ ($alternatif->jenis_dinding === 6) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="jenis_dinding">
                <b>6.</b> Bambu
            </label>
        </div>

        <div class="mb-3">
            <label for="fas_bab" class="mb-2 fw-bold">Kepemilikan Fasilitas BAB</label><br>

            <input class="form-check-input" type="radio" name="fas_bab" id="fas_bab" value="1" {{ ($alternatif->fas_bab === 1) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="fas_bab">
                <b>1.</b> Sendiri
            </label>
            <input class="form-check-input" type="radio" name="fas_bab" id="fas_bab" value="2" {{ ($alternatif->fas_bab === 2) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="fas_bab">
                <b>2.</b> Bersama
            </label>
            <input class="form-check-input" type="radio" name="fas_bab" id="fas_bab" value="3" {{ ($alternatif->fas_bab === 3) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="fas_bab">
                <b>3.</b> Umum
            </label>
            <input class="form-check-input" type="radio" name="fas_bab" id="fas_bab" value="4" {{ ($alternatif->fas_bab === 4) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="fas_bab">
                <b>4.</b> Tidak Ada
            </label>
        </div>

        <div class="mb-3">
            <label for="daya_listrik" class="mb-2 fw-bold">Daya Listrik</label><br>

            <input class="form-check-input" type="radio" name="daya_listrik" id="daya_listrik" value="1" {{ ($alternatif->daya_listrik === 1) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="daya_listrik">
                <b>1.</b> Tanpa Meteran
            </label>
            <input class="form-check-input" type="radio" name="daya_listrik" id="daya_listrik" value="2" {{ ($alternatif->daya_listrik === 2) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="daya_listrik">
                <b>2.</b> 450 Watt
            </label>
            <input class="form-check-input" type="radio" name="daya_listrik" id="daya_listrik" value="3" {{ ($alternatif->daya_listrik === 3) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="daya_listrik">
                <b>3.</b> 900 Watt
            </label>
            <input class="form-check-input" type="radio" name="daya_listrik" id="daya_listrik" value="4" {{ ($alternatif->daya_listrik === 4) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="daya_listrik">
                <b>4.</b> 1300 Watt
            </label>
            <input class="form-check-input" type="radio" name="daya_listrik" id="daya_listrik" value="5" {{ ($alternatif->daya_listrik === 5) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="daya_listrik">
                <b>5.</b> 2200 Watt
            </label>
            <input class="form-check-input" type="radio" name="daya_listrik" id="daya_listrik" value="6" {{ ($alternatif->daya_listrik === 6) ? 'checked' : '' }}>
            <label class="form-check-label me-3" for="daya_listrik">
                <b>6.</b> >2200 Watt
            </label>
        </div>

        <div class="mb-3">
            <label for="status_bantuan" class="mb-2 fw-bold">Status Penerima Bantuan Lainnya</label><br>

            <input class="form-check-input" type="radio" name="status_bantuan" id="status_bantuan" value="1" {{ ($alternatif->status_bantuan === 1) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="status_bantuan">
                <b>1.</b> Ada
            </label>
            <input class="form-check-input" type="radio" name="status_bantuan" id="status_bantuan" value="2" {{ ($alternatif->status_bantuan === 2) ? 'checked' : '' }}>
            <label class="form-check-label me-2" for="status_bantuan">
                <b>2.</b> Tidak
            </label>
        </div>
        <button type="submit" class="btn btn-primary px-5 text-center">Submit</button>
    </form>
</div>

@endsection
