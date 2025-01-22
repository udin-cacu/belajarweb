<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class PenjualanController extends Controller
{
    public function getbelajar()
    {
        return view('belajar.index');
    }
    
    public function index()
    {
        return view('belajar.penjualan.index');
    }

    public function getData(Request $request)
    {
        $data = Penjualan::selectRaw('MONTH(tanggal) as bulan, SUM(jumlah) as total_jumlah, SUM(total) as total_penjualan')
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();

        $labels = $data->pluck('bulan')->map(function ($bulan) {
            return date('F', mktime(0, 0, 0, $bulan, 1));
        });

        $jumlah = $data->pluck('total_jumlah');
        $penjualan = $data->pluck('total_penjualan');

        return response()->json([
            'labels' => $labels,
            'jumlah' => $jumlah,
            'penjualan' => $penjualan,
        ]);
    }
}
