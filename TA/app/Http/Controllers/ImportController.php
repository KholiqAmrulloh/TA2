<?php

namespace App\Http\Controllers;

use App\Imports\BarangImport;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('import.index', [
            'barang' => $barang,
            'title' => 'Import Data'
        ]);
    }

    public function import(Request $request)
    {
        $data = $request->file('file');

        $namafile = $data->getClientOriginalName();
        $data->move('DataBarang', $namafile);

        Excel::import(new BarangImport, public_path('/DataBarang/' . $namafile));

        return redirect()->back()->with('success', 'Data Barang Berhasil Diimport!');
    }

    public function delete()
    {
        DB::table('barangs')->truncate();
        return redirect()->back()->with('warning', 'Data Barang Berhasil Dihapus!');
    }
}
