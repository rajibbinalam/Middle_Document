<?php

use App\Models\WormSlider;
use App\Models\Category;
use App\Models\City;

$worm = WormSlider::wormSlider();
$categories = Category::all();
$cities = City::all();
// dd($worm);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>{{$gs->website_name}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Front style -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link id="callCss" rel="stylesheet" href="{{asset('assets/frontend')}}/themes/css/front.min.css" media="screen" />
  <link href="{{asset('assets/frontend')}}/themes/css/base.css" rel="stylesheet" media="screen" />


  <!-- Front style responsive -->
  <link href="{{asset('assets/frontend')}}/themes/css/front-responsive.min.css" rel="stylesheet" />
  <link href="{{asset('assets/frontend')}}/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/frontend')}}/themes/css/base1.css" rel="stylesheet" media="screen" />
  <!-- Google-code-prettify -->
  <link href="{{asset('assets/frontend')}}/themes/js/google-code-prettify/prettify.css" rel="stylesheet" />

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="{{asset('assets/frontend')}}/themes/images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/frontend')}}/themes/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/frontend')}}/themes/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/frontend')}}/themes/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="{{asset('assets/frontend')}}/themes/images/ico/apple-touch-icon-57-precomposed.png">

  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />

  <style type="text/css" id="enject"></style>
  <style>
    /* The container */
    .containercheck {
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 22px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    /* Hide the browser's default checkbox */
    .containercheck input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 25px;
      width: 25px;
      background-color: #FFFFFF;
    }

    /* On mouse-over, add a grey background color */
    .containercheck:hover input~.checkmark {
      background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .containercheck input:checked~.checkmark {
      background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    /* Show the checkmark when checked */
    .containercheck input:checked~.checkmark:after {
      display: block;
    }

    /* Style the checkmark/indicator */
    .containercheck .checkmark:after {
      left: 9px;
      top: 5px;
      width: 5px;
      height: 10px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
    }




    /* Please ❤ this if you like it! */


    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap');

    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    .sec-center {
      position: relative;
      max-width: 100%;
      text-align: center;
      z-index: 200;
    }

    .dark-light:checked+label,
    .dark-light:not(:checked)+label {
      position: fixed;
      top: 40px;
      right: 40px;
      z-index: 20000;
      display: block;
      border-radius: 50%;
      width: 100px;
      height: 46px;
      cursor: pointer;
      transition: all 200ms linear;
      box-shadow: 0 0 25px rgba(255, 235, 167, .45);
    }

    .dark-light:checked+label {
      transform: rotate(360deg);
    }

    .dark-light:checked+label:after,
    .dark-light:not(:checked)+label:after {
      position: absolute;
      content: '';
      top: 1px;
      left: 1px;
      overflow: hidden;
      z-index: 2;
      display: block;
      border-radius: 50%;
      width: 44px;
      height: 44px;
      background-color: #102770;
      background-image: url('https://assets.codepen.io/1462889/moon.svg');
      background-size: 20px 20px;
      background-repeat: no-repeat;
      background-position: center;
      transition: all 200ms linear;
      opacity: 0;
    }

    .dark-light:checked+label:after {
      opacity: 1;
    }

    .dark-light:checked+label:before,
    .dark-light:not(:checked)+label:before {
      position: absolute;
      content: '';
      top: 0;
      left: 0;
      overflow: hidden;
      z-index: 1;
      display: block;
      border-radius: 50%;
      width: 46px;
      height: 46px;
      background-color: #48dbfb;
      background-image: url('https://assets.codepen.io/1462889/sun.svg');
      background-size: 25px 25px;
      background-repeat: no-repeat;
      background-position: center;
      transition: all 200ms linear;
    }

    .dark-light:checked+label:before {
      background-color: #000;
    }

    .light-back {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1;
      background-color: #fff;
      overflow: hidden;
      background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat-back.svg');
      background-position: center;
      background-repeat: repeat;
      background-size: 4%;
      height: 100%;
      width: 100%;
      transition: all 200ms linear;
      opacity: 0;
    }

    .dark-light:checked~.light-back {
      opacity: 1;
    }

    .dropdown:checked+label,
    .dropdown:not(:checked)+label {
      position: relative;
      font-family: 'Roboto', sans-serif;
      font-weight: 500;
      font-size: 15px;
      line-height: 2;
      height: 50px;
      transition: all 200ms linear;
      border-radius: 4px;
      width: 220px;
      letter-spacing: 1px;
      display: -webkit-inline-flex;
      display: -ms-inline-flexbox;
      display: inline-flex;
      -webkit-align-items: center;
      -moz-align-items: center;
      -ms-align-items: center;
      align-items: center;
      -webkit-justify-content: center;
      -moz-justify-content: center;
      -ms-justify-content: center;
      justify-content: center;
      -ms-flex-pack: center;
      text-align: center;
      border: none;

      cursor: pointer;
      color: #102770;
      box-shadow: 0 12px 35px 0 rgba(255, 235, 167, .15);
    }

    .dark-light:checked~.sec-center .for-dropdown {
      background-color: #102770;
      color: #ffeba7;
      box-shadow: 0 12px 35px 0 rgba(16, 39, 112, .25);
    }

    .dropdown:checked+label:before,
    .dropdown:not(:checked)+label:before {
      position: fixed;
      top: 0;
      left: 0;
      content: '';
      width: auto;
      height: 100%;
      z-index: -1;
      cursor: auto;
      pointer-events: none;
    }

    .dropdown:checked+label:before {
      pointer-events: auto;
    }

    .dropdown:not(:checked)+label .uil {
      font-size: 24px;
      margin-left: 10px;
      transition: transform 200ms linear;
    }

    .dropdown:checked+label .uil {
      transform: rotate(180deg);
      font-size: 24px;
      margin-left: 10px;
      transition: transform 200ms linear;
    }

    .section-dropdown {
      position: absolute;
      padding: 5px;
      background-color: #fff;
      top: 70px;
      left: 0;
      width: 100%;
      border-radius: 4px;
      display: block;
      box-shadow: 0 14px 35px 0 rgba(9, 9, 12, 0.4);
      z-index: 2;
      opacity: 0;
      pointer-events: none;
      transform: translateY(20px);
      transition: all 200ms linear;
    }

    .dark-light:checked~.sec-center .section-dropdown {
      background-color: #fff;
      box-shadow: 0 14px 35px 0 rgba(9, 9, 12, 0.15);
    }

    .dropdown:checked~.section-dropdown {
      opacity: 1;
      pointer-events: auto;
      transform: translateY(0);
    }

    .section-dropdown:before {
      position: absolute;
      top: -10px;
      left: 0;
      width: 100%;
      height: 20px;
      content: '';
      display: block;
      z-index: 1;
    }

    .section-dropdown:after {
      position: absolute;
      top: -7px;
      left: 30px;
      width: 0;
      height: 0;
      border-left: 8px solid transparent;
      border-right: 8px solid transparent;
      border-bottom: 8px solid #111;
      content: '';
      display: block;
      z-index: 2;
      transition: all 200ms linear;
    }

    .dark-light:checked~.sec-center .section-dropdown:after {
      border-bottom: 8px solid #fff;
    }

    .dm {
      position: relative;
      color: #102770;
      transition: all 200ms linear;
      font-family: 'Roboto', sans-serif;
      font-weight: 500;
      font-size: 15px;
      border-radius: 2px;
      padding: 5px 0;
      padding-left: 20px;
      padding-right: 15px;
      margin: 2px 0;
      text-align: left;
      text-decoration: none;
      display: -ms-flexbox;
      display: flex;
      -webkit-align-items: center;
      -moz-align-items: center;
      -ms-align-items: center;
      align-items: center;
      justify-content: space-between;
      -ms-flex-pack: distribute;
    }

    .dark-light:checked~.sec-center .section-dropdown a {
      color: #102770;
    }

    a:hover {
      color: #102770;
      background-color: #ffeba7;
    }

    .dark-light:checked~.sec-center .section-dropdown a:hover {
      color: #ffeba7;
      background-color: #102770;
    }

    a .uil {
      font-size: 22px;
    }

    .dropdown-sub:checked+label,
    .dropdown-sub:not(:checked)+label {
      position: relative;
      color: #102770;
      transition: all 200ms linear;
      font-family: 'Roboto', sans-serif;
      font-weight: 500;
      font-size: 15px;
      border-radius: 2px;
      padding: 5px 0;
      padding-left: 20px;
      padding-right: 15px;
      text-align: left;
      text-decoration: none;
      display: -ms-flexbox;
      display: flex;
      -webkit-align-items: center;
      -moz-align-items: center;
      -ms-align-items: center;
      align-items: center;
      justify-content: space-between;
      -ms-flex-pack: distribute;
      cursor: pointer;
    }

    .dropdown-sub:checked+label .uil,
    .dropdown-sub:not(:checked)+label .uil {
      font-size: 22px;
    }

    .dropdown-sub:not(:checked)+label .uil {
      transition: transform 200ms linear;
    }

    .dropdown-sub:checked+label .uil {
      transform: rotate(135deg);
      transition: transform 200ms linear;
    }

    .dropdown-sub:checked+label:hover,
    .dropdown-sub:not(:checked)+label:hover {
      color: #102770;
      background-color: #ffeba7;
    }

    .dark-light:checked~.sec-center .section-dropdown .for-dropdown-sub {
      color: #102770;
    }

    .dark-light:checked~.sec-center .section-dropdown .for-dropdown-sub:hover {
      color: #ffeba7;
      background-color: #102770;
    }

    .section-dropdown-sub {
      position: relative;
      display: block;
      width: 100%;
      pointer-events: none;
      opacity: 0;
      max-height: 0;
      padding-left: 10px;
      padding-right: 3px;
      overflow: hidden;
      transition: all 200ms linear;
    }

    .dropdown-sub:checked~.section-dropdown-sub {
      pointer-events: auto;
      opacity: 1;
      max-height: 999px;
    }

    .section-dropdown-sub a {
      font-size: 14px;
    }

    .section-dropdown-sub a .uil {
      font-size: 20px;
    }





 
  </style>


  @yield('css')
</head>

<body>

  <div id="header">
    <div class="container">
      <div class="row justify-content-md-center">
        <a href="{{url('/')}}" style="color: #9d1919;">
          <div class="col col-lg-2 span122">
            <img class="master-logo" style="" src="{{asset('assets/images/setting/'.$gs->site_logo)}}">
          </div>
        </a>

        <div class="col col-lg-2 span123">
          <div id="welcomeLine" class="row">

            <div class=" pull-right">

              Welcome, @if(empty(Auth::check()))

              <strong> Guest(<a href="{{route('user.register')}}">Register</a>| <a href="{{route('user.loginForm')}}">Login</a>)</strong>
              <a href="{{ url('auth/facebook') }}"><span class="btn btn-mini btn-primary"><i class="icon-facebook icon-white"></i> Login with facebook </span> </a>
              @else <a href="{{route('user.account')}}" class="btn btn-success">{{Auth::user()->f_name}} </a> @endif

            </div>
          </div>
          <!-- Navbar ================================================== -->
          <section id="navbar" style="margin-left: 0px;">
            <div class="nav-shadow"></div>
            <div class="navbar" style="display: inline-block;">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>

                  <!-- <span class="nav-circl"></span> -->
                  <div class="nav-collapse">
                    <ul class="nav">

                    </ul>

                    <ul class="nav pull-right ">

                      <!-- <li class="divider-vertical"></li> -->
                      <li><a href="{{url('/')}}">Home</a></li>
                      <li class="divider-vertical"></li>

                      <form class="navbar-search pull-left" action="{{route('front.search')}}" method="POST">
                        @csrf
                        <select class="js-example-basic-single search-query span2" name="category">
                          @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->cat_name}}</option>
                          @endforeach
                        </select>

                        <select class="js-example-basic-single search-query span2" name="city">
                          @foreach($cities as $city)
                          <option value="{{$city->id}}">{{$city->city_name}}</option>
                          @endforeach
                        </select>
                        <!-- <li><a href="{{route('front.search')}}">Serach</a></li> -->
                        <input type="submit" class="adv-srch" value="Search" style="background: transparent; border: none; color: white;">
                      </form>



                      <li class="divider-vertical"></li>
                      <li><a href="#" class="adv-srch">24 Hourse</a></li>

                      <li class="divider-vertical"></li>
                      <li><a href="#">Banner Ads</a></li>
                      <li class="divider-vertical"></li>
                      <li><a href="{{route('front.business.lisitng')}}">Business Listing</a></li>
                      <li class="divider-vertical"></li>
                      <li><a href="{{route('user.about_us')}}">About</a></li>
                      <li class="divider-vertical"></li>
                      <li><a href="{{route('user.help')}}">Help</a></li>
                    </ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div><!-- /navbar -->
          </section>
        </div>
      </div>


    </div>
  </div>
  <!-- Header End====================================================================== -->




  <!-- second body -->
  <div id="mainBody">
    <div class="container">
      <div class="row">
        <!-- Sidebar ================================================== -->
        <div id="sidebar" class="span33">

          <form class="navbar-search pull-left" action="{{route('front.navSearch')}}" method="POST">
            @csrf
            <input type="text" name="navSearch" class="search-query span2" placeholder="Search" />
            <button class="sbtn go-search">Go</button>
          </form>

        </div>
        <!-- Sidebar end=============================================== -->
        <div class="span9999">
          <div id="carouselBlk">


            <div id="myCarousel" class="carousel slide">
              <div class="carousel-inner">
                @foreach( $worm as $key => $value)
                <div class="item @if($key == 1) active @endif" style="">
                  @foreach($value as $row)
                  <a href="#"><img style="width:340px; height:100px" src="{{asset('assets/images/backend_images/worm/'.$row['worm_1_image'])}}" alt="special offers" /></a>
                  @endforeach

                </div>
                @endforeach



              </div>

            </div>
            <!-- End Carousel -->




            <!-- <div id="myCarousel" class="carousel slide">
					<div class="carousel-inner">

						<div class="item active">

						<div class="row">

							<div class="col-4"><a href="#"><img style="width:33%" src="{{asset('assets/frontend')}}/themes/images/carousel/1.png" alt="special offers" /></a></div>
						
						
							<div class="col-4"><a href="#"><img style="width:33%" src="{{asset('assets/frontend')}}/themes/images/carousel/2.png" alt="special offers"/></a></div>

						
							<div class="col-4"><a href="#"><img style="width:33%" src="{{asset('assets/frontend')}}/themes/images/carousel/3.png" alt="special offers" /></a>
							</div>

						</div>
						
						</div>


						<div class="item ">

						<div class="row">
							<div class="col-4"><a href="#"><img style="width:33%" src="{{asset('assets/frontend')}}/themes/images/carousel/1.png" alt="special offers" /></a></div>
						
							<div class="col-4"><a href="#"><img style="width:33%" src="{{asset('assets/frontend')}}/themes/images/carousel/2.png" alt="special offers" /></a></div>
						
							<div class="col-4"><a href="#"><img style="width:33%" src="{{asset('assets/frontend')}}/themes/images/carousel/3.png" alt="special offers" /></a></div>

						</div>
					</div>
				</div>
			</div> -->








          </div>

        </div>

      </div>
    </div>
  </div>

  <!-- second body -->

  @yield('content')
  <!-- Footer ================================================================== -->
  <div id="footerSection">
    <div class="container">
      <div class="row bg-footer">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="footer-manu span3">
            <!-- <h5>ACCOUNT</h5> -->
            <a class="ft-a-manu" href="{{url('/')}}">Home</a>
            <a class="ft-a-manu" href="login.html">Pricing</a>
          </div>
          <div class="span3">
            <!-- <h5>INFORMATION</h5> -->
            <a class="ft-a-manu" href="contact.html">Help</a>
            <a class="ft-a-manu" href="faq.html">How Works</a>
          </div>
          <div class="span3">
            <!-- <h5>OUR OFFERS</h5> -->
            <a class="ft-a-manu" href="#">Advertising</a>
            <a class="ft-a-manu" href="#">Searching</a>
          </div>
          <div class="span3">
            <!-- <h5>OUR OFFERS</h5> -->
            <a class="ft-a-manu" href="#"> Product</a>
            <a class="ft-a-manu" href="#"> Sellers</a>
          </div>
          <div id="contact" class="span3 footer-line">
            <h5>Contact Us </h5>
            <p>if you contact with Us please visited our contact us page.</p>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <p>Copyright © 2020 <a class="footer-a" href="">{{$gs->site_title}}</a> Allright Reserved</p>
        <p>Use of this website constitutes acceptance of the <a href="{{route('user.t_c')}}">terms&condition</a> and <a href="{{route('user.privecy_policy')}}">Privecy Policy</a> . Designated Trademarks and brands are the propertyof their respective owner</p>
      </div>


    </div><!-- Container End -->
  </div>
  @yield('js')
  <!-- Placed at the end of the document so the pages load faster ============================================= -->
  <script src="{{asset('assets/frontend')}}/themes/js/jquery.js" type="text/javascript"></script>
  <script src="{{asset('assets/frontend')}}/themes/js/front.min.js" type="text/javascript"></script>
  <script src="{{asset('assets/frontend')}}/themes/js/google-code-prettify/prettify.js"></script>
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  <script src="{{asset('assets/frontend')}}/themes/js/front.js"></script>
  <script src="{{asset('assets/frontend')}}/themes/js/jquery.lightbox-0.5.js"></script>

  @stack('home_category_dropdown')
  @stack('cat_details_JS')
  @stack('listing_image_carusole')




</body>

</html>