@extends('layouts.client') 

@section('navbar')
  <header class="header header--white">
    @parent
  </header>    
@endsection


@section('content')
<!--==================== Breadcrumbs ====================-->
      <div class="breadcrumbs container">
        <ul class="breadcrumbs__menu">
          <li class="breadcrumbs__item">
            <a href="{{route('discover')}}" class="breadcrumbs__link">Discover</a>
          </li>
          <li class="breadcrumbs__item">Bali</li>
        </ul>
      </div>
      <!--==================== Details ====================-->
      <section class="details section">
        <div class="details__container container grid">
          <!-- Detail image -->
          <div
            class="swiper-container details__photos"
            style="
              --swiper-navigation-color: #fff;
              --swiper-pagination-color: #fff;
            "
          >
            <!-- Big image -->
            <div class="swiper-wrapper details__big">
              <img
                src="{{asset('img/client/discover1.jpg')}}"
                alt=""
                srcset=""
                class="details__img swiper-slide"
              />
              <img
                src="{{asset('img/client/discover2.jpg')}}"
                alt=""
                srcset=""
                class="details__img swiper-slide"
              />
              <img
                src="{{asset('img/client/discover3.jpg')}}"
                alt=""
                srcset=""
                class="details__img swiper-slide"
              />
            </div>
            <!-- Thumbs image -->
            <div class="details__small" style="--total-img: 4">
              <img
                src="{{asset('img/client/discover1.jpg')}}"
                alt=""
                srcset=""
                class="details__img"
              />
              <img
                src="{{asset('img/client/discover2.jpg')}}"
                alt=""
                srcset=""
                class="details__img"
              />
              <img
                src="{{asset('img/client/discover3.jpg')}}"
                alt=""
                srcset=""
                class="details__img"
              />
              <img
                src="{{asset('img/client/discover4.jpg')}}"
                alt=""
                srcset=""
                class="details__img"
              />
            </div>
          </div>
          <!-- Detail Name -->
          <div class="details__data">
            <h1 class="details__title section__title">Bali</h1>
            <span class="details__location">
              <i class="ri-map-pin-line details__icon"></i> Indonesia</span
            >
            <span class="details__price">
              <i class="ri-money-dollar-circle-fill"></i> Start from
              <b>$550</b>
            </span>
            <span class="details__review"
              >4.5 <i class="ri-star-fill details__icon"></i>
              <span class="details__review--sm">( 43 reviews )</span></span
            >
            <div class="details__include">
              <span>Include :</span>
              <ul class="details__list">
                <li>accommodation (according to your choice)</li>
                <li>flight ticket</li>
                <li>lauch</li>
                <li>drivers and tour guide</li>
              </ul>
            </div>
            <a
              href="{{route('reservation')}}"
              class="button button--flex details__button"
              >Reservation</a
            >
          </div>
        </div>
      </section>
      <!--====================  Tourism Place ====================-->
      <section class="description section container">
        <h2 class="section__title description__title">Description</h2>
        <p class="details__description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
          reprehenderit vero laborum! Fugiat in necessitatibus deserunt quas
          ipsam et, totam quos reiciendis autem neque nobis, ipsum inventore
          blanditiis optio quo?.
        </p>
      </section>
      <!--====================  Tourism Place ====================-->
      <section class="tourism section">
        <h2 class="section__title">tourist attraction</h2>
        <div class="tourism__container container grid">
          <!--====================  Tourism Card 1 ====================-->
          <div class="tourism__card">
            <img
              src="{{asset('img/client/discover1.jpg')}}"
              alt="Discover1"
              class="tourism__img"
            />
            <div class="tourism__data">
              <h3 class="tourism__title">Lorem ipsum dolor</h3>
            </div>
          </div>
          <!--====================  Tourism Card 1 ====================-->
          <div class="tourism__card">
            <img
              src="{{asset('img/client/discover1.jpg')}}"
              alt="Discover1"
              class="tourism__img"
            />
            <div class="tourism__data">
              <h3 class="tourism__title">Lorem ipsum dolor</h3>
            </div>
          </div>
          <!--====================  Tourism Card 1 ====================-->
          <div class="tourism__card">
            <img
              src="{{asset('img/client/discover1.jpg')}}"
              alt="Discover1"
              class="tourism__img"
            />
            <div class="tourism__data">
              <h3 class="tourism__title">Lorem ipsum dolor</h3>
            </div>
          </div>
          <!--====================  Tourism Card 1 ====================-->
          <div class="tourism__card">
            <img
              src="{{asset('img/client/discover1.jpg')}}"
              alt="Discover1"
              class="tourism__img"
            />
            <div class="tourism__data">
              <h3 class="tourism__title">Lorem ipsum dolor</h3>
            </div>
          </div>
          <!--====================  Tourism Card 1 ====================-->
          <div class="tourism__card">
            <img
              src="{{asset('img/client/discover1.jpg')}}"
              alt="Discover1"
              class="tourism__img"
            />
            <div class="tourism__data">
              <h3 class="tourism__title">Lorem ipsum dolor</h3>
            </div>
          </div>
          <!--====================  Tourism Card 1 ====================-->
          <div class="tourism__card">
            <img
              src="{{asset('img/client/discover1.jpg')}}"
              alt="Discover1"
              class="tourism__img"
            />
            <div class="tourism__data">
              <h3 class="tourism__title">Lorem ipsum dolor</h3>
            </div>
          </div>
          <!--====================  Tourism Card 1 ====================-->
          <div class="tourism__card">
            <img
              src="{{asset('img/client/discover1.jpg')}}"
              alt="Discover1"
              class="tourism__img"
            />
            <div class="tourism__data">
              <h3 class="tourism__title">Lorem ipsum dolor</h3>
            </div>
          </div>
          <!--====================  Tourism Card 1 ====================-->
          <div class="tourism__card">
            <img
              src="{{asset('img/client/discover1.jpg')}}"
              alt="Discover1"
              class="tourism__img"
            />
            <div class="tourism__data">
              <h3 class="tourism__title">Lorem ipsum dolor</h3>
            </div>
          </div>
        </div>
      </section>
      <!--==================== Reviews ====================-->
      <section class="reviews section">
        <h2 class="section__title">Reviews</h2>
        <div class="reviews__container container grid">
          <div class="reviews__card container grid">
            <h3 class="reviews__card__title">John doe</h3>
            <small class="reviews__card__date">1 mouth ago</small>
            <div class="reviews__rating">
              <span><i class="ri-star-fill reviews__icon"></i></span>
              <span><i class="ri-star-fill reviews__icon"></i></span>
              <span><i class="ri-star-fill reviews__icon"></i></span>
              <span><i class="ri-star-fill reviews__icon"></i></span>
              <span><i class="ri-star-half-fill reviews__icon"></i></span>
            </div>
            <p class="reviews__card__message">This place very good</p>
          </div>
          <div class="reviews__card grid container">
            <h3 class="reviews__card__title">John doe</h3>
            <small class="reviews__card__date">1 mouth ago</small>
            <div class="reviews__rating">
              <span><i class="ri-star-fill reviews__icon"></i></span>
              <span><i class="ri-star-fill reviews__icon"></i></span>
              <span><i class="ri-star-fill reviews__icon"></i></span>
              <span><i class="ri-star-fill reviews__icon"></i></span>
              <span><i class="ri-star-half-fill reviews__icon"></i></span>
            </div>
            <p class="reviews__card__message">This place very good</p>
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

@section('top-js')
    <!--=============== SWIPER JS ===============-->
    <script src="{{asset('js/client/swiper-bundle.min.js')}}"></script>
@endsection

@section('bottom-js')
    <script>
      var swiper = new Swiper('.details__photos', {
        loop: true,
        spaceBetween: 20,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
      });
    </script>
@endsection