@extends('layouts.master2')

@section('content')

    <!-- Hero Section-->
    <section class="hero">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Shop</li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          <h1 class="hero-heading">Products</h1>
          <div class="row">   
            <div class="col-xl-8 offset-xl-2"><p class="lead text-muted">Tacitcal Colors.  Reusable containers.  Large wipes.</p></div>
          </div>
        </div>
      </div>
    </section>
    <main>
      <div class="container">
        <div class="row">
          <!-- Grid -->
          <div class="products-grid col-12 sidebar-none">
            
            <div class="row">
              @foreach ($products as $product)
              <!-- product-->
              <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="product">
                  <div class="product-image">
                    @if($product->flag == 2)
                      <div class="ribbon ribbon-primary">Best Seller</div>
                    @endif
                  
                  <img src="/img2/products/{{ $product->img }}" alt="{{ $product->name }}" class="img-fluid" />

                    <div class="product-hover-overlay">
                      <a href="/products/{{ $product->id }}/detail" class="product-hover-overlay-link"></a>
                      <div class="product-hover-overlay-buttons">
{{--                         <a href="#" class="btn btn-outline-dark btn-product-left">
                          <i class="fa fa-shopping-cart"></i>
                        </a> --}}
                        <a href="/products/{{ $product->id }}/detail" class="btn btn-dark btn-buy">
                          <i class="fa-search fa"></i>
                          <span class="btn-buy-label ml-2">View</span>
                        </a>
                          <a href="#" data-toggle="modal" data-target="#modal{{ $product->id }}" class="btn btn-outline-dark btn-product-right">
                            <i class="fa fa-expand-arrows-alt"></i>
                          </a>
                      </div>
                    </div>
                  </div>
                  <div class="py-2">
                    <p class="text-muted text-sm mb-1 impact">TACWIPES</p>
                    <h3 class="h6 text-uppercase mb-1">
                      <a href="/products/detail" class="text-dark impact" style="font-size: 175%">{{ $product->name }}</a>
                    </h3>
                    <span class="text-muted">${{ $product->price }}</span>
                  </div>
                </div>
              </div>
              <!-- /product-->
              @endforeach
              
            </div>
            {{-- <nav aria-label="page navigation" class="d-flex justify-content-center mb-5 mt-3">
              <ul class="pagination">
                <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">Prev</span><span class="sr-only">Previous</span></a></li>
                <li class="page-item active"><a href="#" class="page-link">1       </a></li>
                <li class="page-item"><a href="#" class="page-link">2       </a></li>
                <li class="page-item"><a href="#" class="page-link">3       </a></li>
                <li class="page-item"><a href="#" class="page-link">4       </a></li>
                <li class="page-item"><a href="#" class="page-link">5 </a></li>
                <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">Next</span><span class="sr-only">Next     </span></a></li>
              </ul>
            </nav> --}}
          </div>
          <!-- / Grid End-->
        </div>
      </div>
    </main>
    <!-- Quickview Modal    -->
  @foreach($products as $product)
    <div id="modal{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade quickview">
      <div role="document" class="modal-dialog modal-lg">
        <div class="modal-content">
          <button type="button" data-dismiss="modal" aria-label="Close" class="close modal-close">
            <svg class="svg-icon w-100 h-100 svg-icon-light align-middle">
              <use xlink:href="#close-1"> </use>
            </svg>
          </button>
          <div class="modal-body"> 
            

           @include('layouts.detail')



          </div>
        </div>
      </div>
    </div>
    @endforeach

@endsection
