@extends('layouts.admin')

@section('title','Edit wisata')

@section('content')
    <div class="card">
      <div class="card-body">
          <form action="{{route('wisata.update',$wisatum)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama',$wisatum->nama)}}">
                @error('nama')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{old('lokasi',$wisatum->lokasi)}}">
                @error('lokasi')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="text" name="rating" class="form-control @error('rating') is-invalid @enderror" value="{{old('rating',$wisatum->rating)}}">
                @error('rating')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" >{{old('deskripsi',$wisatum->deskripsi)}}</textarea>
                @error('deskripsi')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <div id="container" class="row">
                    @foreach ($wisatum->foto as $foto)
                    <div class="col-md-3">
                        <img src="{{asset("wisata/$foto")}}" alt="" class="img-thumbnail">
                    </div>
                    <div class="col-md-9">
                        <div class="input-group" id="input-{{$loop->iteration}}">
                            <div class="custom-file">
                                
                                <input type="file" class="custom-file-input" name="foto[]" id="photo" >
                                <label class="custom-file-label" for="foto" >Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-danger" type="button" onclick="deleteForm({{$loop->iteration}})" >Delete</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="btn btn-primary mt-2" id="tambahGambar">Tambah Gambar</button>
            </div>
            <div class="d-flex justify-content-end ">
                <a href="{{route('wisata.index')}}" class="btn btn-secondary mr-3">Back</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
      </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/photo.js')}}"></script>
@endsection