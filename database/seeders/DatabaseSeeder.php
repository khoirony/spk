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
            'name' => 'Kayu kualitas Tinggi',
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
            'name' => 'Kayu kualitas rendah',
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

        Warga::create([
            'alamat' => 'DSN KARANG ANYAR RT 03 RW 02 DUSUN KARANG ANYAR RW 02 RT 03',
            'name' => 'Sucipto'
        ]);

        Warga::create([
            'alamat' => 'DSN KARANG ANYAR RT 03 RW 02 DUSUN KARANG ANYAR RW 02 RT 04',
            'name' => 'Sumarni'
        ]);
    }
}
