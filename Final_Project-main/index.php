<?php
	require_once("include/conn.php");
	include("include/header.php");
?>
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Save</span>
						</h3>
						<p>Get flat
							<span>10%</span> Cashback</p>
						<a class="button2" href="product.php">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Healthy
							<span>Saving</span>
						</h3>
						<p>Get Upto
							<span>30%</span> Off</p>
						<a class="button2" href="product.php">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Big
							<span>Deal</span>
						</h3>
						<p>Get Best Offer Upto
							<span>20%</span>
						</p>
						<a class="button2" href="product.php">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3>Today
							<span>Discount</span>
						</h3>
						<p>Get Now
							<span>40%</span> Discount</p>
						<a class="button2" href="product.php">Shop Now </a>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Our Top Products
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			<div class="side-bar col-md-3">
				<div class="search-hotel">
					<h3 class="agileits-sear-head">Search Here..</h3>
					<form action="#" method="post">
						<input type="search" placeholder="Product name..." name="search" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				<!-- price range -->
				<div class="range">
					<h3 class="agileits-sear-head">Price range</h3>
					<ul class="dropdown-menu6">
						<li>

							<div id="slider-range"></div>
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>
					</ul>
				</div>
				<!-- //price range -->
				
				<!-- reviews -->
				<div class="customer-rev left-side">
					<h3 class="agileits-sear-head">Customer Review</h3>
					<ul>
						<li>
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<span>5.0</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<span>4.0</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-half-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<span>3.5</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<span>3.0</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-half-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<span>2.5</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- //reviews -->
				
				<!-- deals -->
				<div class="deal-leftmk left-side">
					<h3 class="agileits-sear-head">Special Deals</h3>
					<?php 
							$sql = "SELECT * FROM tbl_product LIMIT 6";

							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_array($result)){

					?>
					<div class="special-sec1">
						<a href="single.php?id=<?php echo $row['productID']?>">
							<div class="col-xs-4 img-deals">
								<img src="images/<?php echo $row['productImage']?>" alt="" style="width:100%">
							</div>
							<div class="col-xs-8 img-deal1">
								<h3><?php echo $row['productName']?></h3>
								<a href="single.php"><?php echo $row['productPrice']?></a>
							</div>
						<div class="clearfix"></div>
						</a>
					</div>
					<?php } ?>
				</div>
				<!-- //deals -->
			</div>
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md-9">
				<div class="wrapper" >
					<!-- first section (nuts) -->
					<div class="product-sec1">
					<h3 class="heading-tittle">Vegetables</h3>
					<?php 
							$sql = "SELECT * FROM tbl_product LIMIT 3";

							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_array($result)){

					?>
					<div class="col-md-4 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="images/<?php echo $row['productImage']?>" alt="" style="width: 100%">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.php?id=<?php echo $row['productID']?>" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product ">
								<h4>
									<a href="single.php?id=<?php echo $row['productID']?>"><?php echo $row['productName']?></a>
								</h4>
								<div class="info-product-price">
									<span class="item_price"><?php echo number_format($row['productPrice'])?> VND</span>
									<del><?php echo number_format($row['productPrice'])?> VND</del>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
								<form action="cartxuly.php?id=<?php echo $row['productID']?>" method="post">
									<fieldset>
										<input type="hidden" name="name" value="<?php echo $row['productName']?>" />
										<input type="hidden" name="price" value="<?php echo $row['productPrice']?>"/>
										<input type="submit" name="addcart" value="Add to cart" class="button" />
									</fieldset>
								</form>
								</div>

							</div>
						</div>
					</div>
					<?php } ?>
					<div class="clearfix"></div>
					</div>
					<!-- //first section (nuts) -->
					<!-- second section (nuts special) -->
					<div class="product-sec1 product-sec2">
						<div class="col-xs-7 effect-bg">
							<h3 class="">Pure Energy</h3>
							<h6>Enjoy our all healthy Products</h6>
							<p>Get Extra 10% Off</p>
						</div>
						<h3 class="w3l-nut-middle">Nuts & Dry Fruits</h3>
						<div class="col-xs-5 bg-right-nut">
							<img src="images/nut1.png" alt="">
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- //second section (nuts special) -->
					<!-- third section (oils) -->
					<div class="product-sec1">

						<h3 class="heading-tittle">Oils</h3>
						<?php 
							$sql = "SELECT * FROM tbl_product LIMIT 3";

							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_array($result)){

					?>
					<div class="col-md-4 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
								<img src="images/<?php echo $row['productImage']?>" alt="" style="width: 100%">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.php?id=<?php echo $row['productID']?>" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product ">
								<h4>
									<a href="single.php?id=<?php echo $row['productID']?>"><?php echo $row['productName']?></a>
								</h4>
								<div class="info-product-price">
									<span class="item_price"><?php echo number_format($row['productPrice'])?> VND</span>
									<del><?php echo number_format($row['productPrice'])?> VND</del>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
								<form action="cartxuly.php?id=<?php echo $row['productID']?>" method="post">
									<fieldset>
										<input type="hidden" name="name" value="<?php echo $row['productName']?>" />
										<input type="hidden" name="price" value="<?php echo $row['productPrice']?>"/>
										<input type="submit" name="addcart" value="Add to cart" class="button" />
									</fieldset>
								</form>
								</div>

							</div>
						</div>
					</div>
					<?php } ?>
						<div class="clearfix"></div>
					</div>
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
					<div class="product-sec1">

						<h3 class="heading-tittle">Trai Cay</h3>
						<?php 
							$sql = "SELECT * FROM tbl_product LIMIT 3";

							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_array($result)){

					?>
					<div class="col-md-4 product-men">
						<div class="men-pro-item simpleCart_shelfItem">
							<div class="men-thumb-item">
							<img src="images/<?php echo $row['productImage']?>" alt="" style="width: 100%">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="single.php?id=<?php echo $row['productID']?>" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product ">
								<h4>
									<a href="single.php?id=<?php echo $row['productID']?>"><?php echo $row['productName']?></a>
								</h4>
								<div class="info-product-price">
									<span class="item_price"><?php echo number_format($row['productPrice'])?> VND</span>
									<del><?php echo number_format($row['productPrice'])?> VND</del>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
								<form action="cartxuly.php?id=<?php echo $row['productID']?>" method="post">
									<fieldset>
										<input type="hidden" name="name" value="<?php echo $row['productName']?>" />
										<input type="hidden" name="price" value="<?php echo $row['productPrice']?>"/>
										<input type="submit" name="addcart" value="Add to cart" class="button" />
									</fieldset>
								</form>
								</div>

							</div>
						</div>
					</div>
					<?php } ?>
						<div class="clearfix"></div>
					</div>
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
<?php 
include("include/footer.php");
?>