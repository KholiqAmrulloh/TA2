<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\NilaiK;
use Illuminate\Support\Facades\DB;

class KmedoidsController extends Controller
{
    public function index(Request $request)
    {
        $data = 2;
        $barang = Barang::all();
        $random = DB::table('barangs')->inRandomOrder()->take($data)->get();
        return view('kmedoids.index', [
            'data' => $random,
            'barang' => $barang,
            'title' => 'K-Medoids Clustering'
        ]);
    }

    public function tentukan(Request $request)
    {
        NilaiK::create($request->all());
        return redirect('/nilaiK')->with('nilaik', 'Nilai K sudah ditentukan, Silahkan lanjutkan proses clustering');
    }
}
