<?php include ('server.php') ?>
<?php 
 if(empty($_SESSION['username'])){
     header('location: login.php');
 }
?>

<?php 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="application-name" content="">
    <meta name="description" content="">
    <title>Users</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css">

    <!-- Normalize -->
    <link rel="stylesheet" type="text/css" href="css/vendor/normalize.css">

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


                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
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
                <a class="navbar-brand" href="users.php">
                    <p>OLD HERITAGE PRODUCT <i class="fas fa-gavel"></i> AUCTION</p>
                </a>

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
    <section id="category">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="category">
                        <div class="category-btn">

                            <div class="dropdown">
                                <button class="btn btn-secondary " data-toggle="dropdown">
                                    Browse category
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">New Items</a>
                                    <a class="dropdown-item" href="#">Ancient Items</a>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="container">
                        <div class="row">
                            <div class="btn btn-danger pull-right">
                                <a href="add-product.php" style="color:#f2f2f2;">+Add Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="search-option">
                        <input type="text" placeholder="Search Auction" class="text-box">
                        <input type="submit" value="Search" class="search-btn pull-right">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product-->

    <section id="products">
        <div class="container">
            <div class="row">
                <?php 
                            $query= "SELECT  `product_name`, `product_baseprice`, `product_aid`, `require_per_bid`, `incremental_price`, `pimage` FROM `product` order by id ASC";
                            $result= mysqli_query($db,$query);
                           $num= mysqli_num_rows($result);
                
                           if($num >0){
                               while ($row = mysqli_fetch_array($result))
                               {
                                 ?> 
                                 <div class="col-sm-12 col-md-3 col-lg-3">
                    <div id="dv20300">
                        <div class="auction-block">
                            <h4 class="title-check">
                                <a href="" title="Click to View in Full Page"><?php echo $row["product_name"]; ?></a>
                            </h4>
                            <form class="making-border">
                                <p class="price">BDT : <?php echo $row["product_baseprice"]; ?></p>
                                <article class="feature-image">
                                    <a href="" title="Click to View in Full image"><img src="<?php echo $row["pimage"]; ?>" alt=" " width="245px"  height="156px"></a>
                                </article>
                            </form>
                            <form class="border-making">
                                <div class="bid-credit-row">
                                    <span class="auction-id">AID: <?php echo $row["product_aid"]; ?></span>
                                    <a class="bid-credit" style="color: #008fb3" title="Number of Require Credits Per BID"><?php echo $row["require_per_bid"];?>x</a>
                                </div>
                            </form>
                            <!--/.bid-credit-row-->
                            <div class="bid-row cf">
                                <div class="container">
                                    <div class="row a-right">
                                        <div class="bid-status">
                                            <p class="bid-price">৳ <?php echo $row["incremental_price"]; ?> </p>
                                        </div>
                                        <div class="countdown" id="demo"> </div>
                                    </div>
                                </div>
                            </div>

                            <!--/.bid-status-->
                            <section id="btn-now">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 bottom-red">
                                            <div>
                                                <button type="button" onclick="mFunction()" class="btn-now">BID NOW</button>
                                                <script>
                                                    function mFunction() {
                                                        document.getElementById("dem").innerHTML = "Naeem Islam";
                                                    }

                                                </script>
                                            </div>
                                        </div>
                                        <script>
                                            // Set the date we're counting down to
                                            var countDownDate1 = new Date("April 29, 2019 3:50:50").getTime();

                                            // Update the count down every 1 second
                                            var x = setInterval(function() {

                                                // Get todays date and time
                                                var now = new Date().getTime();

                                                // Find the distance between now and the count down date
                                                var distance = countDownDate1 - now;

                                                // Time calculations for days, hours, minutes and seconds

                                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                                // Output the result in an element with id="demo"
                                                document.getElementById("demo").innerHTML = hours + "H " +
                                                    minutes + "M " + seconds + "S ";

                                                // If the count down is over, write some text 
                                                if (distance < 0) {
                                                    clearInterval(x);
                                                    document.getElementById("demo").innerHTML = "EXPIRED";
                                                }
                                            }, 1000);

                                        </script>
                                    </div>
                                </div>
                            </section>

                            <!--/.bid-option-row-->
                        </div>
                        <!--/.auction-block-->
                    </div>
                </div>
                                  <?php  
                               }
                           }
                            ?>
       

               <div class="col-md-2 col-lg-2"></div>
           
       <div class="col-md-10 col-lg-10">
                    <div class="pagination">
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i></a></li>

                        </ul>
                    </div>
                      
                </div>
 <div class="col-md-2 col-lg-2"></div>  
               
    </section>
            
       


    <?php include "includes/footer.php" ?>
