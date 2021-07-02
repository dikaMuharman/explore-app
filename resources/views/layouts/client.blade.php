@extends('layouts.baseclient')

@section('body')  
    @section('navbar')
      <nav class="nav container">
        <a href="{{route('home')}}" class="nav__logo">Explore </a>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="{{route('home')}}" class="nav__link {{ request()->is('/') ? 'active-link' : ''}}">Home</a>
            </li>
            <li class="nav__item"><a href="#" class="nav__link">About</a></li>
            <li class="nav__item">
              <a href="{{route('discover')}}" class="nav__link {{ request()->is('discover') || request()->is('detail') ? 'active-link' : ''}} ">Discover</a>
              
            </li>
            @guest
            <li class="nav__item">
              <a href="{{route('login')}}" class="nav__link ">Login</a>
            </li>
            @endguest
            @auth    
            <li class="nav__dropdown">
              <a
                href="#"
                class="nav__link nav__dropdown-link"
                id="nav-btn-dropdown"
              >
                <span class="nav__dropdown-name nav__link">{{auth()->user()->username}}</span>
                <i class="ri-user-line nav__dropdown-icon"></i>
              </a>
            </li>
            @endauth
          </ul>
          @auth
          <div class="nav__dropdown-content" id="nav-dropdown-content">
            <a href="#" class="button button--flex nav__dropdown-button"
              >Profile</a
            >
            <form action="{{route('logout')}}" method="post">
              @csrf
              <button type="submit" class="button button--flex nav__dropdown-button"
                >Log out</button
              >
            </form>
          </div>
          @endauth
          <i class="ri-close-line nav__close" id="nav-close"></i>
        </div>
        <div class="nav__toggle" id="nav-toggle">
          <i class="ri-function-line"></i>
        </div>
      </nav>  
    @show

    <main class="main">
      @yield('content')
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
      <div class="footer__container container grid">
        <div class="footer__content grid">
          <div class="footer__data">
            <h3 class="footer__title">Travel</h3>
            <p class="footer__description">
              Travel you choose the <br />
              destination, we offer you the <br />
              experience.
            </p>
            <div>
              <a
                href="https://www.facebook.com/"
                target="_blank"
                class="footer__social"
              >
                <i class="ri-facebook-box-fill"></i>
              </a>
              <a
                href="https://twitter.com/"
                target="_blank"
                class="footer__social"
              >
                <i class="ri-twitter-fill"></i>
              </a>
              <a
                href="https://www.instagram.com/"
                target="_blank"
                class="footer__social"
              >
                <i class="ri-instagram-fill"></i>
              </a>
              <a
                href="https://www.youtube.com/"
                target="_blank"
                class="footer__social"
              >
                <i class="ri-youtube-fill"></i>
              </a>
            </div>
          </div>

          <div class="footer__data">
            <h3 class="footer__subtitle">About</h3>
            <ul>
              <li class="footer__item">
                <a href="" class="footer__link">About Us</a>
              </li>
              <li class="footer__item">
                <a href="" class="footer__link">Features</a>
              </li>
              <li class="footer__item">
                <a href="" class="footer__link">New & Blog</a>
              </li>
            </ul>
          </div>

          <div class="footer__data">
            <h3 class="footer__subtitle">Company</h3>
            <ul>
              <li class="footer__item">
                <a href="" class="footer__link">Team</a>
              </li>
              <li class="footer__item">
                <a href="" class="footer__link">Plan y Pricing</a>
              </li>
              <li class="footer__item">
                <a href="" class="footer__link">Become a member</a>
              </li>
            </ul>
          </div>

          <div class="footer__data">
            <h3 class="footer__subtitle">Support</h3>
            <ul>
              <li class="footer__item">
                <a href="" class="footer__link">FAQs</a>
              </li>
              <li class="footer__item">
                <a href="" class="footer__link">Support Center</a>
              </li>
              <li class="footer__item">
                <a href="" class="footer__link">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="footer__rights">
          <p class="footer__copy">
            &#169; 2021 design by Bedimcode. All rigths reserved.
          </p>
          <div class="footer__terms">
            <a href="#" class="footer__terms-link">Terms & Agreements</a>
            <a href="#" class="footer__terms-link">Privacy Policy</a>
          </div>
        </div>
      </div>
    </footer>

@endsection