<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporanpengembaliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporanpengembalians', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('nik_konsumen');
            // $table->string('nama_konsumen');
            // $table->string('jk_konsumen');
            // $table->text('alamat_konsumen')->nullable();
            // $table->string('no_hp_konsumen');
            // $table->string('merk_mobil');
            // $table->string('plat_no');
            // $table->integer('harga_mobil');
            // $table->string('nama_supir');
            // $table->integer('harga_supir');
            // $table->date('tgl_sewa');
            // $table->date('tgl_kembali_awal');
            $table->date('tgl_kembali_akhir');
            $table->integer('jumlah_hari');
            $table->integer('total_sewa_awal');
            $table->integer('telat');
            $table->integer('denda');
            $table->integer('total_harga');
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
        Schema::dropIfExists('laporanpengembalians');
    }
}
