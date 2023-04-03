<?php
	include("include/header.php");
	require_once("include/conn.php");
?>
<?php
	$cart = (isset($_SESSION['cart']))? $_SESSION['cart'] : [];

?>
	<style>
		.soluong {
			width: 80px;
			border-radius: 3px;
			border: 1px solid gray;
			margin-bottom: 10px;
		}

		.updateSL{
			width: 80px;
			border-radius: 3px;
			border: 1px solid #1accfd;
			margin-bottom: 10px;
			background-color: #1accfd;
			color: #fff;
		}

		.updateSL:hover{
			background: #2587c8;
			transition: 0.5s all;
			-webkit-transition: 0.5s all;
			-moz-transition: 0.5s all;
			-o-transition: 0.5s all;
			-ms-transition: 0.5s all;
			color: black;
		}
	</style>
	<!-- top-header -->
	
	<!-- //shop locator (popup) -->
	<!-- signin Model -->
	<!-- Modal1 -->
	
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
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
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->
	<div class="ban-top">
		
	<!-- //navigation -->
	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Cart</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Cart
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>ID</th>
								<th>Product</th>
								<th>Quality</th>
								<th>Product Name</th>

								<th>Price</th>
								<th>Total Price in Product</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$totalPrice = 0;
								$tt = 0;
							?>
							<?php 
								foreach($cart as $key => $value):
									$tt = $value['price'] * $value['quantity'];
									$totalPrice += $tt;
							?>
								<tr class="rem">
								<td class="invert"><?php echo $key ++ ?></td>
								<td class="invert-image">
									<a href="single.php?id=<?php echo $value['id'] ?>">
										<img src="images/a7.jpg" alt="" class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<form action="cartxuly.php">
											<input type="hidden" name="action" value="update">
											<input type="hidden" name='id' value="<?php echo $value['id']?>">
											<div class="quantity-select">
												<input class="soluong" type="number" name="quantity" value="<?php echo $value['quantity'] ?>">
												<button type="submit" class="updateSL">Update</button>
											</div>
										</form>
									</div>
								</td>
								<td class="invert"><?php echo $value['name'] ?></td>
								<td class="invert"><?php echo number_format($value['price']) ?> VND</td>
								<td class="invert"><?php echo number_format($tt) ?> VND</td>
								<td class="invert">
									<div class="rem">
										<a href="cartxuly.php?id=<?php echo $value['id']?>&action=delete">
											<div class="close1"></div>
										</a>
									</div>
								</td>
								
								
							</tr>
							<?php endforeach ?>
							<tr>
								<td colspan = "5">Total Price: </td>
								<td colspan = "2"><?php echo number_format($totalPrice)?> VND</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="checkout-right-basket" style="float:left">
				<a href="checkout.php">Proceed With Checkout
					<span class="fa fa-hand-o-right" aria-hidden="true"></span>
				</a>
			</div>
			<div class="checkout-right-basket" style="float:right">
				<a href="logout.php">Delete all in Cart
					<span class="fa fa-hand-o-right" aria-hidden="true"></span>
				</a>
			</div>
		</div>
	</div>
	<!-- //checkout page -->
	<!-- newsletter -->
	<!-- <div class="footer-top">
		<div class="container-fluid">
			<div class="col-xs-8 agile-leftmk">
				<h2>Get your Groceries delivered from local stores</h2>
				<p>Free Delivery on your first order!</p>
				<form action="#" method="post">
					<input type="email" placeholder="E-mail" name="email" required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="newsform-w3l">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
			</div>
			<div class="col-xs-4 w3l-rightmk">
				<img src="images/tab3.png" alt=" ">
			</div>
			<div class="clearfix"></div>
		</div>
	</div> -->
	<!-- //newsletter -->
	<!-- footer -->
<?php 
	include("include/footer.php");
?>