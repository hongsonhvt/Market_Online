<?php	
	require_once("include/conn.php");
	include("include/header.php");
?>
<style>
	.soluong {
		width: 40px;
		border-radius: 3px;
		border: 1px solid gray;
		margin-bottom: 10px;
	}

	.ratingOfUser{
    width: 94%;
    padding-top: 8px;
    padding-bottom: 40px;
    padding-left: 5%;
    padding-right: 10%;
    margin-left: 100px;
  }
  
  .heading {
    font-size: 25px;
    margin-right: 25px;
  }
  
  .fa {
    font-size: 25px;
  }
  
  .checked {
    color: orange;
  }
  
  /* Three column layout */
  .side {
    float: left;
    width: 15%;
    margin-top:10px;
  }
  
  .middle {
    margin-top:10px;
    float: left;
    width: 70%;
  }
  
  /* Place text to the right */
  .right {
    text-align: right;
  }
  
  /* Clear floats after the columns */
  .row-rating:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* The bar container */
  .bar-container {
    width: 100%;
    background-color: #f1f1f1;
    text-align: center;
    color: white;
  }
  
  /* Individual bars */
  .bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
  .bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
  .bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
  .bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
  .bar-1 {width: 15%; height: 18px; background-color: #f44336;}
  
  /* Responsive layout - make the columns stack on top of each other instead of next to each other */
  @media (max-width: 400px) {
    .side, .middle {
      width: 100%;
    }
    .right {
      display: none;
    }
  }
  
  @media screen and (max-width: 600px) {
    .productFeedback,
    .ratingOfUser{
        width: 100%;
    }
  }


  .medium-container{
    max-width: 1280px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
  }
  
  .display{
    display: block;
  }

.productFeedback{
    width: 94%;
    padding-top: 8px;
    padding-bottom: 40px;
    padding-left: 5%;
    padding-right: 10%;
    margin-left: 100px;
  }
  
  .productFeedback h2{
    display: block;
    border-left: #1accfd 4px solid;
    padding-left: 5px;
    font-size: 20px;
  }
  
  .productFeedback .input-feedback{
    padding: 5px;
    width: 100%;
  }
  
  .productFeedback .input-space{
    margin-bottom: 12px;
    margin-top: 12px;
    width: 5px;
  }
  
  .productFeedback .input-user{
    display: inline-block;
    margin-right: 10px;
    height: 48px;
    min-height: 48px;
    max-height: 48px;
    text-indent: 10px;
    width: 100%;
    margin-bottom: 5px;
  }
  
  .productFeedback .input-description{
    display: inline-block;
    width: 100%;
    height: 140px;
    margin-right: 10px;
    text-indent: 10px;
    margin-top: 5px;
  }
  
  .productFeedback .btn-submit{
    width: 100%;
    height: 48px;
    color: #fff ;
    background: #1accfd;
    border-radius: 6px;
    text-transform: uppercase;
    
  }
  
  .productFeedback .user-feedback {
    border-bottom: gray 1px solid;
    padding: 10px 0 5px;
    position: block;
  }
  
  .productFeedback .feedback-form{
    width: 100%;
    height: 50%;
    border: .5px solid #1accfd;
    border-radius: 5px;
    margin-top: 10px;
    margin-bottom: 4px;
  }
  
  
  .user-feedback b{
    font-size: 15px;
    display: block;
    margin-bottom: 3px;
  }
</style>
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
					<li>Single Page</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Single Page
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="col-md-5 single-right-left ">
				<?php

					$id = $_GET["id"]; // Get ID
					$sql = "SELECT * FROM tbl_product WHERE productID = '{$id}';"; // sql command
					$result = mysqli_query($conn, $sql);

					// Start While loop
					while($row = mysqli_fetch_assoc($result)){
				?>
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							<?php
								$id = $_GET["id"];
								$sql = "SELECT * FROM tbl_product_images WHERE productID = '{$id}' LIMIT 3";
								$query = mysqli_query($conn, $sql);

								while($image = mysqli_fetch_assoc($query)){
							?>
							<li data-thumb="images/<?php echo $row['productImage']?>">
								<div class="thumb-image">
									<img src="images/<?php echo $row['productImage']?>" data-imagezoom="true" class="img-responsive" alt="<?php echo $row['productImage']?>"> </div>
							</li>
							<?php } ?>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3>
					<?php echo $row['productName']?>
				</h3>
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
				<p>
					<span class="item_price"><? echo $row['productPrice']?></span>
					<del name="price">$<?php echo $row['productPrice']?></del>
					<label>Free delivery</label>
				</p>
				
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<form action="cartxuly.php" method="GET">
							<fieldset>
								<input type="hidden" name="id" value="<?php echo $row['productID']?>" />
								Quantity:
								<input type="number" class="soluong" value="1" name="quantity"/>
								<input type="submit" name="addcart" value="Add to cart" class="button" />
							</fieldset>
						</form>
					</div>
				</div>
				<div class="single-infoagile" style="margin-top:10px;">
					<ul>
						<li>
							Cash on Delivery Eligible.
						</li>
						<li>
							Shipping Speed to Delivery.
						</li>
						<li>
							Sold and fulfilled by Supple Tek (3.6 out of 5 | 8 ratings).
						</li>
						<li>
							1 offer from
							<span class="item_price">$950.00</span>
						</li>
					</ul>
				</div>
				<div class="product-single-w3l">
					<p>
						<i class="fa fa-hand-o-right" aria-hidden="true"></i>This is a
						<label>Vegetarian</label> product.</p>
					<ul>
						<li>
							None
						</li>
						<li>
							After cooking, Zeeba Basmati rice grains attain an extra ordinary length of upto 2.4 cm/~1 inch.
						</li>
						<li>
							Zeeba Basmati rice adheres to the highest food afety standards as your health is paramount to us.
						</li>
						<li>
							Contains only the best and purest grade of basmati rice grain of Export quality.
						</li>
					</ul>
					<p>
						<i class="fa fa-refresh" aria-hidden="true"></i>All food products are
						<label>non-returnable.</label>
					</p>
				</div>
					<?php

					} //End while

				?>
				
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>

	

	<!-- User Rating -->
	<div class="ratingOfUser">
		<div class="borderOfRating">
			<span class="heading">User Rating</span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span>
			<p>4.1 average based on 254 reviews.</p>
			<hr style="border:3px solid #f1f1f1">

			<div class="row-rating">
				<div class="side">
					<div>5 star</div>
				</div>
				<div class="middle">
				<div class="bar-container">
					<div class="bar-5"></div>
				</div>
				</div>
				<div class="side right">
				<div>150</div>
				</div>
				<div class="side">
				<div>4 star</div>
				</div>
				<div class="middle">
				<div class="bar-container">
				<div class="bar-4"></div>
				</div>
				</div>
				<div class="side right">
				<div>63</div>
				</div>
				<div class="side">
				<div>3 star</div>
				</div>
				<div class="middle">
				<div class="bar-container">
					<div class="bar-3"></div>
				</div>
				</div>
				<div class="side right">
				<div>15</div>
				</div>
				<div class="side">
				<div>2 star</div>
				</div>
				<div class="middle">
				<div class="bar-container">
					<div class="bar-2"></div>
				</div>
				</div>
				<div class="side right">
				<div>6</div>
				</div>
				<div class="side">
				<div>1 star</div>
				</div>
				<div class="middle">
				<div class="bar-container">
					<div class="bar-1"></div>
				</div>
				</div>
				<div class="side right">
				<div>20</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //User Rating -->

	<!-- User feedback -->
	<div class="productFeedback">
		<?php
			
			if(isset($_POST['feedback'])){
				$id = $_GET['id'];
				$name = $_POST['name'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$content = $_POST['content'];

				$sql = "INSERT INTO tbl_feedback (feedbackContent ,customerName, customerPhone, customerEmail, productID)
						VALUES ('$content','$name', '$phone', '$email', '$id');";

				$query = mysqli_query($conn, $sql);
				if($query){
					echo "Add Success";
				} else {
					echo "Add fail";
				}
			}

			$id = $_GET['id'];
			$sql = "SELECT * FROM tbl_feedback WHERE productID = '{$id}' LIMIT 1";
			$query = mysqli_query($conn, $sql);
			while($row1 = mysqli_fetch_assoc($query)){
		?>
		<h2>Feedback</h2>
		<form id="show_form" method="post" name="feedback">
			<div class="input-feedback">
				<label name="id" value="<?php echo $row1['productID']?>"></label>
				<textarea type ="text" cols="30" rows="10" class="input-description" placeholder="Input your feedback" name="content"></textarea>
				<input type="text" class="input-user" placeholder="Input name" name="name">
				<input type="number" class="input-user" placeholder="Input phone number" name="phone">
				<input type="email" class="input-user" placeholder="Input Email" name="email">
				<button type="submit" name="feedback" class="btn-submit">FeedBack</button>
			</div>
		</form>

		<?php
				
			}

		?>

		<?php
			$sql2 = "SELECT * FROM tbl_feedback WHERE productID = '{$id}';";
			$query2 = mysqli_query($conn, $sql2);

			while($feedback = mysqli_fetch_assoc($query2)){
		?>

		<div class="user-feedback">

			<b>
				<?php echo $feedback['customerName']?>
			</b>
			<p class="cUser-feedback">
				<?php echo $feedback['feedbackContent']?>
			</p>
		</div>
		
		<?php
					
			}

		?>
	</div>
	<!-- //User feedback -->
	<!-- //Single Page -->

	<!-- special offers -->
	<div class="featured-section" id="projects">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Add More
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="content-bottom-in">
				<ul id="flexiselDemo1">
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="single.php">
									<img src="images/s1.jpg" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="single.php">Aashirvaad, 5g</a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>$220.00</h6>
									<p>Save $40.00</p>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="Aashirvaad, 5g" />
											<input type="hidden" name="amount" value="220.00" />
											<input type="hidden" name="discount_amount" value="1.00" />
											<input type="hidden" name="currency_code" value="USD" />
											<input type="hidden" name="return" value=" " />
											<input type="hidden" name="cancel_return" value=" " />
											<input type="submit" name="submit" value="Add to cart" class="button" />
										</fieldset>
									</form>

									
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="single.php">
									<img src="images/s4.jpg" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="single.php">Kissan Tomato Ketchup, 950g</a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>$99.00</h6>
									<p>Save $20.00</p>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="Kissan Tomato Ketchup, 950g" />
											<input type="hidden" name="amount" value="99.00" />
											<input type="hidden" name="discount_amount" value="1.00" />
											<input type="hidden" name="currency_code" value="USD" />
											<input type="hidden" name="return" value=" " />
											<input type="hidden" name="cancel_return" value=" " />
											<input type="submit" name="submit" value="Add to cart" class="button" />
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="single.php">
									<img src="images/s2.jpg" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="single.php">Madhur Pure Sugar, 1g</a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>$69.00</h6>
									<p>Save $20.00</p>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="Madhur Pure Sugar, 1g" />
											<input type="hidden" name="amount" value="69.00" />
											<input type="hidden" name="discount_amount" value="1.00" />
											<input type="hidden" name="currency_code" value="USD" />
											<input type="hidden" name="return" value=" " />
											<input type="hidden" name="cancel_return" value=" " />
											<input type="submit" name="submit" value="Add to cart" class="button" />
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="single2.php">
									<img src="images/s3.jpg" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="single2.php">Surf Excel Liquid, 1.02L</a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>$187.00</h6>
									<p>Save $30.00</p>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="Surf Excel Liquid, 1.02L" />
											<input type="hidden" name="amount" value="187.00" />
											<input type="hidden" name="discount_amount" value="1.00" />
											<input type="hidden" name="currency_code" value="USD" />
											<input type="hidden" name="return" value=" " />
											<input type="hidden" name="cancel_return" value=" " />
											<input type="submit" name="submit" value="Add to cart" class="button" />
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="single.php">
									<img src="images/s8.jpg" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="single.php">Cadbury Choclairs, 655.5g</a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>$160.00</h6>
									<p>Save $60.00</p>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="Cadbury Choclairs, 655.5g" />
											<input type="hidden" name="amount" value="160.00" />
											<input type="hidden" name="discount_amount" value="1.00" />
											<input type="hidden" name="currency_code" value="USD" />
											<input type="hidden" name="return" value=" " />
											<input type="hidden" name="cancel_return" value=" " />
											<input type="submit" name="submit" value="Add to cart" class="button" />
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="single2.php">
									<img src="images/s6.jpg" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="single2.php">Fair & Lovely, 80 g</a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>$121.60</h6>
									<p>Save $30.00</p>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="Fair & Lovely, 80 g" />
											<input type="hidden" name="amount" value="121.60" />
											<input type="hidden" name="discount_amount" value="1.00" />
											<input type="hidden" name="currency_code" value="USD" />
											<input type="hidden" name="return" value=" " />
											<input type="hidden" name="cancel_return" value=" " />
											<input type="submit" name="submit" value="Add to cart" class="button" />
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="single.php">
									<img src="images/s5.jpg" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="single.php">Sprite, 2.25L (Pack of 2)</a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>$180.00</h6>
									<p>Save $30.00</p>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="Sprite, 2.25L (Pack of 2)" />
											<input type="hidden" name="amount" value="180.00" />
											<input type="hidden" name="discount_amount" value="1.00" />
											<input type="hidden" name="currency_code" value="USD" />
											<input type="hidden" name="return" value=" " />
											<input type="hidden" name="cancel_return" value=" " />
											<input type="submit" name="submit" value="Add to cart" class="button" />
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l-specilamk">
							<div class="speioffer-agile">
								<a href="single2.php">
									<img src="images/s9.jpg" alt="">
								</a>
							</div>
							<div class="product-name-w3l">
								<h4>
									<a href="single2.php">Lakme Eyeconic Kajal, 0.35 g</a>
								</h4>
								<div class="w3l-pricehkj">
									<h6>$153.00</h6>
									<p>Save $40.00</p>
								</div>
								<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
									<form action="#" method="post">
										<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="Lakme Eyeconic Kajal, 0.35 g" />
											<input type="hidden" name="amount" value="153.00" />
											<input type="hidden" name="discount_amount" value="1.00" />
											<input type="hidden" name="currency_code" value="USD" />
											<input type="hidden" name="return" value=" " />
											<input type="hidden" name="cancel_return" value=" " />
											<input type="submit" name="submit" value="Add to cart" class="button" />
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //special offers -->
<?php
include("include/footer.php");	
?>