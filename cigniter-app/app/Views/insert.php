<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="public/template/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="public/template/css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="public/template/css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="public/template/css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="public/template/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="public/template/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="public/template/css/owl.carousel.min.css">
	<link rel="stylesheet" href="public/template/css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="public/template/css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="public/template/fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="public/template/css/style.css">

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="index.html">Marelbo</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
			            <form action="#" class="search-wrap">
			               <div class="form-group">
			                  <input type="search" class="form-control search" placeholder="Search">
			                  <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
			               </div>
			            </form>
			         </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li class="active"><a href="/">Acasa</a></li>
								<?php 
									if(isset($user))
									{
								?>
								<li><a href="/insert">Insert</a></li>
								<?php
							}
							?>
								<li><a href="/despre">Despre</a></li>
								<?php
								if(isset($user))
								{
								
								?>
								<li><a href="/">Profil:<?php echo $user; ?></a></li>
								<li><a href="/logout">Logout</a></li>
								<?php
								}
								else
								{ 
								?>
								<li><a href="/register">Register</a></li>
								<li><a href="/login">Login</a></li>
								<?php
								}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
										</div>
									</div>
									<div class="item">
										<div class="col">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(public/imagini/PantofiDama1.png);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(public/imagini/PantofiDama2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(public/imagini/PantofiDama3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		

		<div class="row">
            <div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="contact-wrap">
					<h3>Inserare Pantofi</h3>
					<form action="/insertpantofi" enctype="multipart/form-data" method='POST'class="contact-form">
						<div class="row">
							
							<div class="col-sm-12">
								<div class="form-group">
									<label for="nume">Nume</label>
									<input name="nume" type="text" id="nume" class="form-control" placeholder="Introduceti numele" required>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="marime">Marime</label>
									<input name="marime" type="text" id="marime" class="form-control" placeholder="Introduceti marimea!" required>
								</div>
							</div>
                            <div class="col-sm-12">
								<div class="form-group">
									<label for="pret">Pret</label>
									<input name="pret" type="text" id="pret" class="form-control" placeholder="Introduceti pretul!" required>
								</div>
							</div>
                            <div class="form-check mt-2">
                            <?php
                                $image = [
                                    'name'  => 'image',
                                    'id'    => 'image',
                                    'type'  => 'file',
                                ];

                                helper('form');
                                echo "<label for='content'>Image: </label><br>";
                                echo form_upload($image);
                            ?>
                            </div>
                            <br>
							<div class="w-100"></div>
							<div class="col-sm-12">
								<div class="form-group">
									<input type="submit" value="Insereaza" class="btn btn-primary">
								</div>
							</div>
						</div>
					</form>		
				</div>
			</div>
			<div class="col-md-6">
				<div id="map" class="colorlib-map"></div>		
			</div>
		</div>
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col footer-col colorlib-widget">
						<h4>About Footwear</h4>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Customer Care</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Contact</a></li>
								<li><a href="#">Returns/Exchange</a></li>
								<li><a href="#">Gift Voucher</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Special</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Site maps</a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">About us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Order Tracking</a></li>
							</ul>
						</p>
					</div>

					<div class="col footer-col">
						<h4>News</h4>
						<ul class="colorlib-footer-links">
							<li><a href="blog.html">Blog</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Exhibitions</a></li>
						</ul>
					</div>

					<div class="col footer-col">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="#">yoursite.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p>
							<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
							<span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="public/template/js/jquery.min.js"></script>
   <!-- popper -->
   <script src="public/template/js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="public/template/js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="public/template/js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="public/template/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="public/template/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="public/template/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="public/template/js/jquery.magnific-popup.min.js"></script>
	<script src="public/template/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="public/template/js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="public/template/js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="public/template/js/main.js"></script>

	</body>
</html>

