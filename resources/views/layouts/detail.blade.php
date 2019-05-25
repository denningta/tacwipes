<section class="product-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 pt-4 order-2 order-lg-1">
            <div class="row">   
              <div class="col-2 pr-0">
                {{-- Future expansion to image changer --}}
{{--                 <div data-slider-id="1" class="owl-thumbs">
                  <button class="owl-thumb-item detail-thumb-item mb-3"><img src="/img/photo/kyle-loftus-596319-detail-1.jpg" alt="Modern Jacket 0" class="img-fluid"></button>
                  <button class="owl-thumb-item detail-thumb-item mb-3"><img src="/img/photo/kyle-loftus-596319-detail-2.jpg" alt="Modern Jacket 1" class="img-fluid"></button>
                  <button class="owl-thumb-item detail-thumb-item mb-3"><img src="/img/photo/kyle-loftus-596319-detail-3.jpg" alt="Modern Jacket 2" class="img-fluid"></button>
                  <button class="owl-thumb-item detail-thumb-item mb-3"><img src="/img/photo/kyle-loftus-594535-unsplash-detail-3.jpg" alt="Modern Jacket 3" class="img-fluid"></button>
                  <button class="owl-thumb-item detail-thumb-item mb-3"><img src="/img/photo/kyle-loftus-594535-unsplash-detail-4.jpg" alt="Modern Jacket 4" class="img-fluid"></button>
                </div> --}}
                {{-- end image changer --}}
              </div>
              <div class="col-10 detail-carousel">
                @if($product->flag == 2)
                <div class="ribbon ribbon-primary">Best Seller</div>
                @endif
                <div data-slider-id="1" class="owl-carousel detail-slider">
                  <div class="item"><a href="/img2/products/{{ $product->img }}" data-footer="{{ $product->name }}" data-toggle="lightbox" data-gallery="product-gallery"><img src="/img2/products/{{ $product->img }}" alt="{{ $product->name }}" class="img-fluid"></a></div>
                  {{-- Image changer photos --}}
{{--                   <div class="item"><a href="/img/photo/kyle-loftus-596319-detail-2.jpg" data-footer="Modern Jacket 2 - Caption text" data-toggle="lightbox" data-gallery="product-gallery"><img src="/img/photo/kyle-loftus-596319-detail-2.jpg" alt="Modern Jacket 2" class="img-fluid"></a></div>
                  <div class="item"><a href="/img/photo/kyle-loftus-596319-detail-3.jpg" data-footer="Modern Jacket 3 - Caption text" data-toggle="lightbox" data-gallery="product-gallery"><img src="/img/photo/kyle-loftus-596319-detail-3.jpg" alt="Modern Jacket 3" class="img-fluid"></a></div>
                  <div class="item"><a href="/img/photo/kyle-loftus-594535-unsplash-detail-3.jpg" data-footer="Modern Jacket 4 - Caption text" data-toggle="lightbox" data-gallery="product-gallery"><img src="/img/photo/kyle-loftus-594535-unsplash-detail-3.jpg" alt="Modern Jacket 4" class="img-fluid"></a></div>
                  <div class="item"><a href="/img/photo/kyle-loftus-594535-unsplash-detail-4.jpg" data-footer="Modern Jacket 5 - Caption text" data-toggle="lightbox" data-gallery="product-gallery"><img src="/img/photo/kyle-loftus-594535-unsplash-detail-4.jpg" alt="Modern Jacket 5" class="img-fluid"></a></div> --}}
                  {{-- Image changer --}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 pl-lg-4 order-1 order-lg-2">
            <ul class="breadcrumb undefined">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/products">Products</a></li>
              <li class="breadcrumb-item active">{{ $product->name }}</li>
            </ul>
            <h1 class="mb-4 impact">{{ $product->name }}</h1>
            <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
              <ul class="list-inline mb-2 mb-sm-0">
                <li class="list-inline-item h4 font-weight-light mb-0">${{ $product->price }}</li>

              </ul>
              <div class="d-flex align-items-center">
                <ul class="list-inline mr-2 mb-0">
                  <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                  <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                  <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                  <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                  <li class="list-inline-item mr-0"><i class="fa fa-star text-gray-300"></i></li>
                </ul><span class="text-muted text-uppercase text-sm">25 reviews</span>
              </div>
            </div>
            <p class="mb-4 text-muted">
              @include('products.description')
            </p>
            <form method="POST" action="{{ route('cart.add') }}" name="product" id="product">
              {{ csrf_field() }}
              <div class="row">
               <div class="col-12 detail-option mb-5">
                  <label class="detail-option-heading font-weight-bold">Items <span>(required)</span></label>
                  <input type="number" name="qty" value="1" class="form-control detail-quantity">
                  <input type="hidden" name="id" value="{{ $product->id }}">
                  <input type="hidden" name="name" value="{{ $product->name }}">
                  <input type="hidden" name="price" value="{{ $product->price }}">
                  <input type="hidden" name="img" value="{{ $product->img }}">
                </div>
              </div>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <button type="submit" class="btn btn-dark btn-lg mb-1"> <i class="fa fa-shopping-cart mr-2"></i>Add to Cart</button>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </section>