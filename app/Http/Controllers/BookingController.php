<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Mobil;
use App\Supir;
use Illuminate\Http\Request;
use Session;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = Booking::with('Mobil','Supir')->get();
        return view('booking.index',compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobil = Mobil::all();
        $supir = Supir::all();
        return view('booking.create',compact('mobil','supir'));
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
            'mobil_id'=>'required|',
            'supir_id'=>'required|'
        ]);
        $booking = new Booking;
        $booking->tanggal_pemesanan = $request->tanggal_pemesanan;
        $booking->tanggal_pengembalian = $request->tanggal_pengembalian;
        $booking->mobil_id = $request->mobil_id;
        $booking->supir_id = $request->supir_id;
        $booking->save();
        

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$booking->nama</b>"
        ]);
        return redirect()->route('booking.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking.show',compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $mobil = Mobil::all();
        $selectedMobil = booking::findOrFail($id)->mobil_id;
        $supir =Supir::all();
        $selectedSupir = booking::findOrFail($id)->supir_id;
        // dd($selected);
        return view('booking.edit',compact('booking','mobil','selectedMobil','supir','selectedSupir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'tanggal_pemesanan' => 'required|',
            'tanggal_pengembalian' => 'required|',
            'mobil_id' => 'required|',
            'supir_id' => 'required|'
        ]);
        $booking = Booking::findOrFail($id);
        $booking->tanggal_pemesanan = $request->tanggal_pemesanan;
        $booking->tanggal_pengembalian = $request->tanggal_pengembalian;
        $booking->mobil_id = $request->mobil_id;
        $booking->supir_id = $request->supir_id;
        $booking->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$booking->nama</b>"
        ]);
        return redirect()->route('booking.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('booking.index');
    }
}
