@extends('layouts.client')

@section('navbar')
  <header class="header header--white">
    <nav class="nav nav-center container">
        <a href="{{route('home')}}" class="nav__logo">Explore</a>
      </nav>
  </header>    
@endsection

@section('content')
    <!--==================== Reservation ====================-->
      <section class="reservation section container">
        <h1 class="section__title reservation__title">Form Reservation</h1>
        <div class="reservation__container">
          <form action="" method="get" class="reservation__form">
            <label class="danger-text">choose a tour package</label>
            <div class="reservation__card__container">
              <!-- Card package -->
              <div class="reservation__card">
                <input
                  type="radio"
                  name="package"
                  class="reservation__card--input"
                  value="1"
                />
                <div class="reservation__package">
                  <div class="reservation__data">
                    <h2 class="reservation__data--title">Standard</h2>
                    <hr class="reservation__divider" />
                    <div class="reservation__hotel">
                      <span class="reservation__hotel--title">Hotel</span>
                      <h3 class="reservation__hotel--name">
                        <i class="ri-hotel-line reservation__hotel--icon"></i>
                        NuVe Heritage Hotel
                      </h3>
                      <span class="reservation__hotel--review">
                        4,3
                        <i class="ri-star-fill reservation__hotel--icon"></i>
                        (249 review)</span
                      >
                      <div class="reservation__hotel--facility">
                        <div class="reservation__hotel--item">
                          <i
                            class="
                              ri-restaurant-2-line
                              reservation__hotel--icon
                            "
                          ></i>
                          <span>Breakfast</span>
                        </div>
                        <div class="reservation__hotel--item">
                          <i class="ri-car-fill reservation__hotel--icon"></i>
                          <span>Airport shuttle</span>
                        </div>
                        <div class="reservation__hotel--item">
                          <i class="ri-wifi-line reservation__hotel--icon"></i>
                          <span>Free wifi</span>
                        </div>
                        <div class="reservation__hotel--item">
                          <i class="ri-wifi-line reservation__hotel--icon"></i>
                          <span>Free wifi</span>
                        </div>
                        <div class="reservation__hotel--item">
                          <i class="ri-wifi-line reservation__hotel--icon"></i>
                          <span>Free wifi</span>
                        </div>
                        <div class="reservation__hotel--item">
                          <i class="ri-wifi-line reservation__hotel--icon"></i>
                          <span>Free wifi</span>
                        </div>
                      </div>
                    </div>
                    <hr class="reservation__divider" />
                    <div class="reservation__plane">
                      <span class="reservation__plane--title"
                        ><i class="ri-plane-line"></i> Plane</span
                      >
                      <h3 class="reservation__plane--name">JetStar</h3>
                      <span>Economy class</span>
                    </div>
                  </div>
                  <div class="reservation__price" data-price="550">
                    <span>$550 / night</span>
                  </div>
                </div>
              </div>
              <div class="reservation__card">
                <input
                  type="radio"
                  name="package"
                  class="reservation__card--input"
                  value="1"
                />
                <div class="reservation__package">
                  <div class="reservation__data">
                    <h2 class="reservation__data--title">Standard</h2>
                    <hr class="reservation__divider" />
                    <div class="reservation__hotel">
                      <span class="reservation__hotel--title">Hotel</span>
                      <h3 class="reservation__hotel--name">
                        <i class="ri-hotel-line reservation__hotel--icon"></i>
                        NuVe Heritage Hotel
                      </h3>
                      <span class="reservation__hotel--review">
                        4,3
                        <i class="ri-star-fill reservation__hotel--icon"></i>
                        (249 review)</span
                      >
                      <div class="reservation__hotel--facility">
                        <div class="reservation__hotel--item">
                          <i
                            class="
                              ri-restaurant-2-line
                              reservation__hotel--icon
                            "
                          ></i>
                          <span>Breakfast</span>
                        </div>
                        <div class="reservation__hotel--item">
                          <i class="ri-car-fill reservation__hotel--icon"></i>
                          <span>Airport shuttle</span>
                        </div>
                        <div class="reservation__hotel--item">
                          <i class="ri-wifi-line reservation__hotel--icon"></i>
                          <span>Free wifi</span>
                        </div>
                        <div class="reservation__hotel--item">
                          <i class="ri-wifi-line reservation__hotel--icon"></i>
                          <span>Free wifi</span>
                        </div>
                        <div class="reservation__hotel--item">
                          <i class="ri-wifi-line reservation__hotel--icon"></i>
                          <span>Free wifi</span>
                        </div>
                        <div class="reservation__hotel--item">
                          <i class="ri-wifi-line reservation__hotel--icon"></i>
                          <span>Free wifi</span>
                        </div>
                      </div>
                    </div>
                    <hr class="reservation__divider" />
                    <div class="reservation__plane">
                      <span class="reservation__plane--title"
                        ><i class="ri-plane-line"></i> Plane</span
                      >
                      <h3 class="reservation__plane--name">JetStar</h3>
                      <span>Economy class</span>
                    </div>
                  </div>
                  <div class="reservation__price" data-price="1200">
                    <span>$1200 / night</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="reservation__helper">
              <small
                >*include lauch, tour guide and transport for all night</small
              >
            </div>
            <div class="input">
              <label for="departure_date">Date reservation</label>
              <input
                type="text"
                name="departure_date"
                id="date"
                autocomplete="off"
                disabled
              />
            </div>
            <div class="input">
              <label for="jumlah_paket">Add poeple</label>
              <div class="input--control">
                <button class="button" id="min" disabled>
                  <i class="ri-subtract-line"></i>
                </button>
                <input type="number" value="1" readonly id="poeple" />
                <button class="button" id="plus" disabled>
                  <i class="ri-add-line"></i>
                </button>
              </div>
            </div>
            <div class="input">
              <label for="total">You will pay</label>
              <div class="input--control" style="align-items: center">
                <span
                  ><i
                    class="ri-money-dollar-circle-line"
                    style="font-size: 2rem"
                  ></i
                ></span>
                <input
                  type="text"
                  name="total"
                  id="total"
                  readonly
                  value="0"
                  style="background-color: transparent"
                />
              </div>
            </div>
            <!-- Button control -->
            <div class="reservation__buttongroup">
              <a href="{{route('detail')}}" class="button button--secondary">Back</a>
              <button type="submit" class="button">Book</button>
            </div>
          </form>
        </div>
      </section>
@endsection

@section('top-js')
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
@endsection

@section('bottom-js')
    <script src="{{asset('js/client/reservation.js')}}"></script>
@endsection