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
<title>SILANG TRANS</title>
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
<body>
	<div class="top-main">
		<div class="number">
			
			<div class="clearfix"></div>
		</div>
		<div class="social-icons">
		
		<div class="form-top">
		  
		</div>
			<div class="clearfix"></div>
		</div>
			<div class="clearfix"></div>
	</div>
		<!-- Top-Bar -->
		<div class="top-bar">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					
				</div>
			</nav>
		</div>
		<div class="logo">
			<h1>SILANG TRANS</h1>
		</div>
		<!-- //Top-Bar -->
		
		<div class="banner-main jarallax">
			<div class="container">
				<div class="banner-inner">
					<div class="col-md-12">
					<h1 style="text-align:center" class="lbl">Informasi Tilang</h1>		
						<table class="table table-bordered">
							<thead>
								<tr>
								<th scope="col" style="text-align:center">Nomor Induk Kependudukan</th>
								<th scope="col" style="text-align:center">Nama</th>
								<th scope="col" style="text-align:center">Plat Nomor</th>
								<th scope="col" style="text-align:center">Pasal</th>
								<th scope="col" style="text-align:center">Besar Denda</th>
								<th scope="col" style="text-align:center">Status</th>
								</tr>
							</thead>
 							<tbody>
							 <!--	 nama
							 		 NIK
									 Plat nomor
									 pasal
									 besar denda
									 status

									 
									  -->
									@foreach($pelanggars as $p)
										<tr>
											<td style="text-align:center">{{ $p->nik}}</td>
											<td style="text-align:center">{{ $p->nama}}</td>
											<td style="text-align:center">{{ $p->platnomor}}</td>
											<td style="text-align:center">{{ $p->pasal}}</td>
											<td style="text-align:center">{{ $p->besardenda}}</td>
											<td style="text-align:center">{{ $p->status}}</td>
										</tr>
									@endforeach
							</tbody>
						</table>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>




<!--team-->
<div class="team" id="team">
	<div class="container">
		<h4 class="title-w3">Team</h4>
		<div class="team-grids">
		<div class="col-md-3 team-gds wow fadeInLeft animated" data-wow-delay=".5s">
			<div class="gal-grid-rev vertical">
				<div class="img-box-content"><img src="{{asset('images/t1.jpg')}}" alt=" " /></div>
					<div class="gal-text-box">
						<div class="info-gal-con">
							<div class="social-content">
								<ul>
									<li class="facebook"><a class=" hvr-underline-from-center" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="twitter"><a class="ico2 hvr-underline-from-center" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="pinterest"><a class="ico3 hvr-underline-from-center" href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li class="linkedin"><a class="ico4 hvr-underline-from-center" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>			
							</div>
						</div>
					</div>
			</div>
			<h4>michael</h4>
			<p>CEO</p>
		</div>
		<div class="col-md-3 team-gds wow fadeInUp animated" data-wow-delay=".5s">
			<div class="gal-grid-rev vertical">
				<div class="img-box-content"><img src="{{asset('images/t2.jpg')}}" alt=" " /></div>
					<div class="gal-text-box">
						<div class="info-gal-con">
							<div class="social-content">
								<ul>
									<li class="facebook"><a class="ico1 hvr-underline-from-center" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="twitter"><a class="ico2 hvr-underline-from-center" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="pinterest"><a class="ico3 hvr-underline-from-center" href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li class="linkedin"><a class="ico4 hvr-underline-from-center" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>			
							</div>
						</div>
					</div>
			</div>
			<h4>johnson</h4>
			<p>Manager </p>
		</div>
		<div class="col-md-3 team-gds wow fadeInDown animated three" data-wow-delay=".5s">
			<div class="gal-grid-rev vertical">
				<div class="img-box-content"><img src="{{asset('images/t3.jpg')}}" alt=" " /></div>
					<div class="gal-text-box">
						<div class="info-gal-con">
							<div class="social-content">
								<ul>
									<li class="facebook"><a class="ico1 hvr-underline-from-center" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="twitter"><a class="ico2 hvr-underline-from-center" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="pinterest"><a class="ico3 hvr-underline-from-center" href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li class="linkedin"><a class="ico4 hvr-underline-from-center" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>			
							</div>
						</div>
					</div>
			</div>
			<h4>corbin</h4>
			<p>Director </p>
		</div>
		<div class="col-md-3 team-gds wow fadeInRight animated four" data-wow-delay=".5s">
			<div class="gal-grid-rev vertical">
				<div class="img-box-content"><img src="{{asset('images/t4.jpg')}}" alt=" " /></div>
					<div class="gal-text-box">
						<div class="info-gal-con">
							<div class="social-content">
								<ul>
									<li class="facebook"><a class="ico1 hvr-underline-from-center" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="twitter"><a class="ico2 hvr-underline-from-center" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="pinterest"><a class="ico3 hvr-underline-from-center" href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li class="linkedin"><a class="ico4 hvr-underline-from-center" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>			
							</div>
						</div>
					</div>
			</div>
			<h4>ferdan</h4>
			<p>Chair man </p>
		</div>
		<div class="clearfix"></div>
	</div>
	</div>
</div>
<!--//team-->




<!-- copyright -->
<section class="copyright">
	<div class="agileits_copyright text-center">
			<p>IMK Kelas D</p>
	</div>
</section>
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