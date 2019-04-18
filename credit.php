<?php include ('server.php');?>
<?php 
 if(empty($_SESSION['username'])){
     header('location: login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="application-name" content="">
	<meta name="description" content="">
    <title>Credit</title> 
      
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css">

	<!-- Normalize -->
	<link rel="stylesheet" typ
	e="text/css" href="css/vendor/normalize.css">
	
    <!-- Montserrat Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	<!-- Fontawesome -->
	<link rel="stylesheet" href="css/vendor/font-awesome/css/font-awesome.min.css">
   
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
    
</head>
<body>
   
    <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
        <div class="error success">
            <h3>
                <?php 
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
        <?php  endif ?>
        <?php if (isset($_SESSION["username"])): ?>

        <?php endif ?>
    </div>

    <section id="user-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-2"></div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <a href="users.php"> <img src="img/title_logo.png" style="width: 450px;height: 120px;padding: 5px 10px 5px 5px;" alt=""></a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5 user-btn">
                    <button type="button" class="count-credit"> You Have 0 Credit</button>
                    <a href="credit.php"><button type="button" class="recharge-credit"> Top Up Credit</button> </a>
                    <div class="btn">
                        <button class="btn btn-primary dropdown-toggle buton" type="button" data-toggle="dropdown">
                          <span style="color:#b3ffe6"><?php echo $_SESSION['username'];?></span>-My Account
                        </button>
                        <div class="dropdown-menu" >
                            <a class="dropdown-item " href="myaccount.php">My Account</a>
                            <a class="dropdown-item " href="#">Order History</a>
                            <a class="dropdown-item " href="#">Win History</a>
                            <a class="dropdown-item " href="#">View Referal</a>
                            <a class="dropdown-item " href="index.php?logout='1'">Logout</a>
                        </div> 
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-2"></div>
            </div>
        </div>
    </section>
    <section id="header">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">
                    <p>OLD HERITAGE PRODUCT <i class="fas fa-gavel"></i> AUCTION</p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="Help.php">Help</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Help.php#v-pills-works"> How it works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tips_and_tricks.php"> Tips & Tricks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="Winner.php"> Winner</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login.php"><i class="fas fa-user"></i> Get Started</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 right-nav">
                        <a href="login.php">Login</a>
                    </form>
                </div>
            </nav>
        </div>
    </section>
 
<h3 style="text-transform: uppercase;text-align: center"> =Bid Packages= </h3>
  
   <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12"></div>
            <div class="col-sm-12 col-md-12 col-lg-3 bid-package">
                <div>
                    <div class="credit-page">
                        <img src="img/Credits/15crt.png" alt="">
                        <p class="credit-name"> 15 Credits</p>
                    </div>
                    <div class="row credit-fx">
                        <div class="credit-price">BDT. 200.00</div>
                    <a href="payment.php"><button type="button" class="credit-btn">BUY NOW</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3 bid-package">
                <div>
                    <div class="credit-page">
                        <img src="img/Credits/25crt.png" alt="">
                        <p class="credit-name"> 25 Credits</p>
                           </div>
                           <div class="row credit-fx">
                        <div class="credit-price">BDT. 300.00</div>
                       <a href="payment.php"><button type="button" class="credit-btn">BUY NOW</button></a> 
                    </div>
                </div>
               </div>
               <div class="col-sm-12 col-md-12 col-lg-3 bid-package">
                <div>
                    <div class="credit-page">
                        <img src="img/Credits/65crt.png" alt="">
                        <p class="credit-name"> 65 Credits</p>
                            </div>
                            <div class="row credit-fx">
                        <div class="credit-price">BDT. 700.00</div>
                        <a href="payment.php"><button type="button" class="credit-btn">BUY NOW</button></a>
                    </div>
                </div>
            </div>
             <div class="col-sm-12 col-md-12 col-lg-3 bid-package">
                <div>
                    <div class="credit-page">
                        <img src="img/Credits/100crt.png" alt="">
                        <p class="credit-name"> 100 Credits</p>
                            </div>
                            <div class="row credit-fx">
                        <div class="credit-price">BDT. 1050.00</div>
                        <a href="payment.php"><button type="button" class="credit-btn">BUY NOW</button></a>
                    </div>
                </div>
            </div>
             <div class="col-sm-12 col-md-12 col-lg-3 bid-package">
                <div>
                    <div class="credit-page">
                        <img src="img/Credits/165crt.png" alt="">
                        <p class="credit-name"> 165 Credits</p>
                            </div>
                            <div class="row credit-fx">
                        <div class="credit-price">BDT. 1600.00</div>
                       <a href="payment.php"> <button type="button" class="credit-btn">BUY NOW</button></a>
                    </div>
                </div>
            </div>
             <div class="col-sm-12 col-md-12 col-lg-3 bid-package">
                <div>
                    <div class="credit-page">
                        <img src="img/Credits/275crt.png" alt="">
                        <p class="credit-name"> 275 Credits</p>
                            </div>
                            <div class="row credit-fx">
                        <div class="credit-price">BDT. 2650.00</div>
                        <a href="payment.php"><button type="button" class="credit-btn">BUY NOW</button></a>
                    </div>
                </div>
            </div>
             <div class="col-sm-12 col-md-12 col-lg-3 bid-package">
                <div>
                    <div class="credit-page">
                        <img src="img/Credits/350crt.png" alt="">
                        <p class="credit-name"> 350 Credits</p>
                            </div>
                            <div class="row credit-fx">
                        <div class="credit-price">BDT. 3760.00</div>
                        <a href="payment.php"><button type="button" class="credit-btn">BUY NOW</button></a>
                    </div>
                </div>
            </div>
             <div class="col-sm-12 col-md-12 col-lg-3 bid-package">
                <div>
                    <div class="credit-page">
                        <img src="img/Credits/1000crt.png" alt="">
                        <p class="credit-name"> 1000 Credits</p>
                            </div>
                            <div class="row credit-fx">
                        <div class="credit-price">BDT. 8700.00</div>
                        <a href="payment.php"><button type="button" class="credit-btn">BUY NOW</button></a>
                    </div> 
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-3"></div>
           </div>
           
    </div>
</section>




<!--footer-->
     <footer id="footer">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="footer-widget">
                         <h4>Site Link</h4>
                         <ul>
                             <li><a href="#">Auctions</a></li>
                             <li><a href="#">Reviews</a></li>
                            
                             <li><a href="login.php">Log in</a></li>
                             <li><a href="register.php">Create Account</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="footer-widget">
                         <h4>Help</h4>
                         <ul>
                             <li><a href="#">How it works</a></li>
                             <li><a href="#">How to bid in an auction</a></li>
                             <li><a href="#">What is a bid pack?</a></li>
                             <li><a href="#">Promotions</a></li>
                             <li><a href="#">Payments</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="footer-widget">
                         <h4>About</h4>
                         <ul>
                             <li><a href="#">Career </a></li>
                             <li><a href="#">Values</a></li>
                             <li><a href="#">Terms of use</a></li>
                             <li><a href="#">Privacy policy</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="footer-widget">
                         <h4>Lastest Blog</h4>
                         <ul>
                             <li><a href="#"> </a></li>
                             <li><a href="#"> </a></li>
                             <li><a href="#"> </a></li>
                             <li><a href="#"> </a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>

     </footer>
     <section id="copyright">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12 col-md-12 col-lg-12">
                     <div class="copyright">
                         <p>Copyright &copy; by <a href="#">NAEEM</a> </p>
                     </div>
                     <div class="social-icon">
                         <ul>
                             <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                             <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                             <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                             <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </section>


    <script src="js/vendor/tether.min.js"></script>
	<script src="js/vendor/popper.min.js"></script>
	<script src="js/vendor/jquery.easing.min.js"></script>
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/font-awesome.js"></script>
	<script src="js/vendor/countdown.js"></script>
</body>
</html>

