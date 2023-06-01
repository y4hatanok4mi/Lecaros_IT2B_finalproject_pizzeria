<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Caren's Pizzeria</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. Hawaiian">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">My Account</a></li>
							<li><a href="cart.php">Your Cart</a></li>
							<li><a href="checkout.php">Checkout</a></li>					
							<li><a href="logout.php">Logout</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="home.php" class="logo pull-left"><img src="themes/images/pizzeria-logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.php">Best Seller</a></li>
							<li><a href="./data.php">Pricelist</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/banner-3.jpg" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/banner-4.jpg" alt="" />
							<div class="intro">
								<h1>Mid summer sale</h1>
								<p><span>Up to 30% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			<section class="header_text">
				<h3 class="display-4 ">Welcome, <?=$_SESSION['fname']?></h3>
				Checkout the best Pizza in town!!! Grab a bite and feel the greatness! 
				<br/>Always Great never Greasy!
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Popular <strong>Picks</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="Pizzas/Classic Tuna.php"><img src="themes/images/Pizza Photos/Classic Tuna/Main.jpg" alt="" /></a></p>
														<a href="Pizzas/Classic Tuna.php" class="title">Classic Tuna</a><br/>
														<a href="products.php" class="category"></a>
														<p class="price">₱260.00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="Pizzas/Supreme.php"><img src="themes/images/Pizza Photos/Supreme/Main.jpg" alt="" /></a></p>
														<a href="Pizzas/Supreme.php" class="title">Supreme</a><br/>
														<a href="products.php" class="category"></a>
														<p class="price">₱339.00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="Pizzas/Vegetarian.php"><img src="themes/images/Pizza Photos/Vegetarian/Main.jpg" alt="" /></a></p>
														<a href="Pizzas/Vegetarian.php" class="title">Vegetarian</a><br/>
														<a href="products.php" class="category"></a>
														<p class="price">₱280.00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="Pizzas/Beef and Mushroom.php"><img src="themes/images/Pizza Photos/Beef and Mushroom/Main.jpg" alt="" /></a></p>
														<a href="Pizzas/Beef and Mushroom.php" class="title">Beef and Mushroom</a><br/>
														<a href="products.php" class="category"></a>
														<p class="price">₱309.00</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="Pizzas/All Cheese.php"><img src="themes/images/Pizza Photos/All Cheese/Main.jpg" alt="" /></a></p>
														<a href="Pizzas/All Cheese.php" class="title">All Cheese</a><br/>
														<a href="products.php" class="category"></a>
														<p class="price">₱260.00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="Pizzas/All Meat.php"><img src="themes/images/Pizza Photos/All Meat/Main.jpg" alt="" /></a></p>
														<a href="Pizzas/All Meat.php" class="title">All Meat</a><br/>
														<a href="products.php" class="category"></a>
														<p class="price">₱328.00</p>
													</div>
												</li>
																																												
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">All <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="Pizzas/Ham and Cheese.php"><img alt="" src="themes/images/Pizza Photos/Ham and Cheese/Main.jpg"></a><br/>
														<a href="Ham and Cheese.php" class="title">Ham and Cheese</a><br/>
														<a href="#" class="category">Smoked ham and Mozarella Cheese</a>
														<p class="price">₱260.00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">												
														<a href="Pizzas/Peperoni.php"><img alt="" src="themes/images/Pizza Photos/Peperoni/Main.jpg"></a><br/>
														<a href="Pizzas/Peperoni.php" class="title">Pepperoni</a><br/>
														<a href="#" class="category">Pepperoni, Black Olives and Mozarella</a>
														<p class="price">₱299.00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="Pizzas/Hawaiian Overload.php"><img alt="" src="themes/images/Pizza Photos/Hawaiian Overload/Main.jpg"></a><br/>
														<a href="Pizzas/Hawaiian Overload.php" class="title">Hawaiian Overload</a><br/>
														<a href="#" class="category">Smoked ham, pineapple, bell pepper and mozarella cheese</a>
														<p class="price">₱299.00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="Pizzas/Italian Delight.php"><img alt="" src="themes/images/Pizza Photos/Italian Delight/Main.jpg"></a><br/>
														<a href="Pizzas/Italian Delight.php" class="title">Italian Delight</a><br/>
														<a href="#" class="category">Smoked ham and Mozarella Cheese</a>
														<p class="price">₱299.00</p>
													</div>
												</li>
												
												
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="Pizzas/Ham and Cheese.php"><img alt="" src="themes/images/Pizza Photos/Ham and Cheese/Main.jpg"></a><br/>
														<a href="Pizzas/Ham and Cheese.php" class="title">Ham and Cheese</a><br/>
														<a href="#" class="category">Smoked ham and Mozarella Cheese</a>
														<p class="price">₱260.00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">												
														<a href="Pizzas/Peperoni.php"><img alt="" src="themes/images/Pizza Photos/Peperoni/Main.jpg"></a><br/>
														<a href="Pizzas/Peperoni.php" class="title">Pepperoni</a><br/>
														<a href="#" class="category">Pepperoni, Black Olives and Mozarella</a>
														<p class="price">₱299.00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="Pizzas/Hawaiian Overload.php"><img alt="" src="themes/images/Pizza Photos/Hawaiian Overload/Main.jpg"></a><br/>
														<a href="Pizzas/Hawaiian Overload.php" class="title">Hawaiian Overload</a><br/>
														<a href="#" class="category">Smoked ham, pineapple, bell pepper and mozarella cheese</a>
														<p class="price">₱299.00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="Pizzas/Italian Delight.php"><img alt="" src="themes/images/Pizza Photos/Italian Delight/Main.jpg"></a><br/>
														<a href="Pizzas/Italian Delight.php" class="title">Italian Delight</a><br/>
														<a href="#" class="category">Smoked ham and Mozarella Cheese</a>
														<p class="price">₱299.00</p>
													</div>
												</li>
																																												
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4><strong>24/7 LIVE </strong>SUPPORT</h4>
																
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>FAST <strong>SHIPPING</strong></h4>
										
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4> <strong>HEALTHY</strong></h4>
										
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>  
							<li><a href="./about.php">About Us</a></li>
							<li><a href="./contact.php">Contact Us</a></li>
							<li><a href="./cart.php">Your Cart</a></li>
							<li><a href="logout.php">Logout</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/pizzeria-logo.png" class="site_logo" alt=""></p>
						<p>Checkout the best Pizza in town!!! Grab a bite and feel the greatness! 
				<br/>Always Great never Greasy!</p>
						<br/>
					
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2023 All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>