<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Cake </title>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('assets/dest/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/dest/vendors/colorbox/example3/colorbox.css')}}">
	<link rel="stylesheet" href="{{asset('assets/dest/rs-plugin/css/settings.css')}}">
	<link rel="stylesheet" href="{{asset('assets/dest/rs-plugin/css/responsive.css')}}">
	<link rel="stylesheet" title="style" href="{{asset('assets/dest/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/dest/css/animate.css')}}">
	<link rel="stylesheet" title="style" href="{{asset('assets/dest/css/huong-style.css')}}">
</head>
<body>

	@include('layouts.front-end.header')
	<div class="rev-slider">
		<!-- cho nay de slide nhung da cat ra -->
	</div>
	<div class="container">
		@yield('content')
	</div> <!-- .container -->

	@include('layouts.front-end.footer')
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Nhom02_18BITV02_NTTU (&copy;)7-1-2021</p>
			<p class="pull-right pay-options">
				<a href="#"><img src="assets/dest/images/pay/mastercard.png" alt="" height="20px"></a>
				<a href="#"><img src="assets/dest/images/pay/mestro.png" alt=""height="20px"></a>
				<a href="#"><img src="assets/dest/images/pay/visa.png" alt=""height="20px"></a>
				<a href="#"><img src="assets/dest/images/pay/paypal2.png" alt=""height="20px"></a>
			</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->


	<!-- include js files -->
	<script src="{{asset('assets/dest/js/jquery.js')}}"></script>
	<script src="{{asset('assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="{{asset('assets/dest/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
	<script src="{{asset('assets/dest/vendors/colorbox/jquery.colorbox-min.js')}}"></script>
	<script src="{{asset('assets/dest/vendors/animo/Animo.js')}}"></script>
	<script src="{{asset('assets/dest/vendors/dug/dug.js')}}"></script>
	<script src="{{asset('assets/dest/js/scripts.min.js')}}"></script>
	<script src="{{asset('assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset('assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="{{asset('assets/dest/js/waypoints.min.js')}}"></script>
	<script src="{{asset('assets/dest/js/wow.min.js')}}"></script>
	<!--customjs-->
	<script src="{{asset('assets/dest/js/custom2.js')}}"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
