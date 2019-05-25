@extends('layouts.master2')

@section('content')
    <!-- Hero Section-->
    <section class="hero">
      <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Shopping cart        </li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
          <h1 class="hero-heading">Shopping cart</h1>
          <div class="row">   
            <div class="col-xl-8 offset-xl-2"><p class="lead text-muted">You have {{ Cart::count() }} items in your shopping cart</p></div>
            
            <div class="col-xl-8 offset-xl-2">
              @if(session()->has('success_message'))
                <div class="alert alert-success">
                  {{ session()->get('success_message') }}
                </div>
              @endif
              @if(count($errors) > 0)
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Shopping Cart Section-->
    <section>
      <div class="container">
        <div class="row mb-5"> 
          <div class="col-lg-8">
            <div class="cart">
              <div class="cart-wrapper">
                <div class="cart-header text-center">
                  <div class="row">
                    <div class="col-5">Item</div>
                    <div class="col-2">Price</div>
                    <div class="col-2">Quantity</div>
                    <div class="col-2">Total</div>
                    <div class="col-1"></div>
                  </div>
                </div>
                <div class="cart-body">
                
                <!-- Product-->                
                @foreach(Cart::content() as $row)
                  <div class="cart-item">
                    <div class="row d-flex align-items-center text-center">
                      <div class="col-5">
                        <div class="d-flex align-items-center">
                          <a href="/products/{{ $row->id }}/detail">
                            <img src="/img2/products/{{ $row->options->img }}" alt="..." class="cart-item-img">
                          </a>
                          <div class="cart-title text-left"><a href="/products/{{ $row->id }}/detail" class="text-decoration-none"><strong><h2 class="text-dark impact">{{ $row->name }}</h2></strong></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">${{ $row->price }}</div>
                      <div class="col-2">
                        <div class="d-flex align-items-center">
                          {{ $row->qty }}
                        </div>
                      </div>
                      <div class="col-2 text-center">${{ $row->price * $row->qty }}</div>
                      <div class="col-1 text-center"><a href="{{ route('cart.delete', $row->rowId) }}" class="cart-remove"> <i class="fa fa-times"></i></a></div>
                    </div>
                  </div>
                @endforeach
                {{-- End Product --}}

                </div>
              </div>
            </div>
            <div class="my-5 d-flex justify-content-between flex-column flex-lg-row">
              <a href="/products" class="btn btn-link text-muted">
              <i class="fa fa-chevron-left"></i> Continue Shopping</a>


              <a href="/checkout" class="btn btn-dark">Proceed to checkout <i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="block mb-5">
              <div class="block-header">
                <h6 class="text-uppercase mb-0">Order Summary</h6>
              </div>
              <div class="block-body bg-light pt-1">
                <p class="text-sm">Shipping and additional costs are calculated based on values you have entered.</p>
                <ul class="order-summary mb-0 list-unstyled">
                  <li class="order-summary-item"><span>Order Subtotal </span><span>${{ Cart::subtotal() }}</span></li>
                  <li class="order-summary-item"><span>Tax + Shipping + Handling</span><span>${{ Cart::tax() }}</span></li>
                  <li class="order-summary-item border-0"><span>Total</span><strong class="order-summary-total">${{ Cart::total()}}</strong></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection