<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TacWipes</title>
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
    <div class="mh-full-screen d-flex align-items-center dark-overlay">
{{--       <img src="img2/can_black_white_v2.png" class="bg-image"> --}}
      <picture>
        <source srcset="img2/can_black_white_v2.png" media="(min-width: 500px)" class="bg-image">
        <img src="img2/can_black_white_v2_cropped.png" class="bg-image">
      </picture>
      <div class="container-fluid text-white text-center text-lg overlay-content py-6 py-lg-0">
        <div class="row">
          <div class="col-9 mx-auto">
            <h1 class="text-hide mx-auto mb-4">Coming soon<img src="img/coming-soon.png" class="img-fluid"></h1>
            <h2 class="mb-3 mx-auto" style="font-family: impact; font-style: italic">TACWIPES</h2>
            <h3 class="mb-4 font-weight-normal mx-auto">Tactical field wipes for the warfighter.</h3>
            <h5 class="mb-2 font-weight-normal mx-auto">Our newsletter has latest info and deals!</h4>
          </div>
        </div>

        <div class="row mx-auto">            
          <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark mb-5" data-toggle="modal" data-target="#exampleModalCenter">
              Sign up for the Newsletter
            </button> 


          </div>
        </div>

        <p class="mb-4"><i class="fas fa-map-marker-alt mr-2"></i>Denver, CO</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#" target="_blank" title="twitter" class="text-white"><i class="fab fa-twitter">           </i></a></li>
          <li class="list-inline-item"><a href="#" target="_blank" title="facebook" class="text-white"><i class="fab fa-facebook">           </i></a></li>
          <li class="list-inline-item"><a href="#" target="_blank" title="instagram" class="text-white"><i class="fab fa-instagram">           </i></a></li>
          <li class="list-inline-item"><a href="#" target="_blank" title="pinterest" class="text-white"><i class="fab fa-pinterest">           </i></a></li>
          <li class="list-inline-item"><a href="#" target="_blank" title="vimeo" class="text-white"><i class="fab fa-vimeo">           </i></a></li>
        </ul>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <form method="POST" action="/">
          {{ csrf_field() }}
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Join the List</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">First name</label>
                  <input class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-dark">Join Now!</button>
              <small class="form-text text-muted display-block">Zero spam.  Unsubscribe at any time.</small>
            </div>
          </div>
        </form>
      </div>

    </div>




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