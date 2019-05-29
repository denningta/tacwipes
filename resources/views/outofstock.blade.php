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
              <h6 class="text-uppercase text-white letter-spacing-5 mb-3">Sorry</h6>
              <h1 class="display-3 font-weight-bold text-shadow mb-5">Coming Soon!</h1>
              <p class="text-lg">We are working hard toward a fall release of this product. Sign up below to be the first to know when TACWIPES becomes avaliable.  We will make it worth your time!  No Spam.</p>
              @include('layouts.newsletter')
            </div>

          </div>
        </div>
      </div>
    </section>
 
@endsection