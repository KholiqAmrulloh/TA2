<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\NilaiK;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NilaiKController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('nilaiK.index', [
            'barang' => $barang,
            'title' => 'Nilai K'
        ]);
    }

    public function hasil()
    {
        $barang = Barang::all();
        return view('nilaiK.hasil', [
            'barang' => $barang,
            'title' => 'Nilai K'
        ]);
    }

    public function reset()
    {
        DB::table('nilai_k_s')->truncate();
        return redirect()->back()->with('warningg', 'Nilai K Berhasil Direset!');
    }
}
