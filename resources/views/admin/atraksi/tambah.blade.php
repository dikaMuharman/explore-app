@extends('layouts.admin')

@section('title','Tambah atraksi wisata')

@section('content')
    <div class="card">
      <div class="card-body">
          <form action="{{route('atraksi.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Atraksi</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama')}}">
                @error('nama')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="wisata_id">Nama Wisata</label>
                <select class="custom-select @error('wisata_id') is-invalid @enderror" name="wisata_id">
                    <option value="" selected>Pilih wisata</option>
                    @foreach ($wisatas as $wisata)
                    <option value="{{$wisata->id}}" @if (old('wisata') == $wisata->nama) selected @endif>{{$wisata->nama}}</option>
                    @endforeach
                </select>
                @error('wisata')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input  @error('foto') is-invalid @enderror" name="foto" id="customFile" accept="image/png, image/gif, image/jpeg">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                @error('foto')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="d-flex justify-content-end ">
                <a href="{{route('atraksi.index')}}" class="btn btn-secondary mr-3">Back</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
      </div>
    </div>
@endsection