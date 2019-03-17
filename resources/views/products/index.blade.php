@extends ('layouts.master')

@section ('content')


    <div class="card m-5 text-center">
        <div class="card-body">
            <div class="row">
                <div class="col">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#444"/></svg>
                      </div>
                      <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#444"/></svg>
                      </div>
                      
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

                    
                </div>
                <div class="col">
                    <div class="row text-center">
                        <div class="col product-title">
                            TACWIPES <em>CAN</em> <i class="far fa-copyright"></i>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col price">
                            $9.95
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card m-5 text-center">
        <div class="card-body">
            <div class="row">
                <div class="col">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#444"/></svg>
                      </div>
                      <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#444"/></svg>
                      </div>
                      
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

                    
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col product-title">
                            TACWIPES <em>POUCH</em> <i class="far fa-copyright"></i>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col price">
                            $4.95
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
