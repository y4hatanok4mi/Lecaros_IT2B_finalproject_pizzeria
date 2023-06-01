<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Caren's Pizzeria</title>
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
			<script src="http://.php5shim.googlecode.com/svn/trunk/.php5.js"></script>
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
							<li><a href="cart..php">Your Cart</a></li>
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
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.jpg" alt="New products" >
				<h4><span>Menu Overview</span></h4>
			</section>
			<section class="main-content">

				<div class="row">
					<div class="span9">
						<ul class="thumbnails listing-products">
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>
									<a href="Pizzas/Classic Tuna.php"><img alt="" src="themes/images/Pizza Photos/Classic Tuna/Main.jpg"></a><br/>
									<a href="Pizzas/Classic Tuna.php" class="title">Classic Tuna</a><br/>
									<a href="#" class="category">Pizza cheese, Mozarella, tuna, white onion and black olives</a>
									<p class="price">₱260.00</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<a href="Pizzas/Supreme.php"><img alt="" src="themes/images/Pizza Photos/Supreme/Main.jpg"></a><br/>
									<a href="Pizzas/Supreme.php" class="title">Supreme</a><br/>
									<a href="#" class="category">Pepperoni, Beef, Sauteed pork, smoked ham, pineapple, bell pepper, white onion, black olives and mozarella cheese</a>
									<p class="price">₱399.00</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>
									<a href="Pizzas/Vegetarian.php"><img alt="" src="themes/images/Pizza Photos/Vegetarian/Main.jpg"></a><br/>
									<a href="Pizzas/Vegetarian.php" class="title">Vegetarian</a><br/>
									<a href="#" class="category">Sliced Tomato, Mushroom, Pineapple, White Onion, Bell Pepper, Black Olives and Mozarella Cheese</a>
									<p class="price">₱280.00</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>
									<a href="Pizzas/Beef and Mushroom.php"><img alt="" src="themes/images/Pizza Photos/Beef and Mushroom/Main.jpg"></a><br/>
									<a href="Pizzas/Beef and Mushroom.php" class="title">Beef and Mushroom</a><br/>
									<a href="#" class="category">Sauteed beef, Mozarella cheese Cheese</a>
									<p class="price">₱309.00</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>
									<p><a href="Pizzas/Peperoni.php"><img src="themes/images/Pizza Photos/Peperoni/Main.jpg" alt="" /></a></p>
									<a href="Pizzas/Peperoni.php" class="title">Peperoni</a><br/>
									<a href="Pizzas/Peperoni.php" class="category">Peperoni, Black Olives, and Mozarella</a>
									<p class="price">₱299.00</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>
									<p><a href="Pizzas/Italian Delight.php"><img src="themes/images/Pizza Photos/Italian Delight/Main.jpg" alt="" /></a></p>
									<a href="Pizzas/Italian Delight.php" class="title">Italian Delight</a><br/>
									<a href="Pizzas/Italian Delight.php" class="category">Salami, Smoked Ham, Mushroom, and Mozarella Cheese</a>
									<p class="price">₱299.00</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<p><a href="Pizzas/Hawaiiain Classic.php"><img src="themes/images/Pizza Photos/Hawaiiain Classic/Main.jpg" alt="" /></a></p>
									<a href="Pizzas/Hawaiiain Classic.php" class="title">Hawaiiain Classic</a><br/>
									<a href="products..php" class="category">All time favourite, Smoked Ham, Pineapple and Mozarella Cheese</a>
									<p class="price">₱260.00</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<p><a href="Pizzas/All Meat.php"><img src="themes/images/Pizza Photos/All Meat/Main.jpg" alt="" /></a></p>
									<a href="Pizzas/All Meat.php" class="title">All Meat</a><br/>
									<a href="products.php" class="category">Pepperoni, Beef, Sauteed Pork, Smoked Ham, Mushroom and Mozarella Cheese</a>
									<p class="price">₱328.00</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<a href="Pizzas/Ham and Cheese.php"><img alt="" src="themes/images/Pizza Photos/Ham and Cheese/Main.jpg"></a><br/>
									<a href="Pizzas/Ham and Cheese.php" class="title">Ham and Cheese</a><br/>
									<a href="#" class="category">Smoked Ham and Mozarella Cheese</a>
									<p class="price">₱260.00</p>
								</div>
							</li>
							
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>
									<a href="Pizzas/All Cheese.php"><img alt="" src="themes/images/Pizza Photos/All Cheese/Main.jpg"></a><br/>
									<a href="Pizzas/All Cheese.php" class="title">All Cheese</a><br/>
									<a href="#" class="category">Pizza Cheese, Mozarella and Parmesan</a>
									<p class="price">₱260.00</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>
									<a href="Pizzas/Smoked Ham and Mushroom.php"><img alt="" src="themes/images/Pizza Photos/Smoked Ham and Mushroom/Main.jpg"></a><br/>
									<a href="Pizzas/Smoked Ham and Mushroom.php" class="title">Smoked Ham and Mushroom</a><br/>
									<a href="#" class="category">Smoked Ham, Mushroom and Mozarella Cheese</a>
									<p class="price">₱260.00</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>
									<a href="Pizzas/Hawaiian Overload.php"><img alt="" src="themes/images/Pizza Photos/Hawaiian Overload/Main.jpg"></a><br/>
									<a href="Pizzas/Hawaiian Overload.php" class="title">Hawaiian Overload</a><br/>
									<a href="#" class="category">All time favourite, with smoked ham, pineapple, bell pepper amd mozarella cheese</a>
									<p class="price">₱299.00</p>
								</div>
							</li>
							
			

						</ul>
						<hr>
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
					</div>
					<div class="span3 col">	
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>
													<img alt="" src="themes/images/Pizza Photos/All Cheese/4.jpg"><br/>
													<a href="product_detail.php" class="title">All Cheese</a><br/>
													<a href="#" class="category">Pizza Cheese, Mozarella and Parmesan</a>
													<p class="price">₱260.00</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<img alt="" src="themes/images/Pizza Photos/Classic Tuna/1.jpg"><br/>
													<a href="product_detail.php" class="title">Classic Tuna</a><br/>
													<a href="#" class="category">Pizza cheese, Mozarella, tuna, white onion and black olives</a>
													<p class="price">₱260.00</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="block">
							<h4 class="title"><strong>Best</strong> Seller</h4>
							<ul class="small-product">
								<li>
									<a href="Pizzas/All Cheese.php" title="Praesent tempor sem sodales">
										<img src="themes/images/Pizza Photos/All Cheese/4.jpg" alt="Praesent tempor sem sodales">
									</a>
									<a href="Pizzas/All Cheese.php">All Cheese</a>
								</li>
								<li>
									<a href="Pizzas/All Meat.php" title="Luctus quam ultrices rutrum">
										<img src="themes/images/Pizza Photos/All Meat/1.jpg" alt="Luctus quam ultrices rutrum">
									</a>
									<a href="Pizzas/All Meat.php">All Meat</a>
								</li>
								<li>
									<a href="Pizzas/Peperoni.php" title="Fusce id molestie massa">
										<img src="themes/images/Pizza Photos/Peperoni/Main - Copy.jpg" alt="Fusce id molestie massa">
									</a>
									<a href="Pizzas/Peperoni.php">Pepperoni</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./home.php">Homepage</a></li>
							<li><a href="./about.php">About Us</a></li>
							<li><a href="./contact.php">Contac Us</a></li>
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
						<p><p>Checkout the best Pizza in town!!! Grab a bite and feel the greatness! 
				Always Great never Greasy!</p></p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>
				</div>
			</section>
			<section id="copyright">
				<span>Copyright 2023 All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
    </body>
</html>