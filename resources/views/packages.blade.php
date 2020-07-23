<!DOCTYPE html>
<html>

<head>
	<title>Skylark Automation India</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="SKYLARK GROUP consist of highly skilled people in their domain" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
	<style>
	.card {
  /* Add shadows to create the "card" effect */
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
   padding:5px 5px;
   background-color:#F8F8F8;
}
ul{
list-style-type:none;
}

h3{
color:black;
}
h3:hover{
color:white;
}
.port-info:hover{
color:white;
}

	</style>
</head>

<body>
	<div class="top_header" id="home">
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="nav_top_fx_w3ls_agileinfo">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					    aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <div class="logo-w3layouts-agileits">
			<h1> <a class="navbar-brand" href="index"><i class="fa fa-clone" aria-hidden="true"></i> SKYLARK GROUP <span class="desc">AIM FOR SKY</span></a></h1>
		</div>
				</div>
				<!--<div id="navbar" class="navbar-collapse collapse">
					<div class="nav_right_top">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="request" href="contact.html">Send Request</a></li>-->

						</ul>
						<ul class="nav navbar-nav">
							<li><a href="/">Home</a></li>
							<li><a href="gallery">Gallery</a></li>
							<li><a href="career">Career</a></li>

							<li class="active"  class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Services<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li  class="active" ><a href="packages">Packages</a></li>
									<li><a href="product">Products</a></li>
									<li><a href="services">Services</a></li>
								</ul>
								<li><a href="contact">Contact</a></li>
							</li>
						</ul>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
	</div>
	<!--/banner_info-->
	<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li><a href="/">Home</a><span>|</span></li>
				<li>Packages</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!--/ab-->
	<div class="banner_bottom">
		<div class="container">
			<center><b><h1 style="font-size:4vw">Packages</h1></b></center>
			<div class="inner_sec_info_wthree_agile">
				<!--/projects-->
				<ul class="portfolio-categ filter">
					<li class="port-filter all active">
						<a href="#">All</a>
					</li>
					<li class="cat-item-1">
						<a href="#" title="Category 1">Solution Portfolio</a>
					</li>
					<li class="cat-item-2">
						<a href="#" title="Category 2">Smart Intelligent Solutions</a>
					</li>
					<li class="cat-item-3">
						<a href="#" title="Category 3">Building Smart Integration</a>
					</li>
				</ul>

				<center>
				<ul class="portfolio-area">
					@foreach($packages as $package)
					<li class="portfolio-item2 card" data-id="{{$package->dataid}}" data-type="{{$package->datatype}}">
						<div>
							<span class="image-block block2 img-hover">
										<a href="#">
									<div class="port-info">
										<h3>{{$package->title}}
											<br/>
											{{$package->price}}
										</h3>
										</a>
									</div>
							</span>			
							<br>
							<h4>{{$package->header}}</h4>
							<ul>
								{{$package->description}}
							</ul>
						</div>
							
					</li>
					<li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li>
					@endforeach


					<div class="clearfix"></div>
				</ul>
				<!--end portfolio-area -->

			</div>

		</div>
		<!--//projects-->

	</div>
	<!--//bottom-->

	<!-- footer -->
	<div class="footer">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="index"><i class="fa fa-clone" aria-hidden="true"></i> SKYLARK GROUP</a></h2>
				<p>AIM FOR SKY</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="https://www.facebook.com/skylarkautomation" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/IndiaSkylark" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/skylark_automation" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
						<h4>Latest <span>Info</span> </h4>
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="about">About</a></li>
							<li><a href="services">Services</a></li>
							<li><a href="signin">Sign in</a></li>
							<li><a href="contact">Contact</a></li>
						</ul>
					</div>
					<div class="col-md-3 sign-gd flickr-post">
						<h4>Our <span>Works</span></h4>
						<ul>
							<li><a href="single"><img src="images/g1.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single"><img src="images/g2.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single"><img src="images/g3.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single"><img src="images/g4.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single"><img src="images/g5.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single"><img src="images/g6.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single"><img src="images/g7.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single"><img src="images/g8.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single"><img src="images/g4.jpg" alt=" " class="img-responsive" /></a></li>
						</ul>
					</div>
					<div class="col-md-5 sign-gd-two">
						<h4>Contact <span>Information</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Phone Number</h6>
									<p>+91 20 2681 3077</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email Address</h6>
									<p><a href="mailto:sales@skylarkautomation.in">sales@skylarkautomation.in</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Location</h6>
									<p>C 7 tara Aayi Residency, Kawade Complex, BT Kawade Road, Ghorpadi, Pune-411001

									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
			<p class="copy-right"> <a href="http://w3layouts.com/"> </a></p>
		</div>
	</div>
	</div>
	<!-- //footer -->
	<!-- //footer -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>

	<!-- js -->
	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll, .navbar li a, .footer li a").click(function (event) {
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->
</body>

</html>
