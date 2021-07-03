@extends('layouts.admin')

@section('title','Edit pengguna')

@section('content')
    <div class="card">
      <div class="card-body">
          <form action="{{route('user.update',$user)}}" method="POST">
            @method('PUT')
              @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{old('username',$user->username)}}">
                 @error('username')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email',$user->email)}}">
                @error('email')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select class="custom-select @error('role') is-invalid @enderror" name="role">
                    <option value="" selected>Select role</option>
                    <option value="user" @if (old('role',$user->role) == 'user') selected @endif>User</option>
                    <option value="admin" @if (old('role',$user->role) == 'admin') selected @endif>Admin</option>
                </select>
                @error('role')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">New password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                @error('password')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Confirm password</label>
                <input type="password" class="form-control" name="password_confirmation">
            </div>
            <div class="d-flex justify-content-end ">
                <a href="{{route('user.index')}}" class="btn btn-secondary mr-3">Back</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
      </div>
    </div>
@endsection