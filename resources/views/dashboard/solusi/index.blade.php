@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Solusi Ideal Positif dan Negatif</h1>
</div>

<div class="container-fluid">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">+-</th>
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
            @foreach ($positifnegatif as $pn)
          <tr>
            <th scope="row">{{ $pn->name }}</th>
            <td>
              {{ $pn->status_bangunan }}
            </td>
            <td>
              {{ $pn->status_lahan }}
            </td>
            <td>
              {{ $pn->luas_lantai }}</sup>
            </td>
            <td>
              {{ $pn->jenis_lantai }}
            </td>
            <td>
              {{ $pn->jenis_dinding }}
            </td>
            <td>
              {{ $pn->fas_bab }}
            </td>
            <td>
              {{ $pn->daya_listrik }}
            </td>
            <td>
              {{ $pn->status_bantuan }}
            </td>
          </tr>
          @endforeach
        </tbody>
    </table><br>

    <div class="row">
      <div class="col">
        <h3>D+</h3>
        <table class="table table-striped table-hover">
          <thead>
              <tr>
                  <th scope="col">Alternatif</th>
                  <th scope="col">Nilai</th>
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
      <div class="col">
        <h3>D-</h3>
        <table class="table table-striped table-hover">
          <thead>
              <tr>
                  <th scope="col">Alternatif</th>
                  <th scope="col">Nilai</th>
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
    </div>

</div>

@endsection
