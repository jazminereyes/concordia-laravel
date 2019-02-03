<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Concordia Children's Services, Inc. @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500|Gaegu:700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('giving/css/open-ionic-bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('giving/css/animate.css') }}"> 
    <link rel="stylesheet" href="{{ asset('giving/css/owl.carousel.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('giving/css/owl.theme.default.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('giving/css/magnific-popup.css') }}"> 
    <link rel="stylesheet" href="{{ asset('giving/css/aos.css') }}"> 
    <link rel="stylesheet" href="{{ asset('giving/css/ionicons.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('giving/css/bootstrap-datepicker.css') }}"> 
    <link rel="stylesheet" href="{{ asset('giving/css/jquery.timepicker.css') }}"> 
    <link rel="stylesheet" href="{{ asset('giving/css/flaticon.css') }}"> 
    <link rel="stylesheet" href="{{ asset('giving/css/icomoon.css') }}"> 
    <link rel="stylesheet" href="{{ asset('giving/css/style.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/client.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/sweetalert.min.css') }}"> 

    <!-- Include SmartWizard CSS -->
   <link href="{{ asset('SmartWizard/dist/css/smart_wizard.css') }}" rel="stylesheet" type="text/css" />

    <!-- Optional SmartWizard theme -->
    <link href="{{ asset('SmartWizard/dist/css/smart_wizard_theme_circles.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('SmartWizard/dist/css/smart_wizard_theme_arrows.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('SmartWizard/dist/css/smart_wizard_theme_dots.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('icheck/skins/flat/green.css') }}" rel="stylesheet">
    @yield('stylesheets')
  </head>
  <body>
    
  <div class="modal" tabindex="-1" role="dialog" id="viewapp">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">View Application</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ url('/monitor') }}">
            {{csrf_field()}}
            <label>Enter application code</label>
            <input type="text" class="form-control" name="appcode"/>
        </div>
        <div class="modal-footer">
          <input type="submit" value="Submit" class="btn btn-primary"/>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Concordia</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ url('/') }}" data-toggle="modal" data-target="#viewapp" class="nav-link">View My Application</a></li>
          <li class="nav-item"><a href="{{ url('/donate') }}" class="nav-link">Donate</a></li>
          <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">Sign In</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
   
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      @yield('header')
        <div class="container">
          <div class="row align-items-center">
            @yield('text')
          </div>
        </div>
      </div>
      
    </div>
  </div>

    @yield('content')
  
  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-6">
          <h3 class="heading-section">About Us</h3>
          <p class="mb-5">Concordia Children's Services, Inc. is a private organization which provides a home for children in need and other services such as educational assistance and raising awareness for different causes and campaigns.</p>
          <p><a href="{{ url('/donate') }}" class="btn btn-primary px-4 py-3">Donate Now</a></p>
        </div>
        
        <div class="col-md-6 col-lg-6">
          <div class="block-23">
            <h3 class="heading-section">Contact Info</h3>
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">4443 Sta. Mesa, Manila 1016 PHILIPPINES</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+632.354.6049</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">office@concordiachildrens.org</span></a></li>
                <li><span class="icon icon-clock-o"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
              </ul>
            </div>
        </div>
        
        
      </div>
      <div class="row pt-5">
        <div class="col-md-12 text-center">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib </a>| Edited by Jazmine E. Reyes | Polytechnic University of the Philippines
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('giving/js/jquery.min.js') }}"></script>
  <script src="{{ asset('giving/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('giving/js/popper.min.js') }}"></script>
  <script src="{{ asset('giving/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('giving/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('giving/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('giving/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('giving/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('giving/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('giving/js/bootstrap-datepicker.js') }}"></script>
  
  <script src="{{ asset('giving/js/aos.js') }}"></script>
  <script src="{{ asset('giving/js/jquery.animateNumber.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('giving/js/google-map.js') }}"></script>
  <script src="{{ asset('giving/js/main.js') }}"></script>
  <script src="{{ asset('js/sweetalert.min.js') }}"></script>
  <script src="{{ asset('js/client.js') }}"></script>

  <!-- Include SmartWizard JavaScript source -->
  <script type="text/javascript" src="{{ asset('SmartWizard/dist/js/jquery.smartWizard.min.js') }}"></script>

  <script type="text/javascript" src="{{ asset('icheck/icheck.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/test.js') }}"></script>

  @include('sweet::alert')
    
    @yield('scripts')

  </body>
</html>