<?php
    include("include/header.php");
?>
    <link rel="stylesheet" href="css/wallet.css">
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
                    <li>Wallet</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Wallet content -->
    <div id="wallet">
        <div class="container">
            <div class="walletLeft">
                <div class="titleWallet"><i class="fa fa-user-circle iconTitle"></i>Username</div>
                <div class="contentWalletLeft">
                    <ul>
                        <li class="contentList"><a href="cusprofile.php"><i class="fa fa-user iconFont"></i>My Infomation</a></li>
                        <li class="contentList"><a href="history.php"><i class="fa fa-shopping-cart iconFont"></i>Cart History</a></li>
                        <li class="contentList"><a href="voucher.php"><i class="fa fa-exclamation-circle iconFont"></i>Voucher</a></li>
                    </ul>
                </div>
            </div>
            <div class="walletRight">
                <div class="headWalletRight">
                    <!-- head -->
                    <div class="currentBalance">300: cent in your wallet</div>
                    <div class="currentMoney"><a href="getVoucher.php">Get voucher ></a></div>

                    <!-- clearfix -->
                    <div class="clearfix"></div>
                </div>
                <div class="contentWalletRight">
                <button class="tablink" onclick="openPage('Home', this, 'rgb(236, 205, 205)')"  id="defaultOpen">All History</button>
                <button class="tablink" onclick="openPage('News', this, 'rgb(236, 205, 205)')">Got</button>
                <button class="tablink" onclick="openPage('Contact', this, 'rgb(236, 205, 205)')">Used</button>
                    <div id="Home" class="tabcontent">
                        <div class="clearfix"></div>
                        <div class="mainContent">
                            <div class="leftContent">
                                <img src="images/coin.jpg" alt="img" class="imgWallet">
                                <div class="contentWalletLeft">Login today!</div>
                            </div>
                            <div class="rightContent">
                                <div class="contentWalletRight">+100</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="mainContent">
                            <div class="leftContent">
                                <img src="images/coin.jpg" alt="img" class="imgWallet">
                                <div class="contentWalletLeft">Login today!</div>
                            </div>
                            <div class="rightContent">
                                <div class="contentWalletRight">+100</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="mainContent">
                            <div class="leftContent">
                                <img src="images/coin.jpg" alt="img" class="imgWallet">
                                <div class="contentWalletLeft">Login today!</div>
                            </div>
                            <div class="rightContent">
                                <div class="contentWalletRight">+100</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div id="News" class="tabcontent">
                    <div class="clearfix"></div>
                        <div class="mainContent">
                            <div class="leftContent">
                                <img src="images/coin.jpg" alt="img" class="imgWallet">
                                <div class="contentWalletLeft">Login today!</div>
                            </div>
                            <div class="rightContent">
                                <div class="contentWalletRight">+100</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="mainContent">
                            <div class="leftContent">
                                <img src="images/coin.jpg" alt="img" class="imgWallet">
                                <div class="contentWalletLeft">Login today!</div>
                            </div>
                            <div class="rightContent">
                                <div class="contentWalletRight">+100</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="mainContent">
                            <div class="leftContent">
                                <img src="images/coin.jpg" alt="img" class="imgWallet">
                                <div class="contentWalletLeft">Login today!</div>
                            </div>
                            <div class="rightContent">
                                <div class="contentWalletRight">+100</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div id="Contact" class="tabcontent">
                    <div class="clearfix"></div>
                        <div class="mainContent">
                            <div class="leftContent">
                                <img src="images/coin.jpg" alt="img" class="imgWallet">
                                <div class="contentWalletLeft">Login today!</div>
                            </div>
                            <div class="rightContent">
                                <div class="contentWalletRight">+100</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="mainContent">
                            <div class="leftContent">
                                <img src="images/coin.jpg" alt="img" class="imgWallet">
                                <div class="contentWalletLeft">Login today!</div>
                            </div>
                            <div class="rightContent">
                                <div class="contentWalletRight">+100</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="mainContent">
                            <div class="leftContent">
                                <img src="images/coin.jpg" alt="img" class="imgWallet">
                                <div class="contentWalletLeft">Login today!</div>
                            </div>
                            <div class="rightContent">
                                <div class="contentWalletRight">+100</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>


    <script>
        function openPage(pageName,elmnt,color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

<?php 
    include("./include/footer.php");
?>  