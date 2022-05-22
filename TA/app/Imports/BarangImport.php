<?php

namespace App\Imports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\ToModel;

class BarangImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Barang([
            'id_barang' => $row[0],
            'nama_barang' => $row[1],
            'total_stock_barang_awal' => $row[2],
            'transaksi' => $row[3],
            'barang_terjual' => $row[4],
            'sisa_barang' => $row[5],
            'harga_beli' => $row[6],
            'harga_jual' => $row[7],
            'keuntungan' => $row[8],
            'ratarata_penjualan_pertahun' => $row[9],
            'tahun' => $row[10]
        ]);
    }
}
