@extends('layouts.admin')

@section('title','Tambah wisata')

@section('content')
    <div class="card">
      <div class="card-body">
          <form action="{{route('user.store')}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nama">Nama Paket</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama')}}">
                @error('nama')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_wisata">Lokasi Wisata</label>
                <select class="custom-select @error('nama_wisata') is-invalid @enderror" name="nama_wisata">
                    <option value="" selected>Select role</option>
                    <option value="user" @if (old('nama_wisata') == 'user') selected @endif>User</option>
                    <option value="admin" @if (old('nama_wisata') == 'admin') selected @endif>Admin</option>
                </select>
                @error('nama_wisata')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_hotel">Hotel</label>
                <input type="text" name="nama_hotel" class="form-control @error('nama_hotel') is-invalid @enderror" value="{{old('nama_hotel')}}">
                @error('nama_hotel')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="text" name="rating" class="form-control @error('rating') is-invalid @enderror" value="{{old('rating')}}">
                @error('rating')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_pesawat">Pesawat</label>
                <input type="text" name="nama_pesawat" class="form-control @error('nama_pesawat') is-invalid @enderror" value="{{old('nama_pesawat')}}">
                @error('nama_pesawat')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="kelas_pesawat">Kelas Pesawat</label>
                <input type="text" name="kelas_pesawat" class="form-control @error('kelas_pesawat') is-invalid @enderror" value="{{old('kelas_pesawat')}}">
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
                    <div class="row" id="form-1">
                        <div class="col-md-5">
                            <input type="text" name="fasilitas[][nama]" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="fasilitas[][icon]" class="form-control">
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-danger" id="hapus">Hapus</button>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-2" id="tambah">Tambah fasilitas</button>
            </div>
            <div class="form-group">
                <label for="harga_paket">Harga Paket</label>
                <input type="text" name="harga_paket" class="form-control @error('harga_paket') is-invalid @enderror" value="{{old('harga_paket')}}">
                @error('harga_paket')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="d-flex justify-content-end ">
                <a href="{{route('user.index')}}" class="btn btn-secondary mr-3">Back</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
      </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/form.js')}}"></script>
@endsection