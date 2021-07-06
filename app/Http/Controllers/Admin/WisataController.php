<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisatas = Wisata::all();
        return view('admin.wisata.index',['wisatas' => $wisatas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.wisata.tambah');
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
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'rating' => 'required',
            'foto.*' => 'required|image|mimes:jpg,bmp,png'
        ],[
            'nama.required' => $warn_required,
            'lokasi.required' => $warn_required,
            'deskripsi.required' => $warn_required,
            'rating.required' => $warn_required,
            'foto.required' => $warn_required,
            'foto.image' => 'bidang tidak sesuai format',
            'foto.mimes' => 'bidang tidak sesuai format'
        ]);

        $filenames = [];
        $count = 0;
        foreach($request->file('foto') as $foto){
            $filename = Str::uuid().'.'.$foto->extension();
            Storage::putFileAs('wisata',$foto,$filename);
            $filenames[] = $filename;
            $count++;
        }

        Wisata::create([
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
            'rating' => $request->rating,
            'foto' => $filenames
        ]);

        return redirect()->route('wisata.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show(Wisata $wisatum)
    {
        return $wisatum;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit(Wisata $wisatum)
    {
        return view('admin.wisata.edit',['wisatum' => $wisatum]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wisata $wisatum)
    {
        $warn_required = 'bidang harus diisi';

        $this->validate($request, [
            'nama' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'rating' => 'required',
        ],[
            'nama.required' => $warn_required,
            'lokasi.required' => $warn_required,
            'deskripsi.required' => $warn_required,
            'rating.required' => $warn_required,
        ]);

        $count = count($wisatum->foto);
        $filenames = $wisatum->foto;
        
        if(count($request->foto) != 0) {
            foreach($request->file('foto') as $foto){
                $filename = Str::uuid().'.'.$foto->extension();
                Storage::putFileAs('wisata',$foto,$filename);
                $filenames[] = $filename;   
            }
        } else {
            for ($i=0; $i < $count; $i++) { 
                if(isset($request->foto[$i])){
                    $foto = $request->foto[$i];
                    $filename = Str::uuid().'.'.$request->foto[$i]->extension();
                    // Hapus file yang sudah ada
                    Storage::delete('wisata/'.$filenames[$i]);
                    // Tambahkan data yang sudah ada
                    Storage::putFileAs('wisata',$foto,$filename);
                    $filenames[$i] = $filename;
                }
            }
        }

        $wisatum->nama = $request->nama;
        $wisatum->lokasi = $request->lokasi;
        $wisatum->deskripsi = $request->deskripsi;
        $wisatum->rating = $request->rating;
        $wisatum->foto = $filenames;
        $wisatum->save();

        return redirect()->route('wisata.index')->with('status','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wisata $wisatum)
    {
        foreach($wisatum->foto as $foto) {
            Storage::delete('wisata/'.$foto);
        }
        $wisatum->delete();
        return redirect()->route('wisata.index')->with('status','Data berhasil dihapus');
    }
}
