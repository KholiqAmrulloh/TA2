<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('id_barang');
            $table->string('nama_barang');
            $table->string('total_stock_barang_awal');
            $table->string('transaksi');
            $table->string('barang_terjual');
            $table->string('sisa_barang');
            $table->string('harga_beli');
            $table->string('harga_jual');
            $table->string('keuntungan');
            $table->string('ratarata_penjualan_pertahun');
            $table->string('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
};
