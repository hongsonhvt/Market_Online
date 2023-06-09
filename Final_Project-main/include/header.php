<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Online Shop</title>

	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->

	<link href="./css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">

	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->

	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">

	<!-- flexslider -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />


	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href="css/single-product.css" rel="stylesheet">
	<!-- Cusprofile -->
	<link rel="stylesheet" href="./css/cusprofile.css" />
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
	<!-- voucher -->
	<!-- <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'> -->
	<link rel="stylesheet" href="./css/voucher.css" />
	<link rel="stylesheet" href="./css/wallet.css" />
	<link rel="stylesheet" href="./css/getVoucher.css" />
	<link rel="stylesheet" href="./css/editCus.css" />
	
</head>

<body>
	<?php 
		session_start();
	?>
	<!-- top-header -->
	<div class="header-most-top">
		<p>===================Just Buy Something You Need===================</p>
	</div>
	<!-- //top-header -->

	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="index.php">
						<!-- <span>S</span>KT
						<span>T</span>1 -->
						<img src="images/c9.png" alt=" " style="width: 115px;height: 100px;">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					<li>
					<a href="cusprofile.php"  >
							<span class="fas fa-user" aria-hidden="true"></span>My Account</a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#signIn">
							<span class="fa fa-truck" aria-hidden="true"></span>Track Order</a>
					</li>
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span> 001 234 5678
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#signIn">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#signUp">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
					</li>
				</ul>
				<!-- //header lists -->

				<!-- search -->
				<div class="agileits_search">
					<form action="#" method="post">
						<input name="Search" type="search" placeholder="How can we help you today?" required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
				<!-- //search -->

				<!-- cart details -->
				<div class="top_nav_right">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
						<form action="cart.php" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="w3view-cart" type="submit" name="submit" value="" >
								<i class="fa fa-cart-arrow-down" aria-hidden="true" ></i>
							</button>
						</form>
					</div>
				</div>
				<!-- //cart details -->

				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<!-- signin Model -->
	<!-- signIn -->
	<div class="modal fade" id="signIn" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In </h3>
						
						<p>
							Sign In now, Let's start your Grocery Shopping. Don't have an account?
							<a href="#" data-toggle="modal" data-target="#signUp">
								Sign Up Now</a>
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							<button type="submit" class= "btn"><img> Sign In</button>
							<!-- <input type="submit" value="Sign In">
							<input type="submit"  value=" Google"> -->
							<button type="submit" class= "btn"><i class="fab fa-google"></i> Google</button>
							<button type="submit" class= "btn"><i class="fab fa-facebook"></i> Facebook</button>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //signIn -->
	<!-- //signin Model -->

	<!-- signup Model -->
	<!-- signUp -->
	<div class="modal fade" id="signUp" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up</h3>
						<p>
							Come join the Grocery Shoppy! Let's set up your Account.
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="Email" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" id="password1" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
							</div>
							<input type="submit" value="Sign Up">
						</form>
						<p>
							<a href="#">By clicking register, I agree to your terms</a>
						</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //signUp -->
	<!-- //signup Model -->

	<!-- //header-bot -->

	<!-- navigation -->
	<div class="ban-top">
		<div class="container">
			<div class="agileits-navi_search">
				<form action="#" method="post">
					<select id="agileinfo-nav_search" name="agileinfo_search" required="">
						<option value="">All Categories</option>
						<option value="Kitchen">Kitchen</option>
						<option value="Household">Household</option>
						<option value="Snacks &amp; Beverages">Snacks & Beverages</option>
						<option value="Personal Care">Personal Care</option>
						<option value="Gift Hampers">Gift Hampers</option>
						<option value="Fruits &amp; Vegetables">Fruits & Vegetables</option>
						<option value="Baby Care">Baby Care</option>
						<option value="Soft Drinks &amp; Juices">Soft Drinks & Juices</option>
						<option value="Frozen Food">Frozen Food</option>
						<option value="Bread &amp; Bakery">Bread & Bakery</option>
						<option value="Sweets">Sweets</option>
					</select>
				</form>
			</div>
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="">
									<a class="nav-stylehead" href="index.php">Home
									</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href="about.php">About Us</a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kitchen
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-4 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														<a href="product.php">Bakery</a>
													</li>
													<li>
														<a href="product.php">Baking Supplies</a>
													</li>
													<li>
														<a href="product.php">Coffee, Tea & Beverages</a>
													</li>
													<li>
														<a href="product.php">Dried Fruits, Nuts</a>
													</li>
													<li>
														<a href="product.php">Sweets, Chocolate</a>
													</li>
													<li>
														<a href="product.php">Spices & Masalas</a>
													</li>
													<li>
														<a href="product.php">Jams, Honey & Spreads</a>
													</li>
												</ul>
											</div>
											<div class="col-sm-4 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														<a href="product.php">Pickles</a>
													</li>
													<li>
														<a href="product.php">Pasta & Noodles</a>
													</li>
													<li>
														<a href="product.php">Rice, Flour & Pulses</a>
													</li>
													<li>
														<a href="product.php">Sauces & Cooking Pastes</a>
													</li>
													<li>
														<a href="product.php">Snack Foods</a>
													</li>
													<li>
														<a href="product.php">Oils, Vinegars</a>
													</li>
													<li>
														<a href="product.php">Meat, Poultry & Seafood</a>
													</li>
												</ul>
											</div>
											<div class="col-sm-4 multi-gd-img">
												<img src="images/nav.png" alt="">
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Household
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-6 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														<a href="product2.php">Kitchen & Dining</a>
													</li>
													<li>
														<a href="product2.php">Detergents</a>
													</li>
													<li>
														<a href="product2.php">Utensil Cleaners</a>
													</li>
													<li>
														<a href="product2.php">Floor & Other Cleaners</a>
													</li>
													<li>
														<a href="product2.php">Disposables, Garbage Bag</a>
													</li>
													<li>
														<a href="product2.php">Repellents & Fresheners</a>
													</li>
													<li>
														<a href="product2.php"> Dishwash</a>
													</li>
												</ul>
											</div>
											<div class="col-sm-6 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														<a href="product2.php">Pet Care</a>
													</li>
													<li>
														<a href="product2.php">Cleaning Accessories</a>
													</li>
													<li>
														<a href="product2.php">Pooja Needs</a>
													</li>
													<li>
														<a href="product2.php">Crackers</a>
													</li>
													<li>
														<a href="product2.php">Festive Decoratives</a>
													</li>
													<li>
														<a href="product2.php">Plasticware</a>
													</li>
													<li>
														<a href="product2.php">Home Care</a>
													</li>
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li class="">
									<a class="nav-stylehead" href="#">Food</a>
								</li>
								<li class="dropdown">
									<a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Pages
										<b class="caret"></b>
									</a>
									<!-- <ul class="dropdown-menu agile_short_dropdown">
										<li>
											<a href="icons.php">Web Icons</a>
										</li>
										<li>
											<a href="typography.php">Typography</a>
										</li>
									</ul> -->
								</li>
								<li class="">
									<a class="nav-stylehead" href="contact.php">Contact</a>
								</li>
								
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->