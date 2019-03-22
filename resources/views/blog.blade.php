<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sell - Bootstrap 4 Ecommerce Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.css">
    <!-- Google fonts - Playfair Display-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
    <link rel="stylesheet" href="fonts/hkgrotesk/stylesheet.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <!-- Ekko Lightbox-->
    <link rel="stylesheet" href="vendor/ekko-lightbox/ekko-lightbox.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/solid.css" integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/regular.css" integrity="sha384-avJt9MoJH2rB4PKRsJRHZv7yiFZn8LrnXuzvmZoD3fh1aL6aM6s0BBcnCvBe6XSD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/brands.css" integrity="sha384-7xAnn7Zm3QC1jFjVc1A6v/toepoG3JXboQYzbM0jrPzou9OFXm/fY6Z/XiIebl/k" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css" integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG" crossorigin="anonymous">
  </head>
  <body>
    <header class="header">
      <!-- Top Bar-->
      <div class="top-bar">
        <div class="container-fluid">
          <div class="row d-flex align-items-center">
            <div class="col-sm-7 d-none d-sm-block">
              <ul class="list-inline mb-0">
                <li class="list-inline-item pr-3 mr-0">
                  <svg class="svg-icon mr-2">
                    <use xlink:href="#calls-1"> </use>
                  </svg>020-800-456-747
                </li>
                <li class="list-inline-item px-3 border-left d-none d-lg-inline-block">Free shipping on orders over $300</li>
              </ul>
            </div>
            <div class="col-sm-5 d-flex justify-content-end">
              <!-- Language Dropdown-->
              <div class="dropdown border-right px-3"><a id="langsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle topbar-link"><img src="img/united-kingdom.svg" alt="english" class="topbar-flag">English</a>
                <div aria-labelledby="langsDropdown" class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item text-sm"><img src="img/germany.svg" alt="german" class="topbar-flag">German</a><a href="#" class="dropdown-item text-sm"> <img src="img/france.svg" alt="french" class="topbar-flag">French</a></div>
              </div>
              <!-- Currency Dropdown-->
              <div class="dropdown pl-3 ml-0"><a id="currencyDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle topbar-link">USD</a>
                <div aria-labelledby="currencyDropdown" class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item text-sm">EUR</a><a href="#" class="dropdown-item text-sm"> GBP</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top Bar End-->
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light bg-white bg-fixed-white">
        <div class="container-fluid">  
          <!-- Navbar Header  --><a href="index.html" class="navbar-brand">
            <svg class="navbar-brand-svg" viewBox="0 0 65 16" width="85" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="navbar-brand-svg-text" d="M5.72266 18.1562C4.88281 18.1562 4.08529 18.0033 3.33008 17.6973C2.58138 17.3913 1.94661 16.9355 1.42578 16.3301C0.911458 15.7181 0.582682 14.9759 0.439453 14.1035L2.90039 13.4785C2.98503 14.2988 3.28776 14.9173 3.80859 15.334C4.33594 15.7507 4.98698 15.959 5.76172 15.959C6.23698 15.959 6.64714 15.8841 6.99219 15.7344C7.33724 15.5781 7.59766 15.3665 7.77344 15.0996C7.94922 14.8327 8.03711 14.5332 8.03711 14.2012C8.03711 13.804 7.91341 13.4655 7.66602 13.1855C7.42513 12.9056 7.1224 12.6745 6.75781 12.4922C6.39323 12.3099 5.89193 12.0918 5.25391 11.8379C4.42057 11.5059 3.74674 11.1999 3.23242 10.9199C2.7181 10.6335 2.27539 10.2363 1.9043 9.72852C1.53971 9.2207 1.35742 8.57943 1.35742 7.80469C1.35742 7.01693 1.54948 6.33659 1.93359 5.76367C2.32422 5.18424 2.84505 4.74479 3.49609 4.44531C4.15365 4.14583 4.8763 3.99609 5.66406 3.99609C6.54948 3.99609 7.35677 4.19792 8.08594 4.60156C8.8151 4.9987 9.40755 5.60417 9.86328 6.41797L7.80273 7.67773C7.56185 7.20898 7.24609 6.84766 6.85547 6.59375C6.46484 6.33333 6.03841 6.20312 5.57617 6.20312C5.25065 6.20312 4.95443 6.26497 4.6875 6.38867C4.42708 6.51237 4.21875 6.68815 4.0625 6.91602C3.91276 7.13737 3.83789 7.39128 3.83789 7.67773C3.83789 8.0293 3.95182 8.32878 4.17969 8.57617C4.40755 8.82357 4.69401 9.0319 5.03906 9.20117C5.39062 9.37044 5.86914 9.57227 6.47461 9.80664C7.33398 10.1387 8.0306 10.4512 8.56445 10.7441C9.09831 11.0371 9.55729 11.4473 9.94141 11.9746C10.3255 12.502 10.5176 13.1693 10.5176 13.9766C10.5176 14.8229 10.3027 15.5618 9.87305 16.1934C9.44987 16.8249 8.8737 17.3099 8.14453 17.6484C7.41536 17.987 6.60807 18.1562 5.72266 18.1562ZM16.8906 4.20117H26.0703V6.47656H19.3711V9.96289H25.6113V12.2383H19.3711V15.6562H26.0703V18H16.8906V4.20117ZM33.0586 4.20117H35.5391V15.6562H41.4375V18H33.0586V4.20117ZM47.4492 4.20117H49.9297V15.6562H55.8281V18H47.4492V4.20117Z" transform="translate(0 -3)" fill="#212529"/>
            <path class="text-primary" d="M62.0254 15.4219H64.418V18H62.0254V15.4219Z" transform="translate(0 -3)" fill="#9A6EE2"/>
            </svg></a>
          <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
          <!-- Navbar Collapse -->
          <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item dropdown"><a id="homeDropdownMenuLink" href="index.html" data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link ">
                   
                  Home<i class="fa fa-angle-down"></i></a>
                <div aria-labelledby="homeDropdownMenuLink" class="dropdown-menu"><a href="index.html" class="dropdown-item">Fullscreen home + Lookbook</a><a href="index2.html" class="dropdown-item">Split-screen home</a><a href="index3.html" class="dropdown-item">Classic home</a><a href="index4.html" class="dropdown-item">Parallax sections <span class="badge badge-info ml-1">New</span></a><a href="index5.html" class="dropdown-item">Slider + broken grid <span class="badge badge-info ml-1">New</span>    </a></div>
              </li>
              <li class="nav-item"><a href="category.html" class="nav-link">Shop</a>
              </li>
              <!-- Megamenu-->
              <li class="nav-item dropdown position-static"><a href="#" data-toggle="dropdown" class="nav-link">Template<i class="fa fa-angle-down"></i></a>
                <div class="dropdown-menu megamenu py-lg-0">
                  <div class="row">
                    <div class="col-lg-9">
                      <div class="row p-3 pr-lg-0 pl-lg-5 pt-lg-5">
                        <div class="col-lg-3">
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Homepage</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a href="index.html" class="megamenu-list-link">Fullscreen home + Lookbook   </a></li>
                            <li class="megamenu-list-item"><a href="index2.html" class="megamenu-list-link">Split-screen home   </a></li>
                            <li class="megamenu-list-item"><a href="index3.html" class="megamenu-list-link">Classic home   </a></li>
                            <li class="megamenu-list-item"><a href="index4.html" class="megamenu-list-link">Parallax sections  <span class="badge badge-warning ml-1">New</span>   </a></li>
                            <li class="megamenu-list-item"><a href="index5.html" class="megamenu-list-link">Slider + Broken grid  <span class="badge badge-warning ml-1">New</span>   </a></li>
                          </ul>
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Shop</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a href="category.html" class="megamenu-list-link">Category - left sidebar   </a></li>
                            <li class="megamenu-list-item"><a href="category-right.html" class="megamenu-list-link">Category - right sidebar   </a></li>
                            <li class="megamenu-list-item"><a href="category-no-sidebar.html" class="megamenu-list-link">Category - no sidebar   </a></li>
                            <li class="megamenu-list-item"><a href="category-full.html" class="megamenu-list-link">Category - full width   </a></li>
                            <li class="megamenu-list-item"><a href="category-masonry.html" class="megamenu-list-link">Category - masonry items   </a></li>
                            <li class="megamenu-list-item"><a href="category-banner.html" class="megamenu-list-link">Category - w/ banner   </a></li>
                            <li class="megamenu-list-item"><a href="detail.html" class="megamenu-list-link">Product detail   </a></li>
                            <li class="megamenu-list-item"><a href="detail-2.html" class="megamenu-list-link">Product detail - v.2   </a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3">
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Order process</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a href="cart.html" class="megamenu-list-link">Shopping cart   </a></li>
                            <li class="megamenu-list-item"><a href="cart-2.html" class="megamenu-list-link">Shopping cart - v. 2 <span class="badge badge-warning ml-1">New</span>   </a></li>
                            <li class="megamenu-list-item"><a href="checkout1.html" class="megamenu-list-link">Checkout 1 - Address   </a></li>
                            <li class="megamenu-list-item"><a href="checkout2.html" class="megamenu-list-link">Checkout 2 - Delivery   </a></li>
                            <li class="megamenu-list-item"><a href="checkout3.html" class="megamenu-list-link">Checkout 3 - Payment   </a></li>
                            <li class="megamenu-list-item"><a href="checkout4.html" class="megamenu-list-link">Checkout 4 - Review     </a></li>
                            <li class="megamenu-list-item"><a href="checkout5.html" class="megamenu-list-link">Checkout 5 - Confirmation   </a></li>
                          </ul>
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Blog</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a href="blog.html" class="megamenu-list-link">Blog   </a></li>
                            <li class="megamenu-list-item"><a href="post.html" class="megamenu-list-link">Post   </a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3">
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Pages</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a href="about.html" class="megamenu-list-link">About us <span class="badge badge-warning ml-1">New</span>   </a></li>
                            <li class="megamenu-list-item"><a href="about-2.html" class="megamenu-list-link">About us v.2 <span class="badge badge-warning ml-1">New</span>   </a></li>
                            <li class="megamenu-list-item"><a href="contact.html" class="megamenu-list-link">Contact   </a></li>
                            <li class="megamenu-list-item"><a href="contact-2.html" class="megamenu-list-link">Contact v.2   </a></li>
                            <li class="megamenu-list-item"><a href="text.html" class="megamenu-list-link">Text page   </a></li>
                            <li class="megamenu-list-item"><a href="faq.html" class="megamenu-list-link">F.A.Q.s   </a></li>
                            <li class="megamenu-list-item"><a href="coming-soon.html" class="megamenu-list-link">Coming soon   </a></li>
                          </ul>
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Customer</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a href="customer-login.html" class="megamenu-list-link">Login/sign up   </a></li>
                            <li class="megamenu-list-item"><a href="customer-orders.html" class="megamenu-list-link">Orders   </a></li>
                            <li class="megamenu-list-item"><a href="customer-order.html" class="megamenu-list-link">Order detail   </a></li>
                            <li class="megamenu-list-item"><a href="customer-addresses.html" class="megamenu-list-link">Addresses   </a></li>
                            <li class="megamenu-list-item"><a href="customer-account.html" class="megamenu-list-link">Profile   </a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3">
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Documentation</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a href="docs/docs-introduction.html" class="megamenu-list-link">Introduction   </a></li>
                            <li class="megamenu-list-item"><a href="docs/docs-directory-structure.html" class="megamenu-list-link">Directory structure   </a></li>
                            <li class="megamenu-list-item"><a href="docs/docs-gulp.html" class="megamenu-list-link">Gulp   </a></li>
                            <li class="megamenu-list-item"><a href="docs/docs-customizing-css.html" class="megamenu-list-link">Customizing CSS   </a></li>
                            <li class="megamenu-list-item"><a href="docs/docs-credits.html" class="megamenu-list-link">Credits   </a></li>
                            <li class="megamenu-list-item"><a href="docs/docs-changelog.html" class="megamenu-list-link">Changelog   </a></li>
                          </ul>
                          <!-- Megamenu list-->
                          <h6 class="text-uppercase">Components</h6>
                          <ul class="megamenu-list list-unstyled">
                            <li class="megamenu-list-item"><a href="docs/components-bootstrap.html" class="megamenu-list-link">Bootstrap   </a></li>
                            <li class="megamenu-list-item"><a href="docs/components-sell.html" class="megamenu-list-link">Theme   </a></li>
                            <li class="megamenu-list-item"><a href="component-variants/header.html" class="megamenu-list-link">Header variants <span class="badge badge-warning ml-1">New</span>   </a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="row megamenu-services d-none d-lg-flex">
                        <div class="col-xl-3 col-lg-6 d-flex">
                          <div class="megamenu-services-item">
                            <svg class="svg-icon megamenu-services-icon">
                              <use xlink:href="#delivery-time-1"> </use>
                            </svg>
                            <div>
                              <h6 class="text-uppercase">Free shipping &amp; return</h6>
                              <p class="mb-0 text-muted text-sm">Free Shipping over $300</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 d-flex">
                          <div class="megamenu-services-item">
                            <svg class="svg-icon megamenu-services-icon">
                              <use xlink:href="#money-1"> </use>
                            </svg>
                            <div>
                              <h6 class="text-uppercase">Money back guarantee</h6>
                              <p class="mb-0 text-muted text-sm">30 Days Money Back</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 d-flex">
                          <div class="megamenu-services-item">
                            <svg class="svg-icon megamenu-services-icon">
                              <use xlink:href="#customer-support-1"> </use>
                            </svg>
                            <div>
                              <h6 class="text-uppercase">020-800-456-747</h6>
                              <p class="mb-0 text-muted text-sm">24/7 Available Support</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 d-flex">
                          <div class="megamenu-services-item">
                            <svg class="svg-icon megamenu-services-icon">
                              <use xlink:href="#secure-payment-1"> </use>
                            </svg>
                            <div>
                              <h6 class="text-uppercase">Secure Payment</h6>
                              <p class="mb-0 text-muted text-sm">Secure Payment</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block"><img src="img/megamenu.jpg" alt="" class="bg-image"></div>
                  </div>
                </div>
              </li>
              <!-- /Megamenu end-->
              <!-- Multi level dropdown    -->
              <li class="nav-item dropdown"><a id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Dropdown<i class="fa fa-angle-down"></i></a>
                <ul aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">
                  <li><a href="#" class="dropdown-item">Action</a></li>
                  <li><a href="#" class="dropdown-item">Another action</a></li>
                  <li class="dropdown-submenu"><a id="navbarDropdownMenuLink2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item">Dropdown link<i class="fa fa-angle-down ml-2"></i></a>
                    <ul aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu">
                      <li><a href="#" class="dropdown-item">Action</a></li>
                      <li class="dropdown-submenu"><a id="navbarDropdownMenuLink3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item">
                           
                          Another action<i class="fa fa-angle-down ml-2"></i></a>
                        <ul aria-labelledby="navbarDropdownMenuLink3" class="dropdown-menu">
                          <li><a href="#" class="dropdown-item">Action</a></li>
                          <li><a href="#" class="dropdown-item">Action</a></li>
                          <li><a href="#" class="dropdown-item">Action</a></li>
                          <li><a href="#" class="dropdown-item">Action</a></li>
                        </ul>
                      </li>
                      <li><a href="#" class="dropdown-item">Something else here</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- Multi level dropdown end-->
              <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a>
              </li>
              <li class="nav-item dropdown"><a id="docsDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link ">Docs<i class="fa fa-angle-down"></i></a>
                <div aria-labelledby="docsDropdownMenuLink" class="dropdown-menu dropdown-menu-right">
                  <h6 class="dropdown-header font-weight-normal">Documentation</h6><a href="docs/docs-introduction.html" class="dropdown-item">Introduction </a><a href="docs/docs-directory-structure.html" class="dropdown-item">Directory structure </a><a href="docs/docs-gulp.html" class="dropdown-item">Gulp </a><a href="docs/docs-customizing-css.html" class="dropdown-item">Customizing CSS </a><a href="docs/docs-credits.html" class="dropdown-item">Credits </a><a href="docs/docs-changelog.html" class="dropdown-item">Changelog </a>
                  <div class="dropdown-divider"></div>
                  <h6 class="dropdown-header font-weight-normal">Components</h6><a href="docs/components-bootstrap.html" class="dropdown-item">Bootstrap </a><a href="docs/components-sell.html" class="dropdown-item">Theme </a><a href="component-variants/header.html" class="dropdown-item">Header variants <span class="badge badge-warning ml-1">New</span> </a>
                </div>
              </li>
            </ul>
            <div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
              <!-- Search Button-->
              <div data-toggle="search" class="nav-item navbar-icon-link">
                <svg class="svg-icon">
                  <use xlink:href="#search-1"> </use>
                </svg>
              </div>
              <!-- User Not Logged - link to login page-->
              <div class="nav-item"><a href="customer-login.html" class="navbar-icon-link">
                  <svg class="svg-icon">
                    <use xlink:href="#male-user-1"> </use>
                  </svg><span class="text-sm ml-2 ml-lg-0 text-uppercase text-sm font-weight-bold d-none d-sm-inline d-lg-none">Log in    </span></a></div>
              <!-- Cart Dropdown-->
              <div class="nav-item dropdown"><a href="cart.html" class="navbar-icon-link d-lg-none"> 
                  <svg class="svg-icon">
                    <use xlink:href="#cart-1"> </use>
                  </svg><span class="text-sm ml-2 ml-lg-0 text-uppercase text-sm font-weight-bold d-none d-sm-inline d-lg-none">View cart</span></a>
                <div class="d-none d-lg-block"><a id="cartdetails" href="cart.html" data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="navbar-icon-link dropdown-toggle">
                    <svg class="svg-icon">
                      <use xlink:href="#cart-1"> </use>
                    </svg>
                    <div class="navbar-icon-link-badge">3                         </div></a>
                  <div aria-labelledby="cartdetails" class="dropdown-menu dropdown-menu-right p-4">
                    <div class="navbar-cart-product-wrapper">
                      <!-- cart item-->
                      <div class="navbar-cart-product"> 
                        <div class="d-flex align-items-center"><a href="detail.html"><img src="img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..." class="img-fluid navbar-cart-product-image"></a>
                          <div class="w-100"><a href="#" class="close text-sm mr-2"><i class="fa fa-times">                                                   </i></a>
                            <div class="pl-3"> <a href="detail.html" class="navbar-cart-product-link">Skull Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00 </strong></div>
                          </div>
                        </div>
                      </div>
                      <!-- cart item-->
                      <div class="navbar-cart-product"> 
                        <div class="d-flex align-items-center"><a href="detail.html"><img src="img/product/product-square-kyle-loftus-596319-unsplash.jpg" alt="..." class="img-fluid navbar-cart-product-image"></a>
                          <div class="w-100"><a href="#" class="close text-sm mr-2"><i class="fa fa-times">                                                   </i></a>
                            <div class="pl-3"> <a href="detail.html" class="navbar-cart-product-link">Transparent Blouse</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00 </strong></div>
                          </div>
                        </div>
                      </div>
                      <!-- cart item-->
                      <div class="navbar-cart-product"> 
                        <div class="d-flex align-items-center"><a href="detail.html"><img src="img/product/product-square-serrah-galos-494312-unsplash.jpg" alt="..." class="img-fluid navbar-cart-product-image"></a>
                          <div class="w-100"><a href="#" class="close text-sm mr-2"><i class="fa fa-times">                                                   </i></a>
                            <div class="pl-3"> <a href="detail.html" class="navbar-cart-product-link">White Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00 </strong></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- total price-->
                    <div class="navbar-cart-total"><span class="text-uppercase text-muted">Total</span><strong class="text-uppercase">$75.00</strong></div>
                    <!-- buttons-->
                    <div class="d-flex justify-content-between"><a href="cart.html" class="btn btn-link text-dark mr-3">View Cart <i class="fa-arrow-right fa"></i></a><a href="checkout1.html" class="btn btn-outline-dark">Checkout</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- /Navbar -->
      
      <!-- Fullscreen search area-->
      <div class="search-area-wrapper">
        <div class="search-area d-flex align-items-center justify-content-center">
          <div class="close-btn">
            <svg class="svg-icon svg-icon-light w-3rem h-3rem">
              <use xlink:href="#close-1"> </use>
            </svg>
          </div>
          <form action="#" class="search-area-form">
            <div class="form-group position-relative">
              <input type="search" name="search" id="search" placeholder="What are you looking for?" class="search-area-input">
              <button type="submit" class="search-area-button">
                <svg class="svg-icon">
                  <use xlink:href="#search-1"> </use>
                </svg>
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- /Fullscreen search area-->
      
    </header>
    <section class="position-relative py-6 mb-30px"><img src="img/photo/matese-fields-233175-unsplash.jpg" alt="" class="bg-image">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="bg-white p-5"><strong class="text-uppercase text-muted d-inline-block mb-2 text-sm">Featured</strong>
              <h2 class="mb-3">Fashion, purpose & freedom</h2>
              <p class="text-muted">As am hastily invited settled at limited civilly fortune me. Really spring in extent an by. Judge but built party world. Of so am he remember although required. Bachelor unpacked be advanced at. Confined in declared marianne is vicinity</p><a href="post.html" class="btn btn-link text-dark p-0">Continue reading <i class="fa fa-long-arrow-alt-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <!-- post-->
          <div class="col-lg-4 col-6">
            <div class="mb-30px"><a href="post.html"><img src="img/photo/kyle-loftus-596319-unsplash.jpg" alt="..." class="img-fluid"></a>
              <div class="mt-3"><small class="text-uppercase text-muted">Fashion and style </small>
                <h5 class="my-2"><a href="post.html" class="text-dark">Pellentesque habitant morbi          </a></h5>
                <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2016</p>
                <p class="my-2 text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Aenean ultricies mi vitae est. </p><a href="post.html" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
              </div>
            </div>
          </div>
          <!-- /post end-->
          
          
          <!-- post-->
          <div class="col-lg-4 col-6">
            <div class="mb-30px"><a href="post.html"><img src="img/photo/marion-michele-330691-unsplash.jpg" alt="..." class="img-fluid"></a>
              <div class="mt-3"><small class="text-uppercase text-muted">Fashion and style </small>
                <h5 class="my-2"><a href="post.html" class="text-dark">Best books about Fashion          </a></h5>
                <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2016</p>
                <p class="my-2 text-muted">Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.  Mauris placerat eleifend leo.</p><a href="post.html" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
              </div>
            </div>
          </div>
          <!-- /post end-->
          
          
          <!-- post-->
          <div class="col-lg-4 col-6">
            <div class="mb-30px"><a href="post.html"><img src="img/photo/kyle-loftus-589739-unsplash-cropped.jpg" alt="..." class="img-fluid"></a>
              <div class="mt-3"><small class="text-uppercase text-muted">Fashion and style </small>
                <h5 class="my-2"><a href="post.html" class="text-dark">Best books about Fashion          </a></h5>
                <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2016</p>
                <p class="my-2 text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.  Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p><a href="post.html" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
              </div>
            </div>
          </div>
          <!-- /post end-->
          
          
          <!-- post-->
          <div class="col-lg-4 col-6">
            <div class="mb-30px"><a href="post.html"><img src="img/photo/kyle-loftus-589739-unsplash-cropped.jpg" alt="..." class="img-fluid"></a>
              <div class="mt-3"><small class="text-uppercase text-muted">Fashion and style </small>
                <h5 class="my-2"><a href="post.html" class="text-dark">Autumn fashion tips and tricks          </a></h5>
                <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2016</p>
                <p class="my-2 text-muted">Pellentesque habitant morbi tristique senectus. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.  Mauris placerat eleifend leo.</p><a href="post.html" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
              </div>
            </div>
          </div>
          <!-- /post end-->
          
          
          <!-- post-->
          <div class="col-lg-4 col-6">
            <div class="mb-30px"><a href="post.html"><img src="img/photo/averie-woodard-319832-unsplash.jpg" alt="..." class="img-fluid"></a>
              <div class="mt-3"><small class="text-uppercase text-muted">Fashion and style </small>
                <h5 class="my-2"><a href="post.html" class="text-dark">Newest photo apps          </a></h5>
                <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2016</p>
                <p class="my-2 text-muted">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Aenean ultricies mi vitae est. </p><a href="post.html" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
              </div>
            </div>
          </div>
          <!-- /post end-->
          
          
          <!-- post-->
          <div class="col-lg-4 col-6">
            <div class="mb-30px"><a href="post.html"><img src="img/photo/alex-holyoake-571682-unsplash-cropped.jpg" alt="..." class="img-fluid"></a>
              <div class="mt-3"><small class="text-uppercase text-muted">Fashion and style </small>
                <h5 class="my-2"><a href="post.html" class="text-dark">Best books about Photography          </a></h5>
                <p class="text-gray-500 text-sm my-3"><i class="far fa-clock mr-2"></i>January 16, 2016</p>
                <p class="my-2 text-muted">Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.  Mauris placerat eleifend leo.</p><a href="post.html" class="btn btn-link text-gray-700 pl-0">Read more<i class="fa fa-long-arrow-alt-right ml-2"></i></a>
              </div>
            </div>
          </div>
          <!-- /post end-->
          
          
        </div>
        <!-- Pagination -->
        <nav aria-label="Blog pagination">
          <ul class="pagination justify-content-between mb-5">
            <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-chevron-left mr-1"></i>Older posts</a></li>
            <li class="page-item disabled"><a href="#" tabindex="-1" class="page-link">Newer posts  <i class="fa fa-chevron-right ml-1">                            </i></a></li>
          </ul>
        </nav>
      </div>
    </section>
    <!-- Footer-->
    <footer class="main-footer">
      <!-- Services block-->
      <div class="bg-gray-100 text-dark-700 py-6">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#delivery-time-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-uppercase">Free shipping &amp; return</h6>
                <p class="text-muted font-weight-light text-sm mb-0">Free Shipping over $300</p>
              </div>
            </div>
            <div class="col-lg-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#money-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-uppercase">Money back guarantee</h6>
                <p class="text-muted font-weight-light text-sm mb-0">30 Days Money Back Guarantee</p>
              </div>
            </div>
            <div class="col-lg-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#customer-support-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-uppercase">020-800-456-747</h6>
                <p class="text-muted font-weight-light text-sm mb-0">24/7 Available Support</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main block - menus, subscribe form-->
      <div class="py-6 bg-gray-300 text-muted"> 
        <div class="container">
          <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
              <div class="font-weight-bold text-uppercase text-lg text-dark mb-3">Sell<span class="text-primary">.</span></div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
              <ul class="list-inline">
                <li class="list-inline-item"><a href="#" target="_blank" title="twitter" class="text-muted text-hover-primary"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="facebook" class="text-muted text-hover-primary"><i class="fab fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="instagram" class="text-muted text-hover-primary"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="pinterest" class="text-muted text-hover-primary"><i class="fab fa-pinterest"></i></a></li>
                <li class="list-inline-item"><a href="#" target="_blank" title="vimeo" class="text-muted text-hover-primary"><i class="fab fa-vimeo"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
              <h6 class="text-uppercase text-dark mb-3">Shop</h6>
              <ul class="list-unstyled">
                <li> <a href="#" class="text-muted">For Women</a></li>
                <li> <a href="#" class="text-muted">For Men</a></li>
                <li> <a href="#" class="text-muted">Stores</a></li>
                <li> <a href="#" class="text-muted">Our Blog</a></li>
                <li> <a href="#" class="text-muted">Shop</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
              <h6 class="text-uppercase text-dark mb-3">Company</h6>
              <ul class="list-unstyled">
                <li> <a href="#" class="text-muted">Login                    </a></li>
                <li> <a href="#" class="text-muted">Register                    </a></li>
                <li> <a href="#" class="text-muted">Wishlist                    </a></li>
                <li> <a href="#" class="text-muted">Our Products                    </a></li>
                <li> <a href="#" class="text-muted">Checkouts                    </a></li>
              </ul>
            </div>
            <div class="col-lg-4">
              <h6 class="text-uppercase text-dark mb-3">Daily Offers & Discounts</h6>
              <p class="mb-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
              <form action="#" id="newsletter-form">
                <div class="input-group mb-3">
                  <input type="email" placeholder="Your Email Address" aria-label="Your Email Address" class="form-control bg-transparent border-secondary border-right-0">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-secondary border-left-0"> <i class="fa fa-paper-plane text-lg text-dark"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright section of the footer-->
      <div class="py-4 font-weight-light bg-gray-800 text-gray-300">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-left">
              <p class="mb-md-0">&copy; 2018 Your company.  All rights reserved.</p>
            </div>
            <div class="col-md-6">
              <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-right">
                <li class="list-inline-item"><img src="img/visa.svg" alt="..." class="w-2rem"></li>
                <li class="list-inline-item"><img src="img/mastercard.svg" alt="..." class="w-2rem"></li>
                <li class="list-inline-item"><img src="img/paypal.svg" alt="..." class="w-2rem"></li>
                <li class="list-inline-item"><img src="img/western-union.svg" alt="..." class="w-2rem"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer end-->
    <div id="scrollTop"><i class="fa fa-long-arrow-alt-up"></i></div>
    <!-- JavaScript files-->
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to Bootstrapious website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://demo.bootstrapious.com/sell/1-2-0/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- jQuery-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JavaScript Bundle (Popper.js included)-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Owl Carousel-->
    <script src="vendor/owl.carousel/owl.carousel.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <!-- NoUI Slider (price slider)-->
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <!-- Smooth scrolling-->
    <script src="vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Lightbox -->
    <script src="vendor/ekko-lightbox/ekko-lightbox.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="vendor/object-fit-images/ofi.min.js"></script>
    <script>
      var basePath = ''
      
    </script>
    <script src="js/theme.js"></script>
  </body>
</html>