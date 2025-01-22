<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penjualan;

class PenjualanSeeder extends Seeder
{
    public function run()
    {
        Penjualan::insert([
            ['produk' => 'Produk A', 'jumlah' => 50, 'total' => 500000, 'tanggal' => '2025-01-01'],
            ['produk' => 'Produk B', 'jumlah' => 30, 'total' => 300000, 'tanggal' => '2025-01-02'],
            ['produk' => 'Produk A', 'jumlah' => 20, 'total' => 200000, 'tanggal' => '2025-02-01'],
            ['produk' => 'Produk C', 'jumlah' => 40, 'total' => 400000, 'tanggal' => '2025-02-15'],
            ['produk' => 'Produk B', 'jumlah' => 35, 'total' => 350000, 'tanggal' => '2025-03-10'],
        ]);
    }
}
