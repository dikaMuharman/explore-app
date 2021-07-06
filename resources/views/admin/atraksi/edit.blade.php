@extends('layouts.admin')

@section('title','Edit atraksi wisata')

@section('content')
    <div class="card">
      <div class="card-body">
          <form action="{{route('atraksi.update',$atraksi)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Atraksi</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama',$atraksi->nama)}}">
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
                    <option value="{{$wisata->id}}" @if (old('wisata',$atraksi->wisata->id) == $wisata->id) selected @endif>{{$wisata->nama}}</option>
                    @endforeach
                </select>
                @error('wisata')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset("atraksi/$atraksi->foto")}}" class="img-thumbnail" alt="">
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('foto') is-invalid @enderror" id="foto" name="foto" accept="image/png, image/gif, image/jpeg">
                            <label class="custom-file-label" for="foto">Choose file</label>
                        </div>
                        @error('foto')
                            <span class="invalid-feedback">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end ">
                <a href="{{route('atraksi.index')}}" class="btn btn-secondary mr-3">Back</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
      </div>
    </div>
@endsection