<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use App\Models\Nilai;

class SawController extends Controller
{
    public function index()
    {
        // Ambil data
        $alternatifs = Alternatif::all();
        $kriterias = Kriteria::all();

        // Data mentah
        $nilai = [];
        foreach ($alternatifs as $alternatif) {
            foreach ($kriterias as $kriteria) {
                $n = Nilai::where('alternatif_id', $alternatif->id)
                    ->where('kriteria_id', $kriteria->id)
                    ->first();
                $nilai[$alternatif->id][$kriteria->id] = $n ? $n->nilai : null;
            }
        }

        // Normalisasi
        $normalisasi = [];
        foreach ($kriterias as $kriteria) {
            $max = Nilai::where('kriteria_id', $kriteria->id)->max('nilai');
            $min = Nilai::where('kriteria_id', $kriteria->id)->min('nilai');

            foreach ($alternatifs as $alternatif) {
                $n = $nilai[$alternatif->id][$kriteria->id] ?? 0;
                $normalisasi[$alternatif->id][$kriteria->id] = $kriteria->jenis === 'benefit'
                    ? $n / $max
                    : $min / $n;
            }
        }

        // Perhitungan nilai akhir
        $ranking = [];
        foreach ($alternatifs as $alternatif) {
            $nilaiAkhir = 0;
            foreach ($kriterias as $kriteria) {
                $nilaiAkhir += $normalisasi[$alternatif->id][$kriteria->id] * $kriteria->bobot;
            }
            $ranking[] = [
                'alternatif' => $alternatif->nama,
                'nilai' => $nilaiAkhir,
            ];
        }

        // Urutkan berdasarkan nilai akhir
        usort($ranking, function ($a, $b) {
            return $b['nilai'] <=> $a['nilai'];
        });

        return view('belajar.saw.index', compact('alternatifs', 'kriterias', 'nilai', 'normalisasi', 'ranking'));
    }
}
