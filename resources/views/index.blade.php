@extends('layouts.master')

@section('content')

    <!-- Hero Section-->
    <section class="home-full-slider-wrapper mb-10px">
      <!-- Hero Slider-->
      <div class="owl-carousel owl-theme owl-dots-modern home-full-slider">
        <div style="background: #000000;" class="item home-full-item">
          <picture class="bg-image">
            <source media="(min-width: 780px)" srcset="/img2/can_black_white_main.png" class="bg-image">
            <img src="/img2/can_black_white_main_cropped.png" alt="TacWipes" class="bg-image">
          </picture>
          <div class="container-fluid h-100 py-5">
            <div class="row align-items-center h-100">
              <div class="col-lg-8 col-xl-6 mx-auto text-white text-center">
                <h5 class="text-uppercase text-white mb-4 font-weight-light letter-spacing-5"></h5>
                <h1 class="mb-4 display-2 font-weight-bold impact">TACWIPES</h1>
                <p class="lead mb-4">Tactical field wipes designed for the warfighter.</p>
                <p class="lead mb-4">Get Clean. Stay Tactical.</p>
                <p><a href="/products" class="btn btn-light">Buy Now</a></p>
              </div>
            </div>
          </div>
        </div>
{{--         <div class="item home-full-item">
          <picture class="bg-image">
            <source media="(min-width: 780px)" srcset="/img2/can_black_white_main.png" class="bg-image">
            <img src="/img2/can_black_white_main_cropped.png" alt="TacWipes" class="bg-image">
          </picture>
          <div class="container-fluid h-100">
            <div class="row align-items-center h-100">
              <div class="col-lg-8 col-xl-6 mx-auto text-white text-center">
                <h5 class="text-uppercase text-white mb-4 font-weight-light letter-spacing-5">Introducing</h5>
                <h1 class="mb-4 display-2 font-weight-bold impact">CAN<span class="text-primary">.</span></h1>
                <p class="lead mb-4">Get Clean. Stay Tactical.</p>
                <p><a href="/products" class="btn btn-light">Buy Now</a></p>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </section>
    {{-- <section>
      <div class="container-fluid">
          <div class="row">
          <div class="col-lg-6 about-text-column bg-gray-100">
            <div class="p-5">
              <h6 class="text-uppercase text-muted letter-spacing-5 mb-1"></h6>
              <h2 class="mb-4">Multi-purpose Container</h2>
              <p class="text-lg text-muted">Not because we are environmentally concious, which we are.  But, because sometimes you need a dry place to store your log of dip, or your weapon cleaning gear, or your det cord.  Everything you carry NEEDS a purpose.</p>
            </div>
          </div>
          <div class="col-lg-6 p-lg-0 about-image-column"><img src="https://dummyimage.com/2000x1333/404044/ffffff.png" alt="" class="bg-image"></div>
        </div>

        <div class="row">
          <div class="col-lg-6 about-text-column order-lg-2">
            <div class="about-text">
              <h6 class="text-uppercase text-muted letter-spacing-5 mb-1"></h6>
              <h2 class="mb-4">Flushable and Biodegradable</h2>
              <p class="text-lg text-muted"></p>
            </div>
          </div>
          <div class="col-lg-6 p-lg-0 about-image-column order-lg-1">
            <img src="/img2/biodegradable.png" alt="" class="bg-image">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 about-text-column bg-gray-100">
            <div class="about-text">
              <h6 class="text-uppercase text-muted letter-spacing-5 mb-1">Get Clean. Stay Tacitcal.</h6>
              <h2 class="mb-4">Large, Scentless Wipes</h2>
              <p class="text-lg text-muted">At 7 inches x 7 inches, our wipes provide full-hand-coverage to get that dirty business done.  But, why brown wipes?  Because we can.  And we did.  Deal with it.</p>
            </div>
          </div>
          <div class="col-lg-6 p-lg-0 about-image-column">
            <img src="/img2/wipe_size.png" alt="" class="bg-image">
          </div>
        </div>

      </div>
    </section> --}}
  
    
    @endsection
