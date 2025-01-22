<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Tambahkan kriteria
    \App\Models\Kriteria::insert([
        ['nama' => 'Harga', 'bobot' => 0.4, 'jenis' => 'cost'],
        ['nama' => 'Kualitas', 'bobot' => 0.3, 'jenis' => 'benefit'],
        ['nama' => 'Fitur', 'bobot' => 0.3, 'jenis' => 'benefit'],
    ]);

    // Tambahkan alternatif
    \App\Models\Alternatif::insert([
        ['nama' => 'Alternatif 1'],
        ['nama' => 'Alternatif 2'],
        ['nama' => 'Alternatif 3'],
    ]);

    // Tambahkan nilai
    \App\Models\Nilai::insert([
        ['alternatif_id' => 1, 'kriteria_id' => 1, 'nilai' => 500],
        ['alternatif_id' => 1, 'kriteria_id' => 2, 'nilai' => 80],
        ['alternatif_id' => 1, 'kriteria_id' => 3, 'nilai' => 7],

        ['alternatif_id' => 2, 'kriteria_id' => 1, 'nilai' => 600],
        ['alternatif_id' => 2, 'kriteria_id' => 2, 'nilai' => 90],
        ['alternatif_id' => 2, 'kriteria_id' => 3, 'nilai' => 8],

        ['alternatif_id' => 3, 'kriteria_id' => 1, 'nilai' => 400],
        ['alternatif_id' => 3, 'kriteria_id' => 2, 'nilai' => 85],
        ['alternatif_id' => 3, 'kriteria_id' => 3, 'nilai' => 6],
    ]);

    }
}
