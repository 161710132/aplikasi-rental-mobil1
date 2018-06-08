<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporanpengembalian extends Model
{
    protected $fillable = ['nik_konsumen','nama_konsumen','jk_konsumen','alamat_konsumen','no_hp_konsumen','merk_mobil','plat_no','harga_mobil','nama_supir','harga_supir','tgl_sewa','tgl_kembali_awal','tgl_kembali_akhir','jumlah_hari','total_sewa_awal','telat','denda','total_harga'];
    
    public $timestamps = true;
}
