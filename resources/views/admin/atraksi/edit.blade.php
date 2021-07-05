@extends('layouts.admin')

@section('title','Edit atraksi wisata')

@section('content')
    <div class="card">
      <div class="card-body">
          <form action="{{route('atraksi.store')}}" method="POST">
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
                    <option value="" selected>Select role</option>
                    <option value="user" @if (old('wisata_id') == 'user') selected @endif>User</option>
                    <option value="admin" @if (old('wisata_id') == 'admin') selected @endif>Admin</option>
                </select>
                @error('wisata_id')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="text" name="foto" class="form-control @error('foto') is-invalid @enderror" value="{{old('foto')}}">
                @error('foto')
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