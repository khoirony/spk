@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Manage Alternatif</h1> <a href="/tambah" class="btn btn-sm btn-primary">Tambah Data</a>
</div>

<div>
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
            <th scope="col" style="text-align: center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($alternatif as $a)
          <tr>
            <th scope="row">{{ $a->name }}</th>
            <td>
              @switch($a->status_bangunan)
                @case(1)
                  Milik Sendiri @break
                @case(2)
                  Kontrakan/Sewa @break
                @case(3)
                  Bebas Sewa @break
                @case(4)
                  Dinas @break
                @case(5)
                  Lainnya @break
                @default
                  -kosong-
              @endswitch
            </td>
            <td>
              @switch($a->status_lahan)
                @case(1)
                  Milik Sendiri @break
                @case(2)
                  Milik Orang lain @break
                @case(3)
                  Tanah Negara @break
                @case(4)
                  Lainnya @break
                @default
                  -kosong-
              @endswitch
            </td>
            <td>
              {{ $a->luas_lantai }} M<sup>2</sup>
            </td>
            <td>
              @switch($a->jenis_lantai)
                @case(1)
                  Marmer/Granit @break
                @case(2)
                  Kermik @break
                @case(3)
                  Parket/Vinyl @break
                @case(4)
                  Ubin/Tegel @break
                @case(5)
                  Kayu/Papan (bagus) @break
                @case(6)
                  Semen/Bata @break
                @case(7)
                  Bambu @break
                @case(8)
                  Kayu/Papan (jelek) @break
                @default
                  -kosong-
              @endswitch
            </td>
            <td>
              @switch($a->jenis_dinding)
                @case(1)
                  Tembok @break
                @case(2)
                  Plesteran Anyaman Bambu/Kawat @break
                @case(3)
                  Kayu @break
                @case(4)
                  Anyaman Bambu @break
                @case(5)
                  Batang Kayu @break
                @default
                  -kosong-
              @endswitch
            </td>
            <td>
              @switch($a->fas_bab)
                @case(1)
                  Sendiri @break
                @case(2)
                  Bersama @break
                @case(3)
                  Umum @break
                @case(4)
                  Tidak Ada @break
                @default
                  -kosong-
              @endswitch
            </td>
            <td>
              @switch($a->daya_listrik)
                @case(1)
                  450 Watt @break
                @case(2)
                  900 Watt @break
                @case(3)
                  1300 Watt @break
                @case(4)
                  2200 Watt @break
                @case(5)
                  >2200 Watt @break
                @case(5)
                  Tanpa Meteran @break
                @default
                  -kosong-
              @endswitch
            </td>
            <td>
              @switch($a->status_bantuan)
                @case(1)
                  Ada @break
                @case(2)
                  Tidak @break
                @default
                  -kosong-
              @endswitch
            </td>
            <td>
                <a href="/edit/{{ $a->id }}" class="btn btn-sm btn-warning"><span data-feather="edit"></span></a> <a href="/hapus/{{ $a->id }}" class="btn btn-sm btn-secondary"><span data-feather="trash-2"></span></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
    
@endsection