@extends('layouts.master')

@section('content')
    <!-- Hero Section-->
    <section class="mh-full-screen dark-overlay py-7 d-flex align-items-center justify-content-center">
      {{-- <img src="/img2/outofstock.jpg" alt="" class="bg-image"> --}}
      <picture class="bg-image">
        <source media="(min-width: 780px)" srcset="/img2/outofstock.jpg" class="bg-image">
        <img src="/img2/outofstock_cropped.jpg" alt="TacWipes" class="bg-image">
      </picture>
      <div class="overlay-content w-100 ">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 text-white">
              <h6 class="text-uppercase text-white letter-spacing-5 mb-3">Our Story</h6>

              <p class="text-lg">TACWIPES was created with the simple idea that soldiers, Marines, airmen and sailors should have the best tools to do their job.  We are on a mission to provide the highest quality and sustainable combat-optimized products for the military warfighter.  </p>
              <p>Sign up below to recieve updates when TACWIPES become avaliable.  Simple email updates with deals and offers.  No Spam.</p>
              @include('layouts.newsletter')
            </div>

          </div>
        </div>
      </div>
    </section>
 
@endsection