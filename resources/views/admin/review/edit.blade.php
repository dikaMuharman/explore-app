@extends('layouts.admin')

@section('title','Tambah wisata')

@section('content')
    <div class="card">
      <div class="card-body">
          <form action="{{route('review.update',$review)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{old('username',$review->username)}}">
                @error('username')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
             <div class="form-group">
                <label for="wisata">Wisata</label>
                <select class="custom-select @error('wisata') is-invalid @enderror" name="wisata">
                    <option value="" selected>Pilih wisata</option>
                    @foreach ($wisatas as $wisata)
                    <option value="{{$wisata->id}}" @if (old('wisata',$review->wisata->id) == $review->wisata_id) selected @endif>{{$wisata->nama}}</option>
                    @endforeach
                </select>
                @error('wisata')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="message">pesan</label>
                <textarea name="message" class="form-control @error('message') is-invalid @enderror" >{{old('message',$review->message)}}</textarea>
                @error('message')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="text" name="rating" class="form-control @error('rating') is-invalid @enderror" value="{{old('rating',$review->rating)}}" placeholder="ex: 4.0">
                @error('rating')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="d-flex justify-content-end ">
                <a href="{{route('review.index')}}" class="btn btn-secondary mr-3">Back</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
      </div>
    </div>
@endsection