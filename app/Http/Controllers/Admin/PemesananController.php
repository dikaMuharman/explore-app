<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use App\Models\Wisata;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pemesanan = Pemesanan::all();
        return view('admin.pemesanan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wisatas = Wisata::all();
        return view('admin.pemesanan.tambah',['wisatas' => $wisatas]);
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
            'nama_pemesan' => 'required',
            'wisata' => 'required',
            'paket' => 'required',
            'tanggal_berangkat' => 'required',
            'tanggal_pulang' => 'required',
            'harga_paket' => 'required|numeric',
            'jumlah_paket' => 'required|numeric',
            'total_harga' => 'required|numeric'
        ], [
            'nama_pemesan.required' => $warn_required,
            'wisata.required' => $warn_required,
            'paket.required' => $warn_required,
            'tanggal_berangkat.required' => $warn_required,
            'tanggal_pulang.required' => $warn_required,
            'harga_paket.required' => $warn_required,
            'harga_paket.numeric' => $warn_numeric,
            'jumlah_paket.required' => $warn_required,
            'jumlah_paket.numeric' => $warn_numeric,
            'total_harga.required' => $warn_required,
            'total_harga.numeric' => $warn_numeric
        ]);

        Pemesanan::create([
            'nama_pemesan' => $request->nama_pemesanan,
            'wisata' => $request->wisata,
            'paket' => $request->paket,
            'tanggal_berangkat' => $request->tanggal_berangkat,
            'tanggal_pulang' => $request->tanggal_pulang,
            'harga_paket' => $request->harga_paket,
            'jumlah_paket' => $request->jumlah_paket,
            'total_harga' => $request->total_harga
        ]);

        return redirect()->route('pemesanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemesanan $pemesanan)
    {
        return $pemesanan;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemesanan $pemesanan)
    {
        return view('admin.pemesanan.edit', ['pemesanan'=>$pemesanan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemesanan $pemesanan)
    {
        $warn_required = 'bidang harus diisi';
        $warn_numeric = 'bidang harus diisi dengan angka';

        $this->validate($request, [
            'nama_pemesan' => 'required',
            'wisata' => 'required',
            'paket' => 'required',
            'tanggal_berangkat' => 'required',
            'tanggal_pulang' => 'required',
            'harga_paket' => 'required|numeric',
            'jumlah_paket' => 'required|numeric',
            'total_harga' => 'required|numeric'
        ], [
            'nama_pemesan.required' => $warn_required,
            'wisata.required' => $warn_required,
            'paket.required' => $warn_required,
            'tanggal_berangkat.required' => $warn_required,
            'tanggal_pulang.required' => $warn_required,
            'harga_paket.required' => $warn_required,
            'harga_paket.numeric' => $warn_numeric,
            'jumlah_paket.required' => $warn_required,
            'jumlah_paket.numeric' => $warn_numeric,
            'total_harga.required' => $warn_required,
            'total_harga.numeric' => $warn_numeric
        ]);
        
        $pemesanan->nama_pemesanan = $request->nama_pemesanan;
        $pemesanan->wisata = $request->wisata;
        $pemesanan->paket = $request->paket;
        $pemesanan->tanggal_berangkat = $request->tanggal_berangkat;
        $pemesanan->tanggal_pulang = $request->tanggal_pulang;
        $pemesanan->harga_Paket = $request->harga_Paket;
        $pemesanan->jumlah_paket = $request->jumlah_paket;
        $pemesanan->total_harga = $request->total_harga;
        $pemesanan->save();

        return redirect()->route('pemesanan.index')->with('status','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemesanan $pemesanan)
    {
        //
    }
}
