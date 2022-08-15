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
            'bobot' => 4
        ]);
        Kriteria::create([
            'name' => 'Jenis Lantai',
            'bobot' => 4
        ]);
        Kriteria::create([
            'name' => 'Jenis Dinding',
            'bobot' => 4
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
