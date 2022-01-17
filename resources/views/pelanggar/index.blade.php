<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Monitoring Cabai</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Corporate Bank a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- .css files -->
	<link href="{{ asset(' css/bars.css ')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css ')}}" type="text/css" media="all"  />
	<link rel="stylesheet" href="{{ asset('css/style.css ')}}" type="text/css" media="all"  />
	<link rel="stylesheet" href="{{ asset('css/font-awesome.css ')}}"  />
<!-- //.css files -->
<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- //Default-JavaScript-File -->
<!-- fonts -->
	<link href="{{ asset(' //fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese ')}}" rel="stylesheet">
	<link href="{{ asset(' //fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext ')}}" rel="stylesheet">
<!-- //fonts -->
  <!-- Bootstrap Core CSS -->
  <link href="{{asset('assets/bootstrap/dist/css/bootstrap.min.css ')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('assets/bower_components/sidebar-nav/dist/sidebar-nav.min.css ')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('assets/css/animate.css ')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/style.css ')}}" rel="stylesheet" type="text/css">
    <!-- color CSS -->
    <link href="{{asset('assets/css/colors/default.css ')}}" id="theme" rel="stylesheet">
    <link href="{{asset('assets/dataTables/datatables.css ')}}" rel="stylesheet" >
    <link href="{{asset('assets/dataTables/datatables.min.css ')}}" rel="stylesheet">
<!-- scrolling script -->
<script type="{{asset('text/javascript')}}">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //scrolling script -->
<style>
.lbl, table, label{
    color: white;
.active-cyan-4 input[type=text]:focus:not([readonly]) {
border: 1px solid #4dd0e1;
color: white;
}
</style>
</head>
<!-- //Head -->
<!-- Body -->
<body class="fix-header">

	<div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>

<div id="wrapper">
		<!-- side-Bar -->
	<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav slimscrollsidebar">
			<div class="sidebar-head">
				<h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span
						class="hide-menu">Monitoring</span></h3>
			</div>
			<ul class="nav" id="side-menu">
				<li style="padding: 70px 0 0;">
					<a href="{{ url('home') }}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Home</a>
				</li>
				<li>
					<a href="{{ url('monitoring') }}" class="waves-effect"><i class="fa fa-globe fa-fw    " aria-hidden="true"></i>Monitoring</a>
				</li>
				<li>
					<a href="{{ route('logout') }}" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Logout</a>
				</li>
			</ul>
		</div>
	</div>
		<!--side-Bar -->
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row bg-title">
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					<h4 class="page-title">Kondisi tanah terakhir</h4>
				</div>
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
						<li>Home</li>
						<li><a href="monitoring">Monitoring</a></li>
					</ol>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /row -->
			
			<div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12">
					<div class="white-box">
						<h1 style="text-align:center" class="lbl">Kondisi tanah terakhir</h1>					
						<table class="table table-bonikrdered">
						<thead>
							<tr>
							<th scope="col" style="text-align:center">Suhu</th>
							<th scope="col" style="text-align:center">Kelembaban</th>
							<th scope="col" style="text-align:center">Durasi penyiraman  terakhir</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="text-align:center">{{ $pelanggars->temperature }} ⁰C</td>
								<td style="text-align:center">{{ $pelanggars->kelembaban }} %</td>
								
								<?php if ($pelanggars->defuzzy == 1) : ?>
									<td style="text-align:center">Mati</td>
								
								<?php elseif ($pelanggars->defuzzy == 2) : ?>
									<td style="text-align:center">4 S</td>
								
								<?php elseif ($pelanggars->defuzzy == 3) : ?>
									<td style="text-align:center">7 S</td>
								
								<?php elseif ($pelanggars->defuzzy == 4) : ?>
									<td style="text-align:center">9 S</td>
								
								<?php elseif ($pelanggars->defuzzy == 5) : ?>
									<td style="text-align:center">12 S</td>
								<?php endif; ?>
							</tr>
						</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</div>
</div>
        <!-- /#page-wrapper -->
		<!-- <div class="banner-main jarallax">
			<div class="container">
				<div class="banner-inner">
					<div class="col-md-12">
					
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div> -->


<!-- copyright -->
<!-- <section class="copyright">
	<div class="agileits_copyright text-center">
			<p>Petani Cerdas</p>
	</div>
</section> -->
<!-- //copyright -->

	<script src="{{ asset('js/jarallax.js')}}"></script>
	<script src="{{ asset('js/SmoothScroll.min.js')}}"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<script type="text/javascript" src="{{ asset('js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/easing.js')}}"></script>

	<script src="{{asset('assets/bower_components/jquery/dist/jquery.min.js ')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/bootstrap/dist/js/bootstrap.min.js ')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('assets/bower_components/sidebar-nav/dist/sidebar-nav.min.js ')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('assets/js/jquery.slimscroll.js ')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/js/waves.js ')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('assets/js/custom.min.js ')}}"></script>
    <script src="{{asset('assets/dataTables/datatables.min.js ')}}"></script>
    <script type="{{asset('assets/text/javascript ')}}">
	
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<script src="{{ asset('js/bars.js')}}"></script>
</body>
<!-- //Body -->
</html>
<!-- //html -->