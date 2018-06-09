<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kembali extends Model
{
    protected $fillable = ['jumlah_hari','total_sewa_awal','telat','denda','total_harga','rental_id'];
    
    public $timestamps = true;

    public function Rental()
    {
    	return $this->belongsTo('App\Rental','rental_id');
    }
}
