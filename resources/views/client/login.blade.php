@extends('layouts.baseclient')

@section('body')
<main class="main">
  <section class="section login">
    <form action="{{ route('store-login') }}" method="POST" class="login__container grid">
      @csrf
      <h1 class="section__title login__title">Login</h1>
      @if (session('status'))
        <div class="login__alert">
            <span>{{ session('status') }}</span>
        </div>
      @endif
      <div class="input">
        <label for="username" @error('username') class="danger-text" @enderror>Username</label>
        <input type="username" name="username" @error('username') class="danger" @enderror value="{{ old('username') }}"/>
        @error('username')
          <small class="danger-text">{{$message}}</small>
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
          <small class="danger-text">{{$message}}</small>
        @enderror
      </div>
      <div class="login__buttongroup">
        <a href="{{route('home')}}" class="button button--secondary">Back</a>
        <button type="submit" class="button">Login</button>
      </div>
      <div class="login__helper">
        <span
          >Dont have acount ?
          <a class="login__helper--link" href="{{route('register')}}"
            >Sign up here</a
          >
        </span>
      </div>
    </form>
  </section>
</main>
@endsection

@section('bottom-js')
    <script src="{{asset('js/client/login.js')}}"></script>
@endsection