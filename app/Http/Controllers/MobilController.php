<?php

namespace App\Http\Controllers;

use App\Mobil;
use Illuminate\Http\Request;
use App\Merk;
use Session;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Mobil::with('Merk')->get();
        return view('mobil.index',compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merk = Merk::all();
        return view('mobil.create',compact('merk'));
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
            'foto_mobil'=>'required|',
            'nama' => 'required|',
            'perseneling' => 'required|',
            'plat_no' => 'required|',
            'warna' => 'required|',
            'tahun_keluaran'=> 'required|',
            'harga_sewa'=>'required|',
            'stock'=>'required|',
            'jenis'=>'required|',
            'merk_id'=>'required'
        ]);
        $mobil = new Mobil;
        $mobil->nama = $request->nama;
        $mobil->perseneling = $request->perseneling;
        $mobil->plat_no = $request->plat_no;
        $mobil->warna = $request->warna;
        $mobil->tahun_keluaran = $request->tahun_keluaran;
        $mobil->harga_sewa = $request->harga_sewa;
        $mobil->stock = $request->stock;
        $mobil->jenis = $request->jenis;
        $mobil->merk_id = $request->merk_id;
        if ($request->hasFile('foto_mobil')) {
            $file = $request->file('foto_mobil');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $desinationPath = public_path() .DIRECTORY_SEPARATOR. 'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $mobil->foto_mobil = $filename;
        }
        $mobil->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$mobil->nama</b>"
        ]);
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobil.show',compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        $merk = Merk::all();
        $selectedMerk = Mobil::findOrFail($id)->merk_id;
        // dd($selected);
        return view('mobil.edit',compact('mobil','merk','selectedMerk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'foto_mobil'=>'required|',
            'nama' => 'required|',
            'perseneling' => 'required|',
            'plat_no' => 'required|',
            'warna' => 'required|',
            'tahun_keluaran'=> 'required|',
            'harga'=>'required|',
            'stock'=>'required|',
            'jenis'=>'required|'
        ]);
        $mobil = Mobil::findOrFail($id);
        $mobil->foto_mobil = $request->foto_mobil;
        $mobil->nama = $request->nama;
        $mobil->perseneling = $request->perseneling;
        $mobil->plat_no = $request->plat_no;
        $mobil->warna = $request->warna;
        $mobil->tahun_keluaran = $request->tahun_keluaran;
        $mobil->harga_sewa = $request->harga_sewa;
        $mobil->stock = $request->stock;
        $mobil->jenis = $request->jenis;
        $mobil->merk_id = $request->merk_id;

        //edit upload foto

        if ($request->hasFile('foto_mobil')) {
            $file = $request->file('foto_mobil');
            $desinationPath = public_path() .DIRECTORY_SEPARATOR. 'img';
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($desinationPath, $filename);
            
            //hapus foto lama jika ada
            if($mobil->foto_mobil){
                $old_foto = $mobil->foto_mobil;
                $filepath = public_path(). DIRECTORY_SEPARATOR.'img' .DIRECTORY_SEPARATOR. $mobil->foto_mobil;
                try {

                    File::delete($filepath);
                } catch (FileNotFoundException $e){

                //file suda dihapus atau tidak ada

                }
            }

            $mobil->foto_mobil = $filename;
        }
        $mobil->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$mobil->nama</b>"
        ]);
        return redirect()->route('mobil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $merk = Mobil::findOrFail($id);

        if ($mobil->foto_mobil){
            $old_foto = $mobil->foto_mobil;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $mobil->foto_supir; 
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e){

                //file sudah dihapus/tidak ada
            }
        } 

        $merk->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('mobil.index');
    }
}
