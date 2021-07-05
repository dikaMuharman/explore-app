@extends('layouts.admin')

@section('title','Tambah wisata')

@section('content')
    <div class="card">
      <div class="card-body">
          <form action="{{route('wisata.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama')}}">
                @error('nama')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{old('lokasi')}}">
                @error('lokasi')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" >{{old('deskripsi')}}</textarea>
                @error('deskripsi')
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
                <label for="foto">Foto</label>
                
                <div id="container" >
                    <div class="input-group" >
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="foto[]" id="photo" >
                            <label class="custom-file-label" for="foto" >Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <button class="btn btn-danger" type="button" >Delete</button>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-2" id="tambahGambar">Tambah Gambar</button>
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
    <script src="{{asset('js/photo.js')}}"></script>
@endsection