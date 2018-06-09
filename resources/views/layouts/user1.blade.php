<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Balay Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="{{ asset ('/assests/user1/favicon.ico')}}">

	<link href="{{ asset ('/assests/user1/https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700')}}" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset ('/assests/user1/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset ('/assests/user1/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset ('/assests/user1/css/bootstrap.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset ('/assests/user1/css/flexslider.css')}}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{ asset ('/assests/user1/fonts/flaticon/font/flaticon.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset ('/assests/user1/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset ('/assests/user1/css/owl.theme.default.min.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset ('/assests/user1/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{ asset ('/assests/user1/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo"><a href="index.html">Balay</a></h1>
			<!-- navbar -->
			@include('partials4.navbar')
			<!-- endnavbar -->
			

			<div class="colorlib-footer">
				<p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </span> <span>Demo Images: <a href="http://nothingtochance.co/" target="_blank">nothingtochance.co</a></span></small></p>
			<!-- bagian medsos -->
			@include('partials4.medsos')
			<!-- end bagian medsos -->
				
			</div>

		</aside>

			<!-- images -->
			@include('partials4.images')
			<!-- images -->
		
	</div>

	<!-- jQuery -->
	<script src="{{ asset ('/assests/user1/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset ('/assests/user1/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset ('/assests/user1/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{ asset ('/assests/user1/js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{ asset ('/assests/user1/js/jquery.flexslider-min.js')}}"></script>
	<!-- Sticky Kit -->
	<script src="{{ asset ('/assests/user1/js/sticky-kit.min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{ asset ('/assests/user1/js/owl.carousel.min.js')}}"></script>
	<!-- Counters -->
	<script src="{{ asset ('/assests/user1/js/jquery.countTo.js')}}"></script>
	
	
	<!-- MAIN JS -->
	<script src="{{ asset ('/assests/user1/js/main.js')}}"></script>

	</body>
</html>

