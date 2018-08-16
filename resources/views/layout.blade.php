<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>JEM Marketing</title>
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/fonts/stylesheet.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/fonts/fonts.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/animat/animate.min.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/fancybox/jquery.fancybox.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/nivo-lightbox/nivo-lightbox.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/themes/default/default.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/owl-carousel/owl.carousel.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/owl-carousel/owl.theme.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('assets/css/owl-carousel/owl.transitions.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
</head>
<body>

    <div class='preloader'><div class='loaded'>&nbsp;</div></div>
    
	<header id="home" class="header">
		<div class="main_menu_bg navbar-fixed-top nvclr">
			<div class="container">
				<div class="row">
					<div class="nave_menu">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <a class="navbar-brand" href="#">
							<div class="logo">
							<i class="fab fa-envira"></i>
                                <p>JEM Marketing</p>
							</div>
						  </a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  
						  <ul class="nav navbar-nav navbar-right">
							<li><a href="{{ url('/') }}">Home Page</a></li>
							<li><a href="{{ url('about') }}">About Us</a></li>
							<li><a href="{{ url('order') }}">Order Now</a></li>
							<li><a href="#portfolio">Contact</a></li>
            
						  </ul>
						</div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
					</div>	
				</div><!--End of row -->
				
			</div><!--End of container -->
			
		</div>
	</header> <!--End of header -->
	
	
	

	    @yield('content')


	
	
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
					<div class="main_footer text-center wow zoomIn" data-wow-duration="1s">
                      <div class="col-md-1"></div>
                      <div class="col-md-10">
                         
                         <p class="notfnt">
                             Notice: The products and information found on www.Immuniguard.com are not intended to replace professional medical advice or treatment. These statements have not been evaluated by the Food and Drug Administration. These products are not intended to diagnose, treat, cure or prevent any disease. Individual results may vary.
                          </p>
  
                          <div class="row"> 
                                <div class="col-md-6 lfli">
                                  <p class="lfli"> 906 Joseph Ave, Suite B <br> Akron, Ohio USA 44306</p>
																	
                                </div>
                                <div class="col-md-6 rtli">
                                  <img class="vss" src="{{ URL::asset('assets/images/mastercard.png') }}" alt="">
                                  <img class="vss" src="{{ URL::asset('assets/images/visa.png') }}" alt="">
                                </div>
                          </div>
                       
  		  			     <div class="row">
                                <div class="col-md-6 lmnj">
                                  <a class="lnkl" href="{{ url('policy') }}">Privacy Policy</a>|
                                  <a class="lnkl" href="">Terms & Conditions</a>|
                                  <a class="lnkl" href="">Immuniguard Supplement Facts</a>
                                </div>
                                <div class="col-md-6">
                                  <p>Made by CodeZilla Team 2018. All Rights Reserved to JEM Company</p>
                                </div>

                              
                         </div>

                          <div class="col-md-1"></div>
                      </div>
					</div>
				</div>
			</div>
		</footer>

	<!-- STRAT SCROLL TO TOP -->
	
	<div class="scrollup">
		<a href="#"><i class="fa fa-chevron-up"></i></a>
	</div>
	

	<script type="text/javascript" src="{{ URL::asset('assets/js/jquery/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/script.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/fancybox/jquery.fancybox.pack.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/nivo-lightbox/nivo-lightbox.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/owl-carousel/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/jquery-easing/jquery.easing.1.3.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/wow/wow.min.js') }}"></script>
	<!--<script type="text/javascript" src="js/counterup/counterup.min.js"></script>-->	
	<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>-->
	<!--<script type="text/javascript" src="js/counterup/jquery.counterup.min.js"></script>-->
	<script type="text/javascript" src="{{ URL::asset('assets/js/isotop/isotope.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/isotop/isotop.function.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/masonry/masonry.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/mixitup/jquery.mixitup.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/masonry/masonry.pkgd.min.js') }}"></script>
</body>
</html>