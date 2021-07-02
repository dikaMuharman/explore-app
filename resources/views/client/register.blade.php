@extends('layouts.baseclient')

@section('body')
<main class="main">
  <section class="section login">
    <form action="#" method="POST" class="login__container grid">
      <h1 class="section__title login__title">Register</h1>
      <div class="input">
        <label for="email">Username</label>
        <input type="username" name="email" />
      </div>
      <div class="input">
        <label for="email">Email</label>
        <input type="email" name="email" />
      </div>
      <div class="input">
        <label for="password">Password</label>
        <div class="input--control login__control">
          <input type="password" name="password" id="password" />
          <button class="login__control--toggle" id="toggle">
            <i class="ri-eye-off-fill"></i>
          </button>
        </div>
      </div>
      <div class="input">
        <label for="cofirm_password">Confirm password</label>
        <div class="input--control login__control">
          <input
            type="password"
            name="confirm_password"
            id="passwordConfirm"
          />
          <button class="login__control--toggle" id="toggleConfirm">
            <i class="ri-eye-off-fill"></i>
          </button>
        </div>
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