<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Pelatihans;
use App\Models\KategoriPelatihan;


class PelatihansController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');
        $user = Auth::user();

        $kategori = KategoriPelatihan::all();


        return view('admin.pelatihan.index', compact('kategori'));
    }
    
    public function data(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');
        $user = Auth::user();

        $pelatihan = Pelatihans::select('pelatihan.*', 'kategori_pelatihan.name as kategori')
        ->leftjoin('kategori_pelatihan', 'pelatihan.kategori_id', '=','kategori_pelatihan.id')
        ->get();

        return Datatables::of($pelatihan)->make(true);

    }
}
