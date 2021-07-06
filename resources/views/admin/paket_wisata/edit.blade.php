@extends('layouts.admin')

@section('title','Edit paket wisata')

@section('content')
    <div class="card">
      <div class="card-body">
          <form action="{{route('paket-wisata.update',$paket_wisatum)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_wisata">nama Paket</label>
                <input type="text" name="nama_wisata" class="form-control @error('nama_wisata') is-invalid @enderror" value="{{old('nama_wisata',$paket_wisatum->nama_wisata)}}">
                @error('nama_wisata')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="wisata_id">Wisata</label>
                <select class="custom-select @error('wisata_id') is-invalid @enderror" name="wisata_id">
                    <option value="" selected>Pilih wisata</option>
                    @foreach ($wisatas as $wisata)
                    <option value="{{$wisata->id}}" @if (old('wisata_id',$paket_wisatum->wisata->id) == $wisata->id) selected @endif>{{$wisata->nama}}</option>
                    @endforeach
                </select>
                @error('wisata_id')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_hotel">Hotel</label>
                <input type="text" name="nama_hotel" class="form-control @error('nama_hotel') is-invalid @enderror" value="{{old('nama_hotel',$paket_wisatum->nama_hotel)}}">
                @error('nama_hotel')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="text" name="rating" class="form-control @error('rating') is-invalid @enderror" value="{{old('rating',$paket_wisatum->rating)}}">
                @error('rating')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_pesawat">Pesawat</label>
                <input type="text" name="nama_pesawat" class="form-control @error('nama_pesawat') is-invalid @enderror" value="{{old('nama_pesawat',$paket_wisatum->nama_pesawat)}}">
                @error('nama_pesawat')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="kelas_pesawat">Kelas Pesawat</label>
                <input type="text" name="kelas_pesawat" class="form-control @error('kelas_pesawat') is-invalid @enderror" value="{{old('kelas_pesawat',$paket_wisatum->kelas_pesawat)}}">
                @error('kelas_pesawat')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="fasilitas">Fasilitas</label>
                <div class="row">
                    <div class="col-md-5">
                        Nama fasilitas
                    </div>
                    <div class="col-md-7">
                        Icon fasilitas
                    </div>
                </div>
                <div id="container" >
                    @foreach ($paket_wisatum->fasilitas as $fasilitas)
                    <div class="row mt-3"  id="form-{{$loop->iteration}}">
                        <div class="col-md-5">
                            <input type="text" value="{{$fasilitas['nama']}}" name="fasilitas[{{$loop->index}}][nama]" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <input type="text" value="{{$fasilitas['icon']}}" name="fasilitas[{{$loop->index}}][icon]" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-danger" id="hapus">Hapus</button>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="btn btn-primary mt-2" id="tambah">Tambah fasilitas</button>
            </div>
            <div class="form-group">
                <label for="harga_paket">Harga Paket</label>
                <input type="text" name="harga_paket" class="form-control @error('harga_paket') is-invalid @enderror" value="{{old('harga_paket',$paket_wisatum->harga_paket)}}">
                @error('harga_paket')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="d-flex justify-content-end ">
                <a href="{{route('paket-wisata.index')}}" class="btn btn-secondary mr-3">Back</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
      </div>
    </div>
@endsection