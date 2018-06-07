<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $fillable = ['foto_mobil','nama','perseneling','plat_no','warna','tahun_keluaran','harga_sewa','stock','jenis','merk_id'];
    public $timestamps = true;

    public function Merk()
    {
    	return $this->belongsTo('App\Merk','merk_id');
    }

    public function Supir()
    {
    	return $this->belongsToMany('App\Supir','bookings','mobil_id','supir_id');
    }

    public function Customer()
    {
    	return $this->belongsToMany('App\Customer','pemesanans','mobil_id','customer_id');
    }

    public function Pemesanan()
    {
        return $this->hasMany('App\Pemesanan','mobil_id');
    }

     public function Booking()
    {
        return $this->hasMany('App\Booking','mobil_id');
    }
    
    public function Rental()
    {
        return $this->hasMany('App\Rental','mobil_id');
    }
}
