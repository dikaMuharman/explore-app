@extends('layouts.baseclient')
{{-- 
  buat pesan error bikin di bawah element input, buat small tag

--}}


@section('body')
<main class="main">
  <section class="section login">
    <form action="{{route('store-register')}}" method="POST" class="login__container grid">
      @csrf
      <h1 class="section__title login__title">Register</h1>
      <div class="input">
        <label for="username" @error('username') class="danger-text" @enderror>Username</label>
        <input type="text" name="username" value="{{ old('username') }}" @error('username') class="danger" @enderror/>
        @error('username')
            <small class="danger-text">{{$message}}</small>
        @enderror
      </div>
      <div class="input">
        <label for="email" @error('email') class="danger-text" @enderror>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" @error('email') class="danger" @enderror/>
        @error('email')
            <small class="danger-text">{{ $message }}</small>
        @enderror
      </div>
      <div class="input">
        <label for="password" @error('password') class="danger-text" @enderror>Password</label>
        <div class="input--control login__control">
          <input type="password" name="password" id="password" @error('password') class="danger" @enderror/>
          <button class="login__control--toggle" id="toggle">
            <i class="ri-eye-off-fill"></i>
          </button>
        </div>
        @error('password')
            <small class="danger-text">{{ $message }}</small>
        @enderror
      </div>
      <div class="input">
        <label for="cofirm_password" @error('password_confirmation') class="danger-text" @enderror>Confirm password</label>
        <div class="input--control login__control">
          <input
            type="password"
            name="password_confirmation"
            id="passwordConfirm"
            @error('password_confirmation') class="danger-text" @enderror
          />
          <button class="login__control--toggle" id="toggleConfirm">
            <i class="ri-eye-off-fill"></i>
          </button>
        </div>
        @error('password_confirmation')
            <small class="danger-text">{{ $message }}</small>
        @enderror
      </div>
      <div class="login__buttongroup">
        <a href="{{route('home')}}" class="button button--secondary">Back</a>
        <button type="submit" class="button">Register</button>
      </div>
      <div class="login__helper">
        <span
          >Already have account ?
          <a class="login__helper--link" href="{{route('login')}}">Login here</a>
        </span>
      </div>
    </form>
  </section>
</main>
@endsection

@section('bottom-js')
    <script src="{{asset('js/client/login.js')}}"></script>
@endsection