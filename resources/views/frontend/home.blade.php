@extends('frontend.layout.master')

@section('title')
Home -Page
@endsection()

@section('styles')
<link rel="stylesheet" href="{{asset('frontend/css/home-page-style.css')}}">
@endsection()

@section('content')
<div id="demo" class="carousel slide bg-dark pt-5" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('frontend/banner/computer.png')}}" alt="Los Angeles" class="w-90 d-block mx-auto"  height="550">
      <div class="carousel-caption">
        <h3>Computer</h3>
        <p>I love Nice Computer</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontend/banner/mause1.png')}}" alt="Chicago" class="w-90 d-block mx-auto"  height="550">
      <div class="carousel-caption">
        <h3>Mause</h3>
        <p>Thank you, Mause!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontend/banner/mause2.png')}}" alt="New York" class="w-90 d-block mx-auto"  height="550">
      <div class="carousel-caption">
        <h3>Big Mause</h3>
        <p>We love the Big Mause!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- ======= Collaction Items ======= -->
<div class="jumbotron jumbotron-fluid bg-white">
  <div class="container">
    <div class="contenedor text-center">
     <h1 class="text-center text-dark">Product Category</h1>
     <h6>Category description lorem ipsum</h6>
     <div class="container text-center mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container_foto ">
         <div class="ver_mas text-center">
          <span  class="lnr lnr-eye"></span>
        </div>
        <article class="text-left">
          <h2>TÍTULO DE <br>LA IMAGEN</h2>
          <h4>Descripción corta de la imagen en cuestión</h4>
        </article>
        <img src="{{asset('products_img/product.jpg')}}" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container_foto">
       <div class="ver_mas text-center">
        <span id="click" class="lnr lnr-eye"></span>
      </div>
      <article class="text-left">
        <h2>TÍTULO DE <br>LA IMAGEN</h2>
        <h4>Descripción corta de la imagen en cuestión</h4>
      </article>
      <img src="{{asset('products_img/product.jpg')}}" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container_foto">
     <div class="ver_mas text-center">
      <span class="lnr lnr-eye"></span>
    </div>
    <article class="text-left">
      <h2>TÍTULO DE <br>LA IMAGEN</h2>
      <h4>Descripción corta de la imagen en cuestión</h4>
    </article>
    <img src="{{asset('products_img/product.jpg')}}" alt="">
  </div>
</div>
</div>
</div>
</div>
</div>

<div class="mt-5 mb-5 pt-5"></div>

<div class="jumbotron jumbotron-fluid mb-0 mt-0">
  <div class="container">
    <div class="text-center text-dark">
     <h1>Product card</h1>
     <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, natus minima a</h6>
   </div>
   <div class="shell">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="wsk-cp-product">
            <div class="wsk-cp-img">
              <img src="{{asset('products_img/product.jpg')}}" class="img-responsive" alt="">
            </div>
            <div class="wsk-cp-text">
              <div class="category">
                <span>Ethnic</span>
              </div>
              <div class="title-product">
                <h3>My face not my heart</h3>
              </div>
              <div class="description-prod">
                <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
              </div>
              <div class="card-footer">
                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="wsk-cp-product">
            <div class="wsk-cp-img">
              <img src="{{asset('products_img/product.jpg')}}" class="img-responsive" alt="">
            </div>
            <div class="wsk-cp-text">
              <div class="category">
                <span>Introvert</span>
              </div>
              <div class="title-product">
                <h3>My face not my heart</h3>
              </div>
              <div class="description-prod">
                <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
              </div>
              <div class="card-footer">
                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="wsk-cp-product">
            <div class="wsk-cp-img"><<img src="{{asset('products_img/product.jpg')}}" class="img-responsive" alt=""></div>
            <div class="wsk-cp-text">
              <div class="category">
                <span>Beauty</span>
              </div>
              <div class="title-product">
                <h3>My face not my heart</h3>
              </div>
              <div class="description-prod">
                <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
              </div>
              <div class="card-footer">
                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="wsk-cp-product">
            <div class="wsk-cp-img"><img src="{{asset('products_img/product.jpg')}}" class="img-responsive" alt=""></div>
            <div class="wsk-cp-text">
              <div class="category">
                <span>Drama</span>
              </div>
              <div class="title-product">
                <h3>My face not my heart cvf ggf gfg g</h3>
              </div>
              <div class="description-prod">
                <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
              </div>
              <div class="card-footer">
                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="wsk-cp-product">
            <div class="wsk-cp-img">
              <img src="{{asset('products_img/product.jpg')}}" class="img-responsive" alt="">
            </div>
            <div class="wsk-cp-text">
              <div class="category">
                <span>Ethnic</span>
              </div>
              <div class="title-product">
                <h3>My face not my heart</h3>
              </div>
              <div class="description-prod">
                <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
              </div>
              <div class="card-footer">
                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="wsk-cp-product">
            <div class="wsk-cp-img"><img src="{{asset('products_img/product.jpg')}}" class="img-responsive" alt=""></div>
            <div class="wsk-cp-text">
              <div class="category">
                <span>Introvert</span>
              </div>
              <div class="title-product">
                <h3>My face not my heart</h3>
              </div>
              <div class="description-prod">
                <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
              </div>
              <div class="card-footer">
                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="wsk-cp-product">
            <div class="wsk-cp-img"><img src="{{asset('products_img/product.jpg')}}" class="img-responsive" alt=""></div>
            <div class="wsk-cp-text">
              <div class="category">
                <span>Beauty</span>
              </div>
              <div class="title-product">
                <h3>My face not my heart</h3>
              </div>
              <div class="description-prod">
                <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
              </div>
              <div class="card-footer">
                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="wsk-cp-product">
            <div class="wsk-cp-img"><img src="{{asset('products_img/product.jpg')}}" class="img-responsive" alt=""></div>
            <div class="wsk-cp-text">
              <div class="category">
                <span>Drama</span>
              </div>
              <div class="title-product">
                <h3>My face not my heart cvf ggf gfg g</h3>
              </div>
              <div class="description-prod">
                <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
              </div>
              <div class="card-footer">
                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<!-- ===========Daily deals ==============-->
<div class="jumbotron jumbotron-fluid bg-light mb-0 mt-0">
  <div class="container">
    <div class="text-center">
      <h2>New Product</h2>
      <h6>Lorem ipsum dolor sitlibero eum facere nisi porro pariatur.</h6>
    </div>

    <div class="shell">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="wsk-cp-product">
              <div class="wsk-cp-img">
                <img src="{{asset('products_img/product.jpg')}}" class="img-responsive" alt="">
              </div>
              <div class="wsk-cp-text">
                <div class="category">
                  <span>Ethnic</span>
                </div>
                <div class="title-product">
                  <h3>My face not my heart</h3>
                </div>
                <div class="description-prod">
                  <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                </div>
                <div class="card-footer">
                  <div class="wcf-left"><span class="price">Rp500.000</span></div>
                  <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="wsk-cp-product">
              <div class="wsk-cp-img"><img src="{{asset('products_img/product.jpg')}}" class="img-responsive" alt=""></div>
              <div class="wsk-cp-text">
                <div class="category">
                  <span>Introvert</span>
                </div>
                <div class="title-product">
                  <h3>My face not my heart</h3>
                </div>
                <div class="description-prod">
                  <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                </div>
                <div class="card-footer">
                  <div class="wcf-left"><span class="price">Rp500.000</span></div>
                  <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="wsk-cp-product">
              <div class="wsk-cp-img"><img src="{{asset('products_img/product.jpg')}}" class="img-responsive" alt=""></div>
              <div class="wsk-cp-text">
                <div class="category">
                  <span>Beauty</span>
                </div>
                <div class="title-product">
                  <h3>My face not my heart</h3>
                </div>
                <div class="description-prod">
                  <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                </div>
                <div class="card-footer">
                  <div class="wcf-left"><span class="price">Rp500.000</span></div>
                  <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="wsk-cp-product">
              <div class="wsk-cp-img"><img src="{{asset('products_img/product.jpg')}}" class="img-responsive" alt=""></div>
              <div class="wsk-cp-text">
                <div class="category">
                  <span>Drama</span>
                </div>
                <div class="title-product">
                  <h3>My face not my heart cvf ggf gfg g</h3>
                </div>
                <div class="description-prod">
                  <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
                </div>
                <div class="card-footer">
                  <div class="wcf-left"><span class="price">Rp500.000</span></div>
                  <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="wsk-cp-product">
              <div class="wsk-cp-img">
               <img src="{{asset('products_img/product.jpg')}}" class="img-responsive" alt="">
             </div>
             <div class="wsk-cp-text">
              <div class="category">
                <span>Ethnic</span>
              </div>
              <div class="title-product">
                <h3>My face not my heart</h3>
              </div>
              <div class="description-prod">
                <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
              </div>
              <div class="card-footer">
                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="wsk-cp-product">
            <div class="wsk-cp-img"><img src="{{asset('products_img/product.jpg')}}" class="img-responsive" alt=""></div>
            <div class="wsk-cp-text">
              <div class="category">
                <span>Introvert</span>
              </div>
              <div class="title-product">
                <h3>My face not my heart</h3>
              </div>
              <div class="description-prod">
                <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
              </div>
              <div class="card-footer">
                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="wsk-cp-product">
            <div class="wsk-cp-img"><img src="{{asset('products_img/product.jpg')}}" class="img-responsive" alt=""></div>
            <div class="wsk-cp-text">
              <div class="category">
                <span>Beauty</span>
              </div>
              <div class="title-product">
                <h3>My face not my heart</h3>
              </div>
              <div class="description-prod">
                <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
              </div>
              <div class="card-footer">
                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="wsk-cp-product">
            <div class="wsk-cp-img"><img src="{{asset('products_img/product.jpg')}}" class="img-responsive" alt=""></div>
            <div class="wsk-cp-text">
              <div class="category">
                <span>Drama</span>
              </div>
              <div class="title-product">
                <h3>My face not my heart cvf ggf gfg g</h3>
              </div>
              <div class="description-prod">
                <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
              </div>
              <div class="card-footer">
                <div class="wcf-left"><span class="price">Rp500.000</span></div>
                <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection()

@section('scripts')

@endsection()