<?php 
require_once("include/conn.php");
include("include/header.php");
?>
<div class="container mt-5 mb-5">
        <?php
        $sql = "SELECT * FROM tbl_product_history "; // sql command
        $result = mysqli_query($conn, $sql);
        // Start While loop
        while($row = mysqli_fetch_assoc($result)){ 
        ?>
    <div class="d-flex justify-content-center row-voucher ">
        <div class="col-md-10">
            <div class="row-voucher  p-2 bg-white border-voucher rounded">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="./images/<?php echo $row['hisproductImg']?>"></div>
                <div class="col-md-6 mt-1">
                    <h5 class="voucher__Name"><?php echo $row['hisproductName']?> </h5>
                    <div class="d-flex flex-row-voucher ">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span></span>
                    </div>
                    <!-- <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                    <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div> -->
                    <p class="text-justify text-truncate-history para mb-0"><?php echo $row['hisproductStatus']?> <br><br></p>
                    <div class="mt-1 mb-1 spec-1"><span>Quantity : <?php echo $row['hisproductQuantity']?></span></div>
                    <p class="text-justify text-truncate-history para mb-0">Delivered : <?php echo $row['hisproductDate']?><br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">Price : </h4><h4 class="mr-1"><?php echo $row['hisproductPrice']?> đ </h4>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="d-flex flex-column mt-4"><button class="btn-voucher 
                    btn-primary btn-sm" type="button">Repurchase</button><button class="btn-voucher 
                    btn-outline-primary btn-sm mt-2" type="button">Contact  With Us</button></div>
                </div>
            </div>
            
        </div>
    </div>
    <?php

					} //End while

				?>
</div>
<?php 
include("include/footer.php");
?>