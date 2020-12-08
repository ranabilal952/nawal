<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="keywords" content="">
	<title>NAWAL | Tours, Travel @yield('title')</title>
    <link rel="shortcut icon" href="{{asset('fassets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('fassets/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('fassets/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('fassets/images/apple-touch-icon-114x114.png')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fassets/fonts/font-awesome-4.3.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fassets/css/stroke.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fassets/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fassets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fassets/css/flexslider.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fassets/css/carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fassets/rs-plugin/css/settings.css')}}" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{asset('fassets/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fassets/css/bootstrap-spinner.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fassets/css/custom.css')}}">
</head>
<body>
	<div id="loader">
	    <div class="loader-container">
	        <h3 class="loader-back-text"><img src="images/.gif" alt="" class="loader"></h3>
	    </div>
	</div>
	<div id="wrapper">
		<header class="header">
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="container">
				    <!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topbarnav">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
						</button>
				    </div>
				    <!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="topbarnav">
						<ul class="nav navbar-nav">
							{{-- <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="fa fa-angle-down"></span></a>
								<ul class="dropdown-menu">
								<li><a href="{{('/')}}">Home</a></li>
								</ul>
							</li>							 --}}
							{{-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tour List<span class="fa fa-angle-down"></span></a>
								<ul class="dropdown-menu">
									<li><a href="tour-list.html">Tour List</a></li>
									<li><a href="tour-single.html">Tour Single</a></li>
									<li><a href="tour-checkout.html">Tour Checkout</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="contact.html">Contact Us</a></li>
									<li><a href="blog.html">Our News</a></li>
									<li><a href="single.html">Single Blog</a></li>
									<li><a href="404.html">Not Found (404)</a></li>
									<li><a href="elements.html">Elements</a></li>
									<li><a href="login.html">Login</a></li>
								</ul>
							</li> --}}
						<li><a href="{{('/')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
						<li><a href="{{('about')}}"><i class="fa fa-list" aria-hidden="true"></i> About us</a></li>
						<li><a href="{{('contact')}}"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
						<li><a href="{{('visaconsultancy')}}"><i class="fa fa-ticket" aria-hidden="true"></i> Visa Consultancy</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							{{-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plane" aria-hidden="true"></i> TOURS <span class="fa fa-angle-down"></span></a>
								<ul class="dropdown-menu">
								<li><a href="">US TOURS</a></li>
								<li><a href="">UK TOURS</a></li>
								<li><a href="">POLAND TOURS</a></li>
								<li><a href="">UAE TOURS</a></li>
								<li><a href="">QATAR TOURS</a></li>
								<li><a href="">PAKISTAN TOURS</a></li>
								</ul>
							</li> --}}

						<li><a href="{{('hotelreservation')}}"><i class="fa fa-bed" aria-hidden="true"></i> Hotel reservations</a></li>
						{{-- <li><a href="{{('tourlist')}}"><i class="fa fa-plane " aria-hidden="true"></i> PACKAGES</a></li> --}}
						<li><a href="{{('login')}}"><i class="fa fa-key"></i> Login</a></li>
						<li><a href="{{('register')}}"><i class="fa fa-user"></i> Register</a></li>
							{{-- <li><a href="#"><i class="fa fa-dollar"></i>  Dollar</a></li>	
					        {{-- <li><a href="#"><i class="fa fa-globe"></i> English</a></li>	 --}}
						</ul>
					</div>
				</div>
			</nav>
			<div class="clearfix"></div>
			<nav  class="yamm navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
						</button>
						<div class="navbar-brand navbar-brand-centered">
						<a href="{{('/')}}"><img src="images/7.png" style="padding-top: 10px" height="140"  alt=""></a>
							{{-- <a href="index.html"><img src="images/5.png" style="padding-top: 30px" height="139" alt=""></a> --}}
						</div>
				    </div>
					<div class="collapse navbar-collapse" id="navbar-brand-centered">
						<ul class="nav navbar-nav navbar-left">
							<li class="dropdown yamm-fw">
								<li><a href="{{('ustour')}}"><i class="fa fa-"></i> US TOURS</a></li>
							{{-- <a href="{{('ustour')}}" data-toggle="dropdown" class="dropdown-toggle" tabindex="0">US Tours <span></span></a> --}}
								{{-- <ul class="dropdown-menu">
					                <li>
										<div class="yamm-content">
						                    <div class="row">
												<div class="col-xs-12 col-md-3 col-sm-6 bg1 nopadding">
													<div class="megamenu">
														<h4>INDONESIA - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>
												<div class="col-xs-12 col-md-3 col-sm-6 bg2 nopadding">
													<div class="megamenu">
														<h4>CHINA - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>

												<div class="col-xs-12 col-md-3 col-sm-6 bg3 nopadding">
													<div class="megamenu">
														<h4>MALAYSIA - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>

												<div class="col-xs-12 col-md-3 col-sm-6 bg3 nopadding">
													<img src="upload/menubg.png" alt="" class="menubg">
												</div>
											</div>
										</div>
									</li>
								</ul> --}}
							</li>
							<li class="dropdown yamm-fw">
								
								<a href="{{('uktour')}}"  class="">UK Tours</a>
								{{-- <ul class="dropdown-menu">
					                <li>
										<div class="yamm-content">
						                    <div class="row">
												<div class="col-xs-12 col-md-3 col-sm-6 bg1 nopadding">
													<div class="megamenu">
														<h4>KOLN - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>
												<div class="col-xs-12 col-md-3 col-sm-6 bg2 nopadding">
													<div class="megamenu">
														<h4>NEW YORK - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>

												<div class="col-xs-12 col-md-3 col-sm-6 bg3 nopadding">
													<div class="megamenu">
														<h4>ITALIA - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>

												<div class="col-xs-12 col-md-3 col-sm-6 bg3 nopadding">
													<img src="upload/menubg.png" alt="" class="menubg">
												</div>
											</div>
										</div>
									</li>
								</ul> --}}
							</li>
							<li class="dropdown yamm-fw">
								<a href="{{('polandtour')}}">Poland Tours <span></span></a>
								{{-- <ul class="dropdown-menu">
					                <li>
										<div class="yamm-content">
						                    <div class="row">
												<div class="col-xs-12 col-md-3 col-sm-6 bg1 nopadding">
													<div class="megamenu">
														<h4>GERMANY - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>
												<div class="col-xs-12 col-md-3 col-sm-6 bg2 nopadding">
													<div class="megamenu">
														<h4>PARIS - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>

												<div class="col-xs-12 col-md-3 col-sm-6 bg3 nopadding">
													<div class="megamenu">
														<h4>ISTANBUL - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>

												<div class="col-xs-12 col-md-3 col-sm-6 bg3 nopadding">
													<img src="upload/menubg.png" alt="" class="menubg">
												</div>
											</div>
										</div>
									</li>
								</ul> --}}
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown yamm-fw">
								<a href="{{('uaetour')}}" >UAE Tours <span></span></a>
								{{-- <ul class="dropdown-menu">
					                <li>
										<div class="yamm-content">
						                    <div class="row">
												<div class="col-xs-12 col-md-3 col-sm-6 bg1 nopadding">
													<div class="megamenu">
														<h4>NEW OCEAN - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>
												<div class="col-xs-12 col-md-3 col-sm-6 bg2 nopadding">
													<div class="megamenu">
														<h4>SMALL OCEAN - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>

												<div class="col-xs-12 col-md-3 col-sm-6 bg3 nopadding">
													<div class="megamenu">
														<h4>BIG OCEAN - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>

												<div class="col-xs-12 col-md-3 col-sm-6 bg3 nopadding">
													<img src="upload/menubg.png" alt="" class="menubg">
												</div>
											</div>
										</div>
									</li>
								</ul> --}}
							</li>
							<li class="dropdown yamm-fw">
								<a href="{{('qatar')}}" >Qatar Tours <span></span></a>
								{{-- <ul class="dropdown-menu">
					                <li>
										<div class="yamm-content">
						                    <div class="row">
												<div class="col-xs-12 col-md-3 col-sm-6 bg1 nopadding">
													<div class="megamenu">
														<h4>ISTANBUL - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>
												<div class="col-xs-12 col-md-3 col-sm-6 bg2 nopadding">
													<div class="megamenu">
														<h4>AMSTERDAM - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>

												<div class="col-xs-12 col-md-3 col-sm-6 bg3 nopadding">
													<div class="megamenu">
														<h4>FRANCE - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>

												<div class="col-xs-12 col-md-3 col-sm-6 bg3 nopadding">
													<img src="upload/menubg.png" alt="" class="menubg">
												</div>
											</div>
										</div>
									</li>
								</ul> --}}
							</li>							
							<li class="dropdown yamm-fw">
								<a href="{{('pakistantour')}}"  >Pakistan Tours <span></span></a>
								{{-- <ul class="dropdown-menu">
					                <li>
										<div class="yamm-content">
						                    <div class="row">
												<div class="col-xs-12 col-md-3 col-sm-6 bg1 nopadding">
													<div class="megamenu">
														<h4>ISTANBUL - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>
												<div class="col-xs-12 col-md-3 col-sm-6 bg2 nopadding">
													<div class="megamenu">
														<h4>AMSTERDAM - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>

												<div class="col-xs-12 col-md-3 col-sm-6 bg3 nopadding">
													<div class="megamenu">
														<h4>FRANCE - <span>From $175</span></h4>
														<hr>
														<ul>
															<li><span>Jakarta</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bali</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Bandung</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
															<li><span>Lombok</span> <a href="#" class="btn btn-menu">Details</a> <a href="#" class="btn btn-menu">Booking</a></li>
														</ul>
													</div><!-- end mega menu -->
												</div>

												<div class="col-xs-12 col-md-3 col-sm-6 bg3 nopadding">
													<img src="upload/menubg.png" alt="" class="menubg">
												</div>
											</div>
										</div>
									</li>
								</ul> --}}
							</li>
							{{-- <li class="dropdown yamm-fw">
								<a href="#" data-toggle="dropdown" class="dropdown-toggle" tabindex="0">Search tour <span>Find your dream here</span></a>
								<ul class="dropdown-menu">
					                <li>
										<div class="yamm-content">
						                    <div class="row">

												<div class="col-xs-12 col-md-12 col-sm-12 bg3 searchbg">
													<div class="megamenu">
														<form id="search-form" class="form-inline">
															<div class="form-group">
																<label for="form1">Your destination</label><br>
																<div class="input-group">
																	<div class="input-group-addon"><img src="images/icons/icon1.png" alt=""></div>
																	<input type="text" class="form-control" id="form1" placeholder="City, destination or hotel...">
																</div>
															</div>
															<div class="form-group">
																<label for="form2">Date Check in</label><br>
																<div class="input-group">
																	<div class="input-group-addon"><img src="images/icons/icon2.png" alt=""></div>
																	<input type="text" class="form-control max80" id="form2" placeholder="Check in">
																</div>
															</div>
															<div class="form-group">
																<label for="form3">Date Check out</label><br>
																<div class="input-group">
																	<div class="input-group-addon"><img src="images/icons/icon2.png" alt=""></div>
																	<input type="text" class="form-control max80" id="form3" placeholder="Check out">
																</div>
															</div>
															<div class="form-group">
																<label class="withborder">ROOM : 4</label><br>
																<div class="input-group">
																	<a href="#" id="form4" class="addroom">+ Add a room</a>
																</div>
															</div>
															<div class="form-group">
																<label for="form5">Child</label><br>
														        <div class="input-group spinner" data-trigger="spinner">
														          <input id="form5" type="text" class="form-control max40" value="1" data-rule="quantity">
														          <div class="input-group-addon">
														            <a href="javascript:;" class="spin-up" data-spin="up"><i class="fa fa-angle-up"></i></a>
														            <a href="javascript:;" class="spin-down" data-spin="down"><i class="fa fa-angle-down"></i></a>
														          </div>
														        </div>
															</div>
															<div class="form-group">
																<label for="form6">Adult</label><br>
														        <div class="input-group spinner" data-trigger="spinner">
														          <input id="form6" type="text" class="form-control max40" value="1" data-rule="quantity">
														          <div class="input-group-addon">
														            <a href="javascript:;" class="spin-up" data-spin="up"><i class="fa fa-angle-up"></i></a>
														            <a href="javascript:;" class="spin-down" data-spin="down"><i class="fa fa-angle-down"></i></a>
														          </div>
														        </div>
															</div>
															<div class="form-group">
																<div class="input-group formbutton">
																	<a class="btn btn-default" href="#">CHECK PROMO</a>
																</div>
															</div>
															<div class="form-group">
																<div class="input-group formbutton">
																	<a class="btn btn-primary" href="#">SEARCH NOW</a>
																</div>
															</div>
														</form>
													</div><!-- end mega menu -->
												</div>
											</div>
										</div>
									</li>
								</ul>
							</li> --}}
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>

	<div>
        @yield('content')
    </div>
	<footer class="footer text-center">
		{{-- <div class="footerbefore"></div> --}}
		
		<div class="container">
			<div class="row">
				<div class="col-md-15 col-sm-3">
					<div class="widget">
						<div class="widget-title">
							<h4>MENU</h4>
							<hr>
						</div><!-- end widget-title -->
						<ul>
							<li><a href="#">HOME</a></li>
							<li><a href="#">ABOUT US</a></li>
							<li><a href="#">CONTACT</a></li>
							<li><a href="#">FLIGHT BOOKING </a></li>
							<li><a href="#">VISA CONSULTANCY </a></li>
							<li><a href="#">HOTEL RESERVATION</a></li>
							<li><a href="#"></a></li>
						</ul>
					</div><!-- end widget -->
				</div><!-- end col -->

				<div class="col-md-15 col-sm-3">
					<div class="widget">
						<div class="widget-title">
							<h4>TOURS</h4>
							<hr>
						</div><!-- end widget-title -->
						<ul>
							<li><a href="#"> US TOURS</a></li>
							<li><a href="#">UK TOURS </a></li>
							
							<li><a href="#"> UAE TOURS </a></li>
							<li><a href="#"> QATAR TOURS</a></li>
							<li><a href="#"> POLAND TOURS</a></li>
							<li><a href="#"> PAKISTAN TOURS</a></li>
						</ul>
					</div><!-- end widget -->
				</div>

				<div class="col-md-15 col-sm-3">
					<div class="widget">
						<div class="widget-title">
							<h4>ABOUT US</h4>
							<hr>
						</div><!-- end widget-title -->
						<p>Lorem ipsum dolor sit amet, cons adipiscing elit.</p>
						<ul>
							<li><a href="#">404 DESIGNER,  NEW YORK</a></li>
							<li><a href="#">INFO@BLUEBIRD.COM</a></li>
							<li><a href="#">+100 - 800 - 456789</a></li>
						</ul>
					</div><!-- end widget -->
				</div><!-- end col -->

				<div class="col-md-15 col-sm-3">
					<div class="widget">
						<div class="widget-title">
							<h4>CONTACT US</h4>
							<hr>
						</div><!-- end widget-title -->
						<p>Lorem ipsum dolor sit amet, cons adipiscing elit.</p>
						<ul>
							<li><a href="#">404 DESIGNER,  NEW YORK</a></li>
							<li><a href="#">INFO@BLUEBIRD.COM</a></li>
							<li><a href="#">+100 - 800 - 456789</a></li>
						</ul>
					</div><!-- end widget -->
				</div>
				<div class="col-md-15 col-sm-3">
					<div class="widget">
						<div class="widget-title">
							<h4>Newsletter</h4>
							<hr>
						</div><!-- end widget-title -->
						<div class="newsletter">
							<p>Lorem ipsum dolor sit amet, cons adipiscing elit, sed diam nonumy dolor.</p>
							<form class="form-inline">
								<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control text-white" id="exampleInputAmount" placeholder="Your Email">
									<div class="input-group-addon"><i class="icon icon-Mail"></i></div>
								</div>
								</div>
							</form>
						</div><!-- end newsletter -->
					</div><!-- end widget -->
				</div><!-- end col -->
			</div><!-- ebd row -->
		</div><!-- end container -->
	</footer>
		<div class="copyrights">
			<div class="container">	
				<div class="row clearfix">
					<div class="col-md-12 text-center">
						<p>Copyright ©  <a href="https://nglobals.com/"><strong>Nawal Travel Consultants</strong> </a> All Right Reserved <br>Designed-Developed & Managed By  <a href="https://nglobals.com/"><strong>Nawal Global Systems</strong> </a></p>
					</div>
					{{-- <div class="col-md-6">
						<img src="images/copyrights.png" alt="" class="img-responsive">
					</div> --}}
				</div><!-- end row -->
			</div><!-- end container -->
		</div>
	</div><!-- end wrapper -->
	<script  src="{{asset('fassets/http://maps.google.com/maps/api/js?sensor=false')}}"></script>
	<script  src="{{asset('fassets/js/jquery.min.js')}}"></script>
	<script  src="{{asset('fassets/js/bootstrap.min.js')}}"></script>
	<script  src="{{asset('fassets/js/retina.js')}}"></script>
	<script  src="{{asset('fassets/js/wow.js')}}"></script>
	<script  src="{{asset('fassets/js/parallax.js')}}"></script>
	<script  src="{{asset('fassets/js/flexslider.js')}}"></script>
	<script  src="{{asset('fassets/js/custom.js')}}"></script>
	<script  src="{{asset('fassets/js/jquery.spinner.js')}}"></script>
	<script  src="{{asset('fassets/js/carousel.js')}}"></script>
	<script  src="{{asset('fassets/js/owl-script.js')}}"></script>
  	<!-- PORTFOLIO -->
    <script  src="{{asset('fassets/js/isotope.js')}}"></script>
    <script  src="{{asset('fassets/js/imagesloaded.pkgd.js')}}"></script>
    <script  src="{{asset('fassets/js/masonry-home.js')}}"></script>  
  	<!-- SLIDER REV -->
	<script  src="{{asset('fassets/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script  src="{{asset('fassets/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script>
	jQuery(document).ready(function() {
		jQuery('.tp-banner').show().revolution(
			{
			dottedOverlay:"none",
			delay:16000,
			startwidth:1170,
			startheight:720,
			hideThumbs:200,     
			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,  
			navigationType:"none",
			navigationArrows:"solo",
			navigationStyle:"preview3",  
			touchenabled:"on",
			onHoverStop:"on",
			swipe_velocity: 0.7,
			swipe_min_touches: 1,
			swipe_max_touches: 1,
			drag_block_vertical: false,          
			parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[10,7,4,3,2,5,4,3,2,1],
			parallaxDisableOnMobile:"off",           
			keyboardNavigation:"off",   
			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:20,
			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,
			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,  
			shadow:0,
			fullWidth:"on",
			fullScreen:"off",
			spinner:"spinner4",  
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",  
			autoHeight:"off",           
			forceFullWidth:"off",                         
			hideThumbsOnMobile:"off",
			hideNavDelayOnMobile:1500,            
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
			fullScreenOffsetContainer: ""  
			}); 
		});
	</script>

</body>

<!-- Mirrored from templatevisual.com/demo/blue-bird/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2020 09:17:29 GMT -->
</html>