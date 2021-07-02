@extends('layouts.client')

@section('navbar')
  <header class="header " id="header">
    @parent
  </header>    
@endsection

@section('content')
    <!--==================== HOME ====================-->
      <section class="home" id="home">
        <img src="{{asset('img/client/home1.jpg')}}" alt="Hero" class="home__image" />
        <div class="home__container container grid">
          <div class="home__data">
            <span class="home__data-subtitle">Discover your place</span>
            <h1 class="home__data-title">
              Explore The <br />
              Best
              <b
                >Amazing <br />
                Place</b
              >
            </h1>
            <a href="#" class="button">Explore</a>
          </div>
          <div class="home__social">
            <a href="#" class="home__social-link" target="_blank">
              <i class="ri-facebook-box-fill"></i
            ></a>
            <a href="#" class="home__social-link" target="_blank">
              <i class="ri-instagram-fill"></i>
            </a>
            <a href="#" class="home__social-link" target="_blank">
              <i class="ri-twitter-fill"></i>
            </a>
          </div>
        </div>
      </section>

      <!--==================== ABOUT ====================-->
      <section class="about section" id="about">
        <div class="about__container container grid">
          <div class="about__data">
            <h2 class="section__title about__title">
              More Information <br />
              About The Best Place
            </h2>
            <p class="about__description">
              You can find the most beautiful and pleasant places at the best
              prices with special discounts, you choose the place we will guide
              you all the way to wait, get your place now.
            </p>
            <a href="#" class="button">Reserve a place</a>
          </div>
          <div class="about__img">
            <div class="about__img-overlay">
              <img
                src="{{asset('img/client/about1.jpg')}}"
                alt="about image"
                class="about__img-one"
              />
            </div>
            <div class="about__img-overlay">
              <img
                src="{{asset('img/client/about2.jpg')}}"
                alt="about image"
                class="about__img-two"
              />
            </div>
          </div>
        </div>
      </section>

      <!--==================== DISCOVER ====================-->
      <section class="discover section" id="discover">
        <h2 class="section__title">
          Discover the most <br />
          attractive places
        </h2>

        <div class="discover__container swiper-container container">
          <div class="swiper-wrapper">
            <!--==================== DISCOVER - 1 ====================-->
            <div class="discover__card swiper-slide">
              <img
                src="{{asset('img/client/discover1.jpg')}}"
                alt="discover 1"
                class="discover__img"
              />
              <div class="discover__data">
                <h2 class="discover__title">Bali</h2>
                <span class="discover__description">24 tours available</span>
              </div>
            </div>
            <!--==================== DISCOVER - 2 ====================-->
            <div class="discover__card swiper-slide">
              <img
                src="{{asset('img/client/discover2.jpg')}}"
                alt="discover 2"
                class="discover__img"
              />
              <div class="discover__data">
                <h2 class="discover__title">Hawaii</h2>
                <span class="discover__description">18 tours available</span>
              </div>
            </div>
            <!--==================== DISCOVER - 3 ====================-->
            <div class="discover__card swiper-slide">
              <img
                src="{{asset('img/client/discover3.jpg')}}"
                alt="discover 3"
                class="discover__img"
              />
              <div class="discover__data">
                <h2 class="discover__title">Hvar</h2>
                <span class="discover__description">20 tours available</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==================== EXPERIENCE ====================-->
      <section class="experience section">
        <h2 class="section__title">
          with Our Experience <br />
          We Will Serve You
        </h2>
        <div class="experience__container container grid">
          <div class="experience__content grid">
            <div class="experience__data">
              <h2 class="experience__number">10</h2>
              <span class="experience__description"
                >Year <br />
                Experience</span
              >
            </div>
            <div class="experience__data">
              <h2 class="experience__number">75</h2>
              <span class="experience__description"
                >Complete <br />
                tours</span
              >
            </div>
            <div class="experience__data">
              <h2 class="experience__number">160+</h2>
              <span class="experience__description"
                >Tourist <br />
                Destination</span
              >
            </div>
          </div>
          <div class="experience__img grid">
            <div class="experience__overlay">
              <img
                src="{{asset('img/client/experience1.jpg')}}"
                alt="Experience 1"
                class="experience__img-one"
              />
            </div>
            <div class="experience__overlay">
              <img
                src="{{asset('img/client/experience2.jpg')}}"
                alt="Experience 2"
                class="experience__img-two"
              />
            </div>
          </div>
        </div>
      </section>

      <!--==================== VIDEO ====================-->
      <section class="video section">
        <h2 class="section__title">Video Tour</h2>

        <div class="video__container container">
          <p class="video__description">
            Find out more with our video of the most beautiful and pleasant
            places for you and your family.
          </p>
          <div class="video__content">
            <video id="video-file">
              <source src="{{asset('video/video.mp4')}}" type="video/mp4" />
            </video>
            <button class="button button--flex video__button" id="video-button">
              <i class="ri-play-line video__button-icon" id="video-icon"></i>
            </button>
          </div>
        </div>
      </section>

      <!--==================== PLACES ====================-->
      <section class="place section" id="place">
        <h2 class="section__title">Choose Your Place</h2>
        <div class="place__container container grid">
          <!--==================== PLACES CARD 1 ====================-->
          <div class="place__card">
            <img src="{{asset('img/client/place1.jpg')}}" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number">4,8</span>
              </span>
              <div class="place__data">
                <h3 class="place__title">Bali</h3>
                <span class="place__subtitle">Indonesia</span>
                <span class="place__price">$2499</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 2 ====================-->
          <div class="place__card">
            <img src="{{asset('img/client/place2.jpg')}}" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number">5,0</span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Bora Bora</h3>
                <span class="place__subtitle">Polinesia</span>
                <span class="place__price">$1599</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 3 ====================-->
          <div class="place__card">
            <img src="{{asset('img/client/place3.jpg')}}" alt="" class="place__img" />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number">4,9</span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Hawaii</h3>
                <span class="place__subtitle">EE.UU</span>
                <span class="place__price">$3499</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>
        </div>
        <div class="container place__cta">
          <a href="discover.html" class="button">Find more</a>
        </div>
      </section>

      <!--==================== SUBSCRIBE ====================-->
      <section class="subscribe section">
        <div class="subscribe__bg">
          <div class="subscribe__container container">
            <h2 class="section__title subscribe__title">
              Subscribe Our <br />
              Newsletter
            </h2>
            <p class="subscribe__description">
              Subscribe to our newsletter and get a special 30% discount.
            </p>

            <form action="" class="subscribe__form">
              <input
                type="text"
                placeholder="Enter email"
                class="subscribe__input"
              />
              <button class="button">Subscribe</button>
            </form>
          </div>
        </div>
      </section>
@endsection

@section('top-js')
    <!--=============== SCROLL REVEAL===============-->
    <script src="{{asset('js/client/scrollreveal.min.js')}}"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="{{asset('js/client/swiper-bundle.min.js')}}"></script>
@endsection

@section('bottom-js')
    <!--=============== Home JS ===============-->
    <script src="{{asset('js/client/home.js')}}"></script>
@endsection