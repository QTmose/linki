<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Linki</title>
		<meta name="description" content="Internal link sharing made intuitive">
		<meta name="viewport" content="width=device-width">

		<!-- CSS includes -->
		<link rel="stylesheet" href="{{ URL::asset('assets/css/normalize.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">

		<script src="{{ URL::asset('assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>
	</head>
	<body>

		<!-- Header start -->
		<header class="header">

		</header>
		<!-- Header end -->

		<!-- Content start -->
		<section class="content">
			@yield('content')
		</section>
		<!-- Content end -->

		<!-- Footer start -->
		<footer class="footer">

		</footer>
		<!-- Footer end -->

		<!-- JS includes -->
		<script src="{{ URL::asset('assets/js/vendor/jquery-1.10.1.min.js') }}"></script>
		<script src="{{ URL::asset('assets/js/main.js') }}"></script>
		<script src="{{ URL::asset('assets/js/plugins.js') }}"></script>

		<script>
			var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src='//www.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>

	</body>
</html>
