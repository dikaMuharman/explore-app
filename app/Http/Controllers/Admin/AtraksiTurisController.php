<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AtraksiTuris;
use App\Models\Wisata;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AtraksiTurisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atraksi = AtraksiTuris::all();
        return view('admin.atraksi.index',['atraksis' => $atraksi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wisata = Wisata::all();
        return view('admin.atraksi.tambah',['wisatas' => $wisata]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $warn_required = 'bidang harus diisi';

        $this->validate($request, [
            'nama' => 'required',
            'wisata_id' => 'required',
            'foto' => 'required|image|mimes:jpg,bmp,png'
        ], [
            'nama.required' => $warn_required,
            'wisata_id.required' => $warn_required,
            'foto.required' => $warn_required,
            'foto.image' => 'bidang tidak sesuai format',
            'foto.mimes' => 'bidang tidak sesuai format'
        ]);

        $filename = Str::uuid().'.'.$request->foto->extension();
        if ($request->foto->isValid()){
            $request->foto->storeAs('atraksi',$filename);
        };

        $wisata = Wisata::find($request->wisata_id);

        $wisata->atraksiTuris()->create([
            'nama' => $request->nama,
            'foto' => $filename
        ]);

        return redirect()->route('atraksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AtraksiTuris  $atraksiTuris
     * @return \Illuminate\Http\Response
     */
    public function show(AtraksiTuris $atraksi)
    {
        $wisata = Wisata::find($atraksi->wisata_id)->nama;
        return ['atraksi' => $atraksi, 'wisata' => $wisata];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AtraksiTuris  $atraksiTuris
     * @return \Illuminate\Http\Response
     */
    public function edit(AtraksiTuris $atraksi)
    {
        $wisatas = Wisata::all();
        return view('admin.atraksi.edit', ['atraksi' => $atraksi, 'wisatas' => $wisatas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AtraksiTuris  $atraksiTuris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AtraksiTuris $atraksi)
    {
        $warn_required = 'bidang harus diisi';

        $this->validate($request, [
            'nama' => 'required',
            'wisata_id' => 'required',
            'foto' => 'image'
        ], [
            'nama.required' => $warn_required,
            'wisata_id.required' => $warn_required,
            'foto.image' => 'bidang tidak sesuai format',
        ]);
        

        $wisata = Wisata::find($request->wisata_id);
        //  TODO : ambil nama foto
        $foto = $atraksi->foto;
        //  TODO : Cek apakah foto di update atau tidak
        $filename = '';
        if($request->hasFile('foto')){
            //  TODO : jika foto di update, hapus foto sebelumnya di storage
             $filename = Str::uuid().'.'.$request->foto->extension();
             Storage::delete("atraksi/$foto");
             Storage::putFileAs('atraksi/',$request->foto,$filename);

        } else {
            $filename = $foto;
        }

        $atraksi->nama = $request->nama;
        $atraksi->wisata_id = $request->wisata_id;
        $atraksi->foto = $filename;
        
        $wisata->atraksiTuris()->save($atraksi);

        return redirect()->route('atraksi.index')->with('status', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AtraksiTuris  $atraksiTuris
     * @return \Illuminate\Http\Response
     */
    public function destroy(AtraksiTuris $atraksi)
    {
        $foto = $atraksi->foto;
        Storage::delete('images/'.$foto);
        $atraksi->delete();
        return redirect()->route('atraksi.index');
    }
}
