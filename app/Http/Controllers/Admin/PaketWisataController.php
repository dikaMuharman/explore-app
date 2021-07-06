<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaketWisata;
use App\Models\Wisata;
use Illuminate\Http\Request;

class PaketWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paketWisata = PaketWisata::all();
        return view('admin.paket_wisata.index', ['paketWisata'=>$paketWisata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wisatas = Wisata::all();
        return view('admin.paket_wisata.tambah',['wisatas' => $wisatas]);
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
        $warn_numeric = 'bidang harus diisi dengan angka';
        
        $this->validate($request, [
            'nama_wisata' => 'required',
            'nama_hotel' => 'required',
            'rating' => 'required|numeric',
            'nama_pesawat' => 'required',
            'kelas_pesawat' => 'required',
            'fasilitas' => 'required',
            'harga_paket' => 'required|numeric'
        ],[
            'nama.required' => $warn_required,
            'nama_wisata.required' => $warn_required,
            'nama_hotel.required' => $warn_required,
            'rating.required' => $warn_required,
            'rating.numeric' => $warn_numeric,
            'nama_pesawat.required' => $warn_required,
            'kelas_pesawat.required' => $warn_required,
            'fasilitas.required' => $warn_required,
            'harga_paket.required' => $warn_required,
            'harga_paket.numeric' => $warn_numeric,
        ]);

        $wisata = Wisata::find($request->wisata_id);
        
        $wisata->paketWisata()->create([
            'nama_wisata' =>$request->nama_wisata,
            'nama_hotel' => $request->nama_hotel,
            'rating' => $request->rating,
            'nama_pesawat' => $request->nama_pesawat,
            'kelas_pesawat' => $request->kelas_pesawat,
            'fasilitas' => $request->fasilitas,
            'harga_paket' => $request->harga_paket,
        ]);


        return redirect()->route('paket-wisata.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaketWisata  $paketWisata
     * @return \Illuminate\Http\Response
     */
    public function show(PaketWisata $paket_wisatum)
    {
        $namaWisata = Wisata::find($paket_wisatum->wisata_id)->nama;
        return ['paketWisata' => $paket_wisatum,'namaWisata' => $namaWisata];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaketWisata  $paketWisata
     * @return \Illuminate\Http\Response
     */
    public function edit(PaketWisata $paket_wisatum)
    {
        $wisatas = Wisata::all();
        return view('admin.paket_wisata.edit', ['wisatas' => $wisatas,'paket_wisatum' => $paket_wisatum]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaketWisata  $paketWisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaketWisata $paket_wisatum)
    {
        $warn_required = 'bidang harus diisi';
        $warn_numeric = 'bidang harus diisi dengan angka';

        $this->validate($request, [
            'nama_wisata' => 'required',
            'nama_hotel' => 'required',
            'rating' => 'required|numeric',
            'nama_pesawat' => 'required',
            'kelas_pesawat' => 'required',
            'fasilitas' => 'required',
            'harga_paket' => 'required|numeric'
        ],[
            'nama.required' => $warn_required,
            'nama_wisata.required' => $warn_required,
            'nama_hotel.required' => $warn_required,
            'rating.required' => $warn_required,
            'rating.numeric' => $warn_numeric,
            'nama_pesawat.required' => $warn_required,
            'kelas_pesawat.required' => $warn_required,
            'fasilitas.required' => $warn_required,
            'harga_paket.required' => $warn_required,
            'harga_paket.numeric' => $warn_numeric,
        ]);

        $wisata = Wisata::find($request->wisata_id);
        $paket_wisatum->nama_wisata = $request->nama_wisata;
        $paket_wisatum->nama_hotel = $request->nama_hotel;
        $paket_wisatum->wisata_id = $request->wisata_id;
        $paket_wisatum->rating = $request->rating;
        $paket_wisatum->nama_pesawat = $request->nama_pesawat;
        $paket_wisatum->kelas_pesawat = $request->kelas_pesawat;
        $paket_wisatum->fasilitas = $request->fasilitas;
        $paket_wisatum->harga_Paket = (int)$request->harga_Paket;
        $wisata->paketWisata()->save($paket_wisatum);

        return redirect()->route('paket-wisata.index')->with('status', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaketWisata  $paketWisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaketWisata $paket_wisatum)
    {
        $paket_wisatum->delete();

         return redirect()->route('paket-wisata.index')->with('status', 'Data berhasil dihapus');
    }
}
