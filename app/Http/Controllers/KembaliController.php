<?php

namespace App\Http\Controllers;

use App\Kembali;
use App\Rental;
use Illuminate\Http\Request;
use Session;

class KembaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kembali = Kembali::with('Rental')->get();
        return view('kembali.index',compact('kembali'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rental = Rental::all();
        return view('kembali.create',compact('rental'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'jumlah_hari' => 'required|',
            'total_sewa_awal' => 'required|',
            'telat' => 'required|',
            'denda' => 'required|',
            'total_harga' => 'required|',
            'rental_id' => 'required|'
        ]);
        $kembali = new Kembali;
        $kembali->jumlah_hari = $request->jumlah_hari;
        $kembali->total_sewa_awal = $request->total_sewa_awal;
        $kembali->telat = $request->telat;
        $kembali->denda = $request->denda;
        $kembali->total_harga = $request->total_harga;
        $kembali->rental_id = $request->rental_id;
        $kembali->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$kembali->jumlah_hari</b>"
        ]);
        return redirect()->route('kembali.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function show(Kembali $kembali)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function edit(Kembali $kembali)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kembali $kembali)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kembali  $kembali
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kembali = Kembali::findOrFail($id);
        $kembali->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('kembali.index');
    
    }
}
