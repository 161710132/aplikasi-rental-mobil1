<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Customer;
use App\Mobil;
use App\Supir;
use App\Pemesanan;
use Session;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemesanan = Pemesanan::with('Customer','Mobil','Supir')->get();
        return view('pemesanan.index',compact('pemesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        
        $customer = Customer::all();
        $mobil = Mobil::all();
        $supir = Supir::all();
        return view('pemesanan.create',compact('customer','mobil','supir'));
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
            'tanggal_pemesanan' => 'required|',
            'tanggal_pengembalian' => 'required|',
            'customer_id'=>'required|',
            'mobil_id'=>'required|',
            'foto_mobil'=>'required|',
            'supir_id'=>'required|',
            'foto_supir'=>'required|',
        ]);
        $pemesanan = new Pemesanan;
        $pemesanan->tanggal_pemesanan = $request->tanggal_pemesanan;
        $pemesanan->tanggal_pengembalian = $request->tanggal_pengembalian;
        $pemesanan->customer_id = $request->customer_id;
        $pemesanan->mobil_id = $request->mobil_id;
        $pemesanan->supir_id = $request->supir_id;
        if ($request->hasFile('foto_mobil')) {
            $file = $request->file('foto_mobil');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $desinationPath = public_path() .DIRECTORY_SEPARATOR. 'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $pemesanan->foto_mobil = $filename;
        } 
        
        if ($request->hasFile('foto_supir')) {
            $file = $request->file('foto_supir');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $desinationPath = public_path() .DIRECTORY_SEPARATOR. 'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $pemesanan->foto_supir = $filename;
        }

        $pemesanan->save();
        

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$pemesanan->nama</b>"
        ]);
        return redirect()->route('pemesanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $pemesanan = Pemesanan::findOrFail($id);
        return view('pemesanan.show',compact('pemesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $customer = Customer::all();
        $selectedCustomer = Pemesanan::findOrFail($id)->customer_id;
        $mobil = Mobil::all();
        $selectedMobil = Pemesanan::findOrFail($id)->mobil_id;
        $supir =Supir::all();
        $selectedSupir = Pemesanan::findOrFail($id)->supir_id;
        // dd($selected);
        return view('pemesanan.edit',compact('pemesanan','customer','selectedCustomer','mobil','selectedMobil','supir','selectedSupir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'tanggal_pemesanan' => 'required|',
            'tanggal_pengembalian' => 'required|',
            'customer_id' => 'required',
            'mobil_id' => 'required|',
            'supir_id' => 'required|'
        ]);
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->tanggal_pemesanan = $request->tanggal_pemesanan;
        $pemesanan->tanggal_pengembalian = $request->tanggal_pengembalian;
        $pemesanan->customer_id = $request->customer_id;
        $pemesanan->mobil_id = $request->mobil_id;
        $pemesanan->supir_id = $request->supir_id;
        $pemesanan->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$pemesanan->nama</b>"
        ]);
        return redirect()->route('pemesanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('pemesanan.index');
    }
}
