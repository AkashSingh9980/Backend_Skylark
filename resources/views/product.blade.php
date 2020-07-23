<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

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
	
	<style>
	.portfolio-item2{
	opacity: 1;
	backface-visibility: hidden;
	transition: .5s ease;
	}
	
	.container: hover .portfolio-item2{
	opacity: 0.3;
	}
	</style>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
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
						<h1> <a class="navbar-brand" href="index.html"><i class="fa fa-clone" aria-hidden="true"></i> SKYLARK GROUP <span class="desc">AIM FOR SKY</span></a></h1>
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
									<li><a href="packages">Packages</a></li>
									<li class="active" ><a href="product">Products</a></li>
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
				<li>Products</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!--/ab-->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="tittle-w3ls">Products</h3>
			<div class="inner_sec_info_wthree_agile">
				
				<ul class="portfolio-categ filter">
					<li class="port-filter all active">
						<a href="#">All</a>
					</li>
					<li class="cat-item-1">
						<a href="#" title="Category 1">Automatic Door Locking</a>
					</li>
					<li class="cat-item-2">
						<a href="#" title="Category 2">Automation Integration</a>
					</li>
					<li class="cat-item-3">
						<a href="#" title="Category 3">Building Security Solutions</a>
					</li>
					<li class="cat-item-4">
						<a href="#" title="Category 4">Apple Homekit Technology</a>
					</li>
					<li class="cat-item-5">
						<a href="#" title="Category 5">Expert Solutions </a>
					</li>
				</ul>


				<ul class="portfolio-area">
					@foreach($products as $product)
						<li class="portfolio-item2" data-id="{{$product->dataid}}" data-type="{{$product->datatype}}">
							<div>
								<span class="image-block block2">
								<a class="image-zoom" href="images/{{$product->imgfile}}" rel="prettyPhoto[gallery]">
									
									<img src="images/{{$product->imgfile}}" class="img-responsive" alt="Conceit">
										<div class="port-info">
												<h5>{{$product->title}}</h5>
												<p>{{$product->details}}</p>
											</div>
								</a>
							</span>
							</div>
						</li>
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
				<h2><a href="/"><i class="fa fa-clone" aria-hidden="true"></i> SKYLARK GROUP </a></h2>
				<p>SKYLARK AUTOMATION PVT LTD is the leading Automation Group of Smart technologies in India.

Founder CEO – Prachie Sorte Jagtap- Certified System Integrator. Our Systems are designed to fit your lifestyle and allow you to seamlessly control all aspects of your home, including lighting, appliances, curtains and blinds, multi-room audio, security, digital surveillance and entertainment.</p>
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
							<li><a href="signin">Signin</a></li>
							<li><a href="contact">Contact</a></li>
						</ul>
					</div>
					<div class="col-md-3 sign-gd flickr-post">
						<h4>Our <span>Works</span></h4>
						<ul>
							<li><a href="single"><img src="images/AudioVideoSystem.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single"><img src="images/HomeAutomationSolution.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single"><img src="images/MoodLighting.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single"><img src="images/GSMalarmSystem.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single"><img src="images/SmartHomeSolution.jpeg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single"><img src="images/SkyHomeView.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single"><img src="images/WirelessEntry.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single"><img src="images/SmartHomeSolution.jpeg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single"><img src="images/SkyHomeView.jpg" alt=" " class="img-responsive" /></a></li>
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
									<p>+918805677986</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email Address</h6>
									<p>Email :<a href="mailto:skylarkautomation@gmail.com"> skylarkautomation@gmail.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Location</h6>
									<p>Business Hub AYI RESIDENCY, B T KAWADE ROAD, KOREGAON PARK, PUNE-411001, MAHARASHTRA

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

			<p class="copy-right"> <a href="http://w3layouts.com/"></a></p>
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
