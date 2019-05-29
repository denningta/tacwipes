<!-- Navbar-->
  <div class="container-fluid">  
    <!-- Navbar Header  -->
    <a href="/" class="navbar-brand user-brand align-middle">

        @include('layouts.logo')

        <span class="align-middle">TACWIPES</span>

    </a> 
    <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">
      <i class="fa fa-bars"></i>
    </button>
    <!-- Navbar Collapse -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item dropdown">
          <a id="homeDropdownMenuLink" href="/" class="nav-link">   
            Home
          </a>
        </li>
        <li class="nav-item">
          <a href="/products" class="nav-link">
            Products
          </a>
        </li>
        <li class="nav-item">
          <a href="/about" class="nav-link">
            About
          </a>
        </li>
      </ul>
      <div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0 ml-lg-7">
        <div class="d-none d-lg-block">
          <a id="cartdetails" href="/cart" class="navbar-icon-link">
              <div class="navbar-icon-link-badge mt-3 mr-5">{{ Cart::count() }}</div>
              <svg class="svg-icon">
                <use xlink:href="#cart-1"></use>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
 


