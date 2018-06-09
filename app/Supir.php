<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    protected $fillable = ['foto_supir','nama','jenis_kelamin','nik','no_hp','alamat','umur','harga_sewasupir'];
    public $timestamps = true;

    public function Mobil()
    {
    	return $this->belongsToMany('App\Mobil','bookings','mobil_id','supir_id');
    }

    public function Customer()
    {
    	return $this->belongsToMany('App\Customer','pemesanans','supir_id','customer_id');
    }

    public function Pemesanan()
    {
        return $this->hasMany('App\Pemesanan','supir_id');
    } 

    public function Booking()
    {
        return $this->hasMany('App\Booking','supir_id');
    }

    public function Rental()
    {
        return $this->hasMany('App\Rental','supir_id');
    }
}
