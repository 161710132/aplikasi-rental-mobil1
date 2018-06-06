<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['tanggal_pemesanan','tanggal_pengembalian','mobil_id','supir_id'];

    public $timestamps = true;

    public function Mobil()
    {
        return $this->belongsTo('App\Mobil','mobil_id');
    }

    public function Supir()
    {
    	return $this->belongsTo('App\Supir','supir_id');
    }
}
