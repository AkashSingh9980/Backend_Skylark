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
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/contact.css" rel="stylesheet" type="text/css" media="all" />
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
					<h1> <a class="navbar-brand" href="/"><i class="fa fa-clone" aria-hidden="true"></i> SKYLARK GROUP <span class="desc">AIM FOR SKY</span></a></h1>

				</div>
			</div>
			<!--<div id="navbar" class="navbar-collapse collapse">
				<div class="nav_right_top">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="request" href="contact">Send Request</a></li>

					</ul>-->
					<ul class="nav navbar-nav">
						<li><a href="/">Home</a></li>
						<li><a href="gallery">Gallery</a></li>
						<li><a href="career">Career</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Services <span class="caret"></span></a>
							<ul class="dropdown-menu">
								    <li><a href="packages">Packages</a></li>
                                    <li><a href="product">Products</a></li>
									<li><a href="services">Services</a>
							</ul>
							<li class="active"><a href="contact">Contact</a></li>
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
				<li>Contact</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!-- /inner_content -->
<div class="banner_bottom">
		<div class="container">
			<div class="mail_form">
				<h3 class="tittle-w3ls">Send Us a Message</h3>
				@if(session('status'))
					<div class="inner_sec_info_wthree_agile">
						<h3>
							{{session('status')}}
						</h3>
					</div>
				@else
						<div class="inner_sec_info_wthree_agile">
							<form action="{{url('contact')}}" method="post">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<span class="input input--chisato">
								<input class="input__field input__field--chisato" name="visitor_name" type="text" id="input-13" placeholder=" " required="" />
								<label class="input__label input__label--chisato" for="input-13">
									<span class="input__label-content input__label-content--chisato" data-content="Name">Name</span>
								</label>
								</span>
								<span class="input input--chisato">
								<input class="input__field input__field--chisato" name="visitor_email" type="email" id="input-14" placeholder=" " required="" />
								<label class="input__label input__label--chisato" for="input-14">
									<span class="input__label-content input__label-content--chisato" data-content="Email">Email</span>
								</label>
								</span>
								<span class="input input--chisato">
								<input class="input__field input__field--chisato" name="visitor_subject" type="text" id="input-15" placeholder=" " required="" />
								<label class="input__label input__label--chisato" for="input-15">
									<span class="input__label-content input__label-content--chisato" data-content="Subject">Subject</span>
								</label>
								</span>
								<textarea name="visitor_message" placeholder="Your comment here..." required=""></textarea>
								<input type="submit" value="Submit">
							</form>

						</div>
					</div>	
				</div>
				@endif
			
			<div class="inner_sec_info_wthree_agile">
           	<div class="col-md-8 map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172"
					    style="border:0"></iframe>
				</div>
				<div class="col-md-4 contact_grids_info">
					<div class="contact_grid">
						<div class="contact_grid_right">
							<h4> OFFICE 1</h4>
							<p>435 City hall,</p>
							<p>NewYork City SD092.</p>
						</div>
					</div>
					<div class="contact_grid">
						<div class="contact_grid_right">
							<h4> OFFICE 2</h4>
							<p>8088 Jasmine hall,</p>
							<p>NewYork City SD092.</p>
						</div>
					</div>
					<div class="contact_grid" data-aos="flip-up">

						<div class="contact_grid_right">
							<h4>OFFICE 3</h4>
							<p>436 Honey hall,</p>
							<p>NewYork City SD092.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<!-- footer -->
	@include('footer')
	<!-- //footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<!-- password-script -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
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



</body>

</html>
