<?php 
include("include/header.php");
require_once("include/conn.php");
?>
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
					<li>Check Out</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- payment page-->
	<div class="privacy">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Check Out
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<div class="checkout-left">
			<?php 
                if(isset($_POST['add'])){
                    $id = rand(0,100) ;
                    $name = $_POST['name'];
                    $paytype =$_POST['paytype'];
					
					$address = $_POST['address'];
					$phone =$_POST['phone'];                   
                                        

                    $sql = "INSERT INTO tbl_order (orderID, customerName, paytypeID, customerAddress, customerPhone
					  ) 
                    VALUES ('$id' , '$name' , '$paytype','$address','$phone')";
                    $query = mysqli_query($conn, $sql);
                    if($query){
                    echo "<script>alert('Add Success')</script>";
                    echo "<script>window.open('checkout.php','_self')</script>";
                    } else {
                            	echo "Add fail";
                            }
                }
            ?>
				<div class="checkOutInput">
					<h4>Add a new details</h4>

					<form method='POST'>
						<div class="inputInfo">
							<div class="txtText">
								Full Name
							</div>
							<input type="text" placeholder="Input your name" id="name" name="name" class="inputBox">
							<div class="txtText">
								Your phone number
							</div>
							<input type="text" id="phone" name="phone" placeholder="Input your phone number" class="inputBox">
						</div>
						<div class="address">
							<div class="txtText">
								Address
							</div>
							<input type="text" id="address" placeholder="Address" name="address" class="inputBox">
						</div>
						<div class="address">
						<?php
                                                        $paytype = mysqli_query($conn, "SELECT * FROM tbl_payment_type");
                                                    ?>
                                                    <select id="paytype" class="form-control" name="paytype">
                                                        <?php foreach ($paytype as $key => $value) {?>
                                                            <option value="<?php echo $value['paytypeID']?>"><?php echo $value['paytypeName']?></option>
                                                        <?php } ?>
                                                    </select>
						</div>
						<div class="clearfix"></div>
						<div class="extraNotes">
								<div class="txtText">
									Extra Notes (Optional)
								</div>
							<textarea name="text" id="extraNotes" class="inputNotes" placeholder="Input your notes"></textarea>
						</div>
				<div class="row-voucher-checkout  p-2 bg-white border-voucher rounded mt-2">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="./images/voucher1.png"></div>
                <div class="col-md-6 mt-1">
                <h5 class="voucher__Name">Voucher giảm 60%</h5>
                    <div class="d-flex flex-row-voucher ">
                    <div class="ratings mr-2">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div><span></span>
                    <p class="text-justify text-truncate para mb-0">Có Hiệu Lực Từ: 18.10.2021 00:00<br><br></p>    
                    </div>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row-voucher  align-items-center">
                       <!--  <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span> -->
                    </div>
                    <h6 class="text-success"></h6>
                    <div class="d-flex flex-column mt-4">
                        
                        <button class="btn-voucher btn-outline-primary btn-sm mt-2" type="button">Condition</button>
                    </div>
                </div>
            </div>
						
						
						<div class="totalPrices">
							Total: 10,000,000 $$$
						</div>
						<div class="clearfix"></div>
						<div class="applyCoupon">
							<button class="btnAddCoupon">Apply Voucher</button>
							
						</div>
										<div class ="row">
                                            <div class="col-lg-2">
                                                <div class="mb-2">
                                                    <button class="btn btn-primary btn-sm" type="submit" name="add">Add Account</button>
                                                </div>
                                            </div>
                                        </div>
					</form>
					
				</div>
				
				<div class="clearfix"> </div>
				
			</div>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4>Select a payment method</h4>
				<!--Horizontal Tab-->
				<div id="parentHorizontalTab">
					<ul class="resp-tabs-list hor_1">
						<li>Cash on delivery (COD)</li>
						<li>Paypal Account</li>
					</ul>
					<div class="resp-tabs-container hor_1">

						<div>
							<div class="vertical_post check_box_agile">
								<h5>COD</h5>
								<div class="checkbox">
									<div class="check_box_one cashon_delivery">
										<label class="anim">
											<input type="checkbox" class="checkbox">
											<span> We also accept Credit/Debit card on delivery. Please Check with the agent.</span>
										</label>
									</div>

								</div>
							</div>
						</div>
						<div>
							<form action="#" method="post" class="creditly-card-form agileinfo_form">
								<div class="creditly-wrapper wthree, w3_agileits_wrapper">
									<div class="credit-card-wrapper">
										<div class="first-row form-group">
											<div class="controls">
												<label class="control-label">Name on Card</label>
												<input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
											</div>
											<div class="w3_agileits_card_number_grids">
												<div class="w3_agileits_card_number_grid_left">
													<div class="controls">
														<label class="control-label">Card Number</label>
														<input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
														    autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
													</div>
												</div>
												<div class="w3_agileits_card_number_grid_right">
													<div class="controls">
														<label class="control-label">CVV</label>
														<input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
													</div>
												</div>
												<div class="clear"> </div>
											</div>
											<div class="controls">
												<label class="control-label">Expiration Date</label>
												<input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
											</div>
										</div>
										<button class="submit">
											<span>Make a payment </span>
										</button>
									</div>
								</div>
							</form>

						</div>
						<div>
							<div class="vertical_post">
								<form action="#" method="post">
									<h5>Select From Popular Banks</h5>
									<div class="swit-radio">
										<div class="check_box_one">
											<div class="radio_one">
												<label>
													<input type="radio" name="radio" checked="">
													<i></i>Syndicate Bank</label>
											</div>
										</div>
										<div class="check_box_one">
											<div class="radio_one">
												<label>
													<input type="radio" name="radio">
													<i></i>Bank of Baroda</label>
											</div>
										</div>
										<div class="check_box_one">
											<div class="radio_one">
												<label>
													<input type="radio" name="radio">
													<i></i>Canara Bank</label>
											</div>
										</div>
										<div class="check_box_one">
											<div class="radio_one">
												<label>
													<input type="radio" name="radio">
													<i></i>ICICI Bank</label>
											</div>
										</div>
										<div class="check_box_one">
											<div class="radio_one">
												<label>
													<input type="radio" name="radio">
													<i></i>State Bank Of India</label>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
									<h5>Or Select Other Bank</h5>
									<div class="section_room_pay">
										<select class="year">
											<option value="">=== Other Banks ===</option>
											<option value="ALB-NA">Allahabad Bank NetBanking</option>
											<option value="ADB-NA">Andhra Bank</option>
											<option value="BBK-NA">Bank of Bahrain and Kuwait NetBanking</option>
											<option value="BBC-NA">Bank of Baroda Corporate NetBanking</option>
											<option value="BBR-NA">Bank of Baroda Retail NetBanking</option>
											<option value="BOI-NA">Bank of India NetBanking</option>
											<option value="BOM-NA">Bank of Maharashtra NetBanking</option>
											<option value="CSB-NA">Catholic Syrian Bank NetBanking</option>
											<option value="CBI-NA">Central Bank of India</option>
											<option value="CUB-NA">City Union Bank NetBanking</option>
											<option value="CRP-NA">Corporation Bank</option>
											<option value="DBK-NA">Deutsche Bank NetBanking</option>
											<option value="DCB-NA">Development Credit Bank</option>
											<option value="DC2-NA">Development Credit Bank - Corporate</option>
											<option value="DLB-NA">Dhanlaxmi Bank NetBanking</option>
											<option value="FBK-NA">Federal Bank NetBanking</option>
											<option value="IDS-NA">Indusind Bank NetBanking</option>
											<option value="IOB-NA">Indian Overseas Bank</option>
											<option value="ING-NA">ING Vysya Bank (now Kotak)</option>
											<option value="JKB-NA">Jammu and Kashmir NetBanking</option>
											<option value="JSB-NA">Janata Sahakari Bank Limited</option>
											<option value="KBL-NA">Karnataka Bank NetBanking</option>
											<option value="KVB-NA">Karur Vysya Bank NetBanking</option>
											<option value="LVR-NA">Lakshmi Vilas Bank NetBanking</option>
											<option value="OBC-NA">Oriental Bank of Commerce NetBanking</option>
											<option value="CPN-NA">PNB Corporate NetBanking</option>
											<option value="PNB-NA">PNB NetBanking</option>
											<option value="RSD-DIRECT">Rajasthan State Co-operative Bank-Debit Card</option>
											<option value="RBS-NA">RBS (The Royal Bank of Scotland)</option>
											<option value="SWB-NA">Saraswat Bank NetBanking</option>
											<option value="SBJ-NA">SB Bikaner and Jaipur NetBanking</option>
											<option value="SBH-NA">SB Hyderabad NetBanking</option>
											<option value="SBM-NA">SB Mysore NetBanking</option>
											<option value="SBT-NA">SB Travancore NetBanking</option>
											<option value="SVC-NA">Shamrao Vitthal Co-operative Bank</option>
											<option value="SIB-NA">South Indian Bank NetBanking</option>
											<option value="SBP-NA">State Bank of Patiala NetBanking</option>
											<option value="SYD-NA">Syndicate Bank NetBanking</option>
											<option value="TNC-NA">Tamil Nadu State Co-operative Bank NetBanking</option>
											<option value="UCO-NA">UCO Bank NetBanking</option>
											<option value="UBI-NA">Union Bank NetBanking</option>
											<option value="UNI-NA">United Bank of India NetBanking</option>
											<option value="VJB-NA">Vijaya Bank NetBanking</option>
										</select>
									</div>
									<input type="submit" value="PAY NOW">
								</form>
							</div>
						</div>
						<div>
							<div id="tab4" class="tab-grid" style="display: block;">
								<div class="row">
									<div class="col-md-6">
										<img class="pp-img" src="images/paypal.png" alt="Image Alternative text" title="Image Title">
										<p>Important: You will be redirected to PayPal's website to securely complete your payment.</p>
										<a class="btn btn-primary">Checkout via Paypal</a>
									</div>
									<div class="col-md-6 number-paymk">
										<form class="cc-form">
											<div class="clearfix">
												<div class="form-group form-group-cc-number">
													<label>Card Number</label>
													<input class="form-control" placeholder="xxxx xxxx xxxx xxxx" type="text">
													<span class="cc-card-icon"></span>
												</div>
												<div class="form-group form-group-cc-cvc">
													<label>CVV</label>
													<input class="form-control" placeholder="xxxx" type="text">
												</div>
											</div>
											<div class="clearfix">
												<div class="form-group form-group-cc-name">
													<label>Card Holder Name</label>
													<input class="form-control" type="text">
												</div>
												<div class="form-group form-group-cc-date">
													<label>Valid Thru</label>
													<input class="form-control" placeholder="mm/yy" type="text">
												</div>
											</div>
											<div class="checkbox checkbox-small">
												<label>
													<input class="i-check" type="checkbox" checked="">Add to My Cards</label>
											</div>
											<input type="submit" class="submit" value="Proceed Payment">
										</form>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
				<!--Plug-in Initialisation-->
			</div>
		</div>
	</div>
	<!-- //payment page -->
<?php 
include("include/footer.php");
?>