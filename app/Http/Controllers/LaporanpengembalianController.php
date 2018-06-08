<?php

namespace App\Http\Controllers;

use App\Laporanpengembalian;
use Illuminate\Http\Request;
use Session;

class LaporanpengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporanpengembalian = Laporanpengembalian::all();
        return view('laporankembalian.index',compact('laporanpengembalian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporankembalian.create');
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
            'nik_konsumen' => 'required|',
            'nama_konsumen' => 'required|',
            'jk_konsumen' => 'required|',
            'alamat_konsumen' => 'required|',
            'no_hp_konsumen' => 'required|',
            'merk_mobil' => 'required|',
            'plat_no' => 'required|',
            'harga_mobil' => 'required|',
            'nama_supir' => 'required|',
            'harga_supir' => 'required|',
            'tgl_sewa' => 'required|',
            'tgl_kembali_awal' => 'required|',
            'tgl_kembali_akhir' => 'required|',
            'jumlah_hari' => 'required|',
            'total_sewa_awal' => 'required|',
            'telat' => 'required|',
            'denda' => 'required|',
            'total_harga' => 'required|'

        ]);
        $laporanpengembalian = new Laporanpengembalian;
        $laporanpengembalian->nik_konsumen = $request->nik_konsumen;
        $laporanpengembalian->nama_konsumen = $request->nama_konsumen;
        $laporanpengembalian->jk_konsumen = $request->jk_konsumen;
        $laporanpengembalian->alamat_konsumen = $request->alamat_konsumen;
        $laporanpengembalian->no_hp_konsumen = $request->no_hp_konsumen;
        $laporanpengembalian->merk_mobil = $request->merk_mobil;
        $laporanpengembalian->plat_no = $request->plat_no;
        $laporanpengembalian->harga_mobil = $request->harga_mobil;
        $laporanpengembalian->nama_supir = $request->nama_supir;
        $laporanpengembalian->harga_supir = $request->harga_supir;
        $laporanpengembalian->tgl_sewa = $request->tgl_sewa;
        $laporanpengembalian->tgl_kembali_awal = $request->tgl_kembali_awal;
        $laporanpengembalian->tgl_kembali_akhir = $request->tgl_kembali_akhir;
        $laporanpengembalian->jumlah_hari = $request->jumlah_hari;
        $laporanpengembalian->total_sewa_awal = $request->total_sewa_awal;
        $laporanpengembalian->telat = $request->telat;
        $laporanpengembalian->denda = $request->denda;
        $laporanpengembalian->total_harga = $request->total_harga;
        $laporanpengembalian->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$laporanpengembalian->nama_konsumen</b>"
        ]);
        return redirect()->route('laporankembalian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laporanpengembalian  $laporanpengembalian
     * @return \Illuminate\Http\Response
     */
    public function show(Laporanpengembalian $laporanpengembalian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporanpengembalian  $laporanpengembalian
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporanpengembalian $laporanpengembalian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laporanpengembalian  $laporanpengembalian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporanpengembalian $laporanpengembalian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laporanpengembalian  $laporanpengembalian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporanpengembalian $laporanpengembalian)
    {
        //
    }
}
