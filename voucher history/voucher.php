<?php 
require_once("include/conn.php");
include("include/header.php");
?>
<div class="container mt-5 mb-5">
            <h3 class="tittle-w3l">Voucher
                    <span class="heading-style">
                        <i></i>
                        <i></i>
                        <i></i>
                    </span>
            </h3>
            
    <div class="d-flex justify-content-center row-voucher ">
        <?php
        $sql = "SELECT * FROM tbl_voucher "; // sql command
        $result = mysqli_query($conn, $sql);
        // Start While loop
        while($row = mysqli_fetch_assoc($result)){ 
        ?>
        <div class="col-md-10">
            <div class="row-voucher  p-2 bg-white border-voucher rounded">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="./images/<?php echo $row['voucherImg']?>"></div>
                <div class="col-md-6 mt-1">
                    <h5 class="voucher__Name"><?php echo $row['voucherDesc']?></h5>
                    <div class="d-flex flex-row-voucher bottom-voucher ">
                    <div class="ratings mr-2">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div><span></span>
                    <p class="text-justify text-truncate para mb-0"><?php echo $row['voucherCost']?><br><br></p>    
                    </div>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row-voucher  align-items-center">
                       <!--  <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span> -->
                    </div>
                    <h6 class="text-success"></h6>
                    <div class="d-flex flex-column mt-4">
                        <!-- <button class="btn-voucher btn-outline-primary btn-sm mt-2" type="button">Add To Check Out</button>
                        <button class="btn-voucher btn-outline-primary btn-sm mt-2" type="button">Condition</button> -->
                    </div>
                </div>
            </div>
           
            </div>
					<?php

					} //End while

				?>

        </div>
    </div>
</div>
<?php 
include("include/footer.php");
?>