<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kriteria;
use App\Models\SubKriteria;
use App\Models\Warga;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Khoirony Arief',
            'email' => 'khoirony@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        Kriteria::create([
            'name' => 'Status Bangunan',
            'atribut' => 'benefit',
            'bobot' => 3
        ]);
        SubKriteria::create([
            'name' => 'Milik Sendiri',
            'bobot' => 1,
            'id_kriteria' => 1
        ]);
        SubKriteria::create([
            'name' => 'Dinas',
            'bobot' => 2,
            'id_kriteria' => 1
        ]);
        SubKriteria::create([
            'name' => 'Bebas Sewa',
            'bobot' => 3,
            'id_kriteria' => 1
        ]);
        SubKriteria::create([
            'name' => 'Kontrakan/Sewa',
            'bobot' => 4,
            'id_kriteria' => 1
        ]);

        Kriteria::create([
            'name' => 'Status Lahan',
            'atribut' => 'benefit',
            'bobot' => 3
        ]);
        SubKriteria::create([
            'name' => 'Milik Sendiri',
            'bobot' => 1,
            'id_kriteria' => 2
        ]);
        SubKriteria::create([
            'name' => 'Milik Negara',
            'bobot' => 2,
            'id_kriteria' => 2
        ]);
        SubKriteria::create([
            'name' => 'Milik Orang Lain',
            'bobot' => 3,
            'id_kriteria' => 2
        ]);

        Kriteria::create([
            'name' => 'Luas Lantai',
            'atribut' => 'cost',
            'bobot' => 4
        ]);

        Kriteria::create([
            'name' => 'Jenis Lantai',
            'atribut' => 'benefit',
            'bobot' => 4
        ]);
        SubKriteria::create([
            'name' => 'Marmer',
            'bobot' => 1,
            'id_kriteria' => 4
        ]);
        SubKriteria::create([
            'name' => 'Parket/Vinyl',
            'bobot' => 2,
            'id_kriteria' => 4
        ]);
        SubKriteria::create([
            'name' => 'Keramik',
            'bobot' => 3,
            'id_kriteria' => 4
        ]);
        SubKriteria::create([
            'name' => 'Ubin/Tegel',
            'bobot' => 4,
            'id_kriteria' => 4
        ]);
        SubKriteria::create([
            'name' => 'Kayu/papan kualitas Tinggi',
            'bobot' => 5,
            'id_kriteria' => 4
        ]);
        SubKriteria::create([
            'name' => 'Semen/Bata',
            'bobot' => 6,
            'id_kriteria' => 4
        ]);
        SubKriteria::create([
            'name' => 'Bambu',
            'bobot' => 7,
            'id_kriteria' => 4
        ]);
        SubKriteria::create([
            'name' => 'Kayu/papan kualitas rendah',
            'bobot' => 8,
            'id_kriteria' => 4
        ]);
        SubKriteria::create([
            'name' => 'Tanah',
            'bobot' => 9,
            'id_kriteria' => 4
        ]);

        Kriteria::create([
            'name' => 'Jenis Dinding',
            'atribut' => 'benefit',
            'bobot' => 4
        ]);
        SubKriteria::create([
            'name' => 'Tembok',
            'bobot' => 1,
            'id_kriteria' => 5
        ]);
        SubKriteria::create([
            'name' => 'Plester Anyaman Bambu',
            'bobot' => 2,
            'id_kriteria' => 5
        ]);
        SubKriteria::create([
            'name' => 'Kayu',
            'bobot' => 3,
            'id_kriteria' => 5
        ]);
        SubKriteria::create([
            'name' => 'Anyaman Bambu',
            'bobot' => 4,
            'id_kriteria' => 5
        ]);
        SubKriteria::create([
            'name' => 'Batang Kayu',
            'bobot' => 5,
            'id_kriteria' => 5
        ]);
        SubKriteria::create([
            'name' => 'Bambu',
            'bobot' => 6,
            'id_kriteria' => 5
        ]);

        Kriteria::create([
            'name' => 'Kepemilikan Fas BAB',
            'atribut' => 'benefit',
            'bobot' => 3
        ]);
        SubKriteria::create([
            'name' => 'Sendiri',
            'bobot' => 1,
            'id_kriteria' => 6
        ]);
        SubKriteria::create([
            'name' => 'Bersama',
            'bobot' => 2,
            'id_kriteria' => 6
        ]);
        SubKriteria::create([
            'name' => 'Umum',
            'bobot' => 3,
            'id_kriteria' => 6
        ]);
        SubKriteria::create([
            'name' => 'Tidak Ada',
            'bobot' => 4,
            'id_kriteria' => 6
        ]);

        Kriteria::create([
            'name' => 'Daya Listrik',
            'atribut' => 'cost',
            'bobot' => 4
        ]);
        SubKriteria::create([
            'name' => 'Tanpa Meteran',
            'bobot' => 1,
            'id_kriteria' => 7
        ]);
        SubKriteria::create([
            'name' => '450 Watt',
            'bobot' => 2,
            'id_kriteria' => 7
        ]);
        SubKriteria::create([
            'name' => '900 Watt',
            'bobot' => 3,
            'id_kriteria' => 7
        ]);
        SubKriteria::create([
            'name' => '1300 Watt',
            'bobot' => 4,
            'id_kriteria' => 7
        ]);
        SubKriteria::create([
            'name' => '2200 Watt',
            'bobot' => 5,
            'id_kriteria' => 7
        ]);
        SubKriteria::create([
            'name' => '>2200 Watt',
            'bobot' => 6,
            'id_kriteria' => 7
        ]);

        Kriteria::create([
            'name' => 'Status Penerima Bantuan Lain',
            'atribut' => 'benefit',
            'bobot' => 5
        ]);
        SubKriteria::create([
            'name' => 'Ada',
            'bobot' => 1,
            'id_kriteria' => 8
        ]);
        SubKriteria::create([
            'name' => 'Tidak',
            'bobot' => 2,
            'id_kriteria' => 8
        ]);

        Warga::create([
            'name' => 'Bambang Ristianto',
            'alamat' => 'DSN KARANG ANYAR RT 03 RW 02 DUSUN KARANG ANYAR RW 02 RT 03'
        ]);
        Warga::create([
            'name' => 'Dewantoro',
            'alamat' => 'DSN KARANG ANYAR RT 03 RW 02 DUSUN KARANG ANYAR RW 02 RT 03'
        ]);
        Warga::create([
            'name' => 'Karman',
            'alamat' => 'DSN TEMAJI RT 04 RW 01 DUSUN TEMAJI RW 01 RT 04'
        ]);
        Warga::create([
            'name' => 'Kasimin',
            'alamat' => 'DUSUN KARANG ANYAR RT 01 RW 02'
        ]);
        Warga::create([
            'name' => 'Kastoyan',
            'alamat' => 'DSN GLAGAH RT 06 RW 02 DUSUN GLAGAH RW 02 RT 06'
        ]);
        Warga::create([
            'name' => 'Kasturi',
            'alamat' => 'DSN TERANGREJO RT 05 RW 01 DUSUN TERANGREJO RW 01 RT 05'
        ]);
        Warga::create([
            'name' => 'Lamsi',
            'alamat' => 'DSN TERANG REJO RT 07 RW 01 DUSUN TERANGREJO RW 01 RT 07'
        ]);
        Warga::create([
            'name' => 'Lasminto',
            'alamat' => 'DSN TERANGREJO RT 05 RW 01 DUSUN TERANGREJO RW 01 RT 05'
        ]);
        Warga::create([
            'name' => 'Marsidan',
            'alamat' => 'DSN TERANGREJO RT 08 RW 01 DUSUN TERANGREJO RW 01 RT 08'
        ]);
        Warga::create([
            'name' => 'Masrip',
            'alamat' => 'DSN KARANG ANYAR RT 03 RW 02 DUSUN KARANG ANYAR RW 02 RT 03'
        ]);
        Warga::create([
            'name' => 'Muslih',
            'alamat' => 'DSN KARANG ANYAR RT 03 RW 02 DUSUN KARANG ANYAR RW 02 RT 03'
        ]);
        Warga::create([
            'name' => 'Pawit Sugianto',
            'alamat' => 'DUSUN TERANGREJO RT 06 RW 01'
        ]);
        Warga::create([
            'name' => 'Sadjimin',
            'alamat' => 'DSN KARANG ANYAR RT 04 RW 02 DUSUN KARANG ANYAR RW 02 RT 04'
        ]);
        Warga::create([
            'name' => 'Wiwik Setiawan',
            'alamat' => 'DUSUN KARANG ANYAR RT 02 RW 02'
        ]);
        Warga::create([
            'name' => 'Warmuji',
            'alamat' => 'DSN TEMAJI RT 04 RW 01 DUSUN TEMAJI RW 01 RT 04'
        ]);
        Warga::create([
            'name' => 'Wajimin',
            'alamat' => 'DSN TERANGREJO RT 05 RW 01 DUSUN TERANGREJO RW 01 RT 05'
        ]);
        Warga::create([
            'name' => 'Tasmari',
            'alamat' => 'DUSUN TERANGREJO RT 06 RW 01'
        ]);
        Warga::create([
            'name' => 'Tarmadi',
            'alamat' => 'DSN KARANG ANYAR RT 04 RW 02 DUSUN KARANG ANYAR RW 02 RT 04'
        ]);
        Warga::create([
            'name' => 'Suwono',
            'alamat' => 'DSN TERANGREJO RT 05 RW 01 DUSUN TERANGREJO RW 01 RT 05'
        ]);
        Warga::create([
            'name' => 'Sumarni',
            'alamat' => 'DSN GLAGAH RT 06 RW 02'
        ]);
        Warga::create([
            'name' => 'Sucipto',
            'alamat' => 'DSN KARANG ANYAR RT 03 RW 02 DUSUN KARANG ANYAR RW 02 RT 03'
        ]);
        Warga::create([
            'name' => 'Sokran',
            'alamat' => 'DSN TERANGREJO RT 08 RW 01 DUSUN TERANGREJO RW 01 RT 08'
        ]);
        Warga::create([
            'name' => 'Seminah',
            'alamat' => 'DSN JAJAR RT 05 RW 02 DUSUN JAJAR RW 02 RT 05'
        ]);
        Warga::create([
            'name' => 'Samiatun',
            'alamat' => 'DSN KARANG ANYAR RT 03 RW 02 DUSUN KARANG ANYAR RW 02 RT 03'
        ]);
        Warga::create([
            'name' => 'Sakrun',
            'alamat' => 'DUSUN TEMAJI RT 02 RW 01'
        ]);
        Warga::create([
            'name' => 'Alifan',
            'alamat' => 'DSN TERANGREJO RT 08 RW 01 DUSUN TERANGREJO RW 01 RT 08'
        ]);
        Warga::create([
            'name' => 'Amin Djohari',
            'alamat' => 'DSN TERANGREJO RT 05 RW 01 DUSUN TERANGREJO RW 01 RT 05'
        ]);
        Warga::create([
            'name' => 'Darim',
            'alamat' => 'DUSUN KARANG ANYAR RT 01 RW 02'
        ]);
        Warga::create([
            'name' => 'Darmaji',
            'alamat' => 'DSN TERANGREJO RT 05 RW 01 DUSUN TERANGREJO RW 01 RT 05'
        ]);
        Warga::create([
            'name' => 'Dasidin',
            'alamat' => 'DSN JAJAR RT 5 RW'
        ]);
    }
}
