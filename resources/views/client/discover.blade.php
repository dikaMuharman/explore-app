@extends('layouts.client') 

@section('navbar')
  <header class="header header--white">
    @parent
  </header>    
@endsection


@section('content')
    <!--==================== PLACES ====================-->
      <section class="place section" id="place">
        <h2 class="section__title">Choose Your Place</h2>
        <div class="place__container container grid">
          <!--==================== PLACES CARD 1 ====================-->
          <div class="place__card place__card--lg">
            <img
              src="{{asset('img/client/place1.jpg')}}"
              alt=""
              class="place__img place__img--lg"
            />

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
          <div class="place__card place__card--lg">
            <img
              src="{{asset('img/client/place2.jpg')}}"
              alt=""
              class="place__img place__img--lg"
            />

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
          <div class="place__card place__card--lg">
            <img
              src="{{asset('img/client/place3.jpg')}}"
              alt=""
              class="place__img place__img--lg"
            />

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

          <!--==================== PLACES CARD 4 ====================-->
          <div class="place__card place__card--lg">
            <img
              src="{{asset('img/client/place4.jpg')}}"
              alt=""
              class="place__img place__img--lg"
            />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number">4,8</span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Whitehaven</h3>
                <span class="place__subtitle">Australia</span>
                <span class="place__price">$2499</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 5 ====================-->
          <div class="place__card place__card--lg">
            <img
              src="{{asset('img/client/place5.jpg')}}"
              alt=""
              class="place__img place__img--lg"
            />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number">4,8</span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Hvar</h3>
                <span class="place__subtitle">Croacia</span>
                <span class="place__price">$1999</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 1 ====================-->
          <div class="place__card place__card--lg">
            <img
              src="{{asset('img/client/place1.jpg')}}"
              alt=""
              class="place__img place__img--lg"
            />

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
          <div class="place__card place__card--lg">
            <img
              src="{{asset('img/client/place2.jpg')}}"
              alt=""
              class="place__img place__img--lg"
            />

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
          <div class="place__card place__card--lg">
            <img
              src="{{asset('img/client/place3.jpg')}}"
              alt=""
              class="place__img place__img--lg"
            />

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

          <!--==================== PLACES CARD 4 ====================-->
          <div class="place__card place__card--lg">
            <img
              src="{{asset('img/client/place4.jpg')}}"
              alt=""
              class="place__img place__img--lg"
            />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number">4,8</span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Whitehaven</h3>
                <span class="place__subtitle">Australia</span>
                <span class="place__price">$2499</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>

          <!--==================== PLACES CARD 5 ====================-->
          <div class="place__card place__card--lg">
            <img
              src="{{asset('img/client/place5.jpg')}}"
              alt=""
              class="place__img place__img--lg"
            />

            <div class="place__content">
              <span class="place__rating">
                <i class="ri-star-line place__rating-icon"></i>
                <span class="place__rating-number">4,8</span>
              </span>

              <div class="place__data">
                <h3 class="place__title">Hvar</h3>
                <span class="place__subtitle">Croacia</span>
                <span class="place__price">$1999</span>
              </div>
            </div>

            <button class="button button--flex place__button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>
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