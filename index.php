<?php include ('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="application-name" content="">
    <meta name="description" content="">
    <title>Index</title>

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
   
  

    <section id="header">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">
                    <p>OLD HERITAGE PRODUCT <i class="fas fa-gavel"></i> AUCTION</p>
                </a>
                <div class="collapse navbar-collapse" >
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
                                <button class="btn btn-secondary dropdown-toggle" type="button"  data-toggle="dropdown">
                                    Browse Category
                                </button>
                                <div class="dropdown-menu" >
                                    <a class="dropdown-item" href="#">New Items</a>
                                    <a class="dropdown-item" href="#">Ancient Items</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4"></div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="search-option">
                        <input type="text" placeholder="Search Auction" class="text-box">
                        <input type="submit" value="Search" class="search-btn pull-right" >
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
    
    
    
    
    
    
    
<!--products details-->
    
    
    
    <section id="products">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div id="dv20300">
                        <div class="auction-block">
                            <h4 class="title-check">
                                <a href="" title="Click to View in Full Page">Compass</a>
                            </h4>
                            <form class="making-border">
                                <span class="price">BDT : 550.00</span>
                                <article class="feature-imag">
                                    <a href="compassPage.php" title="Click to View in Full image"><img src="img/compass.jpg" style="width: 245px;height: 156px"></a>
                                </article>
                            </form>
                            <form class="border-making">
                                <div class="bid-credit-row">
                                    <span class="auction-id">AID: bf200</span>
                                    <a class="bid-credit" style="color: #008fb3" title="Number of Require Credits Per BID">2x</a>
                                </div>
                            </form>
                            <!--/.bid-credit-row-->
                            <div class="bid-row cf">
                                <div class="container">
                                    <div class="row a-right">
                                        <div class="bid-status">
                                            <p class="bid-price">৳ 20 </p>
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
                                                <button type="button" class="btn-now" onclick="myFunction()">BID NOW</button>
                                                <script>
                                                    function myFunction() {
                                                        window.alert("You have to login the system first !!");
                                                    }

                                                </script>
                                            </div>
                                        </div>
                                        <script>
                                            var countdownDate6 = new Date("Feb 7, 2019 3:50:50").getTime();

                                            var x = setInterval(function() {

                                                var now = new Date().getTime();

                                                var distance = countdownDate6 - now;

                                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                                document.getElementById("demo").innerHTML = hours + "H " +
                                                    minutes + "M " + seconds + "S ";
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
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div id="dv20300">
                        <div class="auction-block">
                            <h4 class="title-check">
                                <a href="" title="Click to View in Full Page">Akoya Pearls</a>
                            </h4>
                            <form class="making-border">
                                <span class="price">BDT : 750.00</span>
                                <article class="feature-imag">
                                    <a href="" title="Click to View in Full image"><img src="img/akoya%20pearls.jpg" style="width: 245px;height: 156px"></a>
                                </article>
                            </form>
                            <form class="border-making">
                                <div class="bid-credit-row">
                                    <span class="auction-id">AID: bb210</span>
                                    <a class="bid-credit" style="color: #008fb3" title="Number of Require Credits Per BID">3x</a>
                                </div>
                            </form>
                            <!--/.bid-credit-row-->
                            <div class="bid-row cf">
                                <div class="container">
                                    <div class="row a-right">
                                        <div class="bid-status">
                                            <p class="bid-price">৳ 10 </p>
                                        </div>
                                        <p class="countdown" id="epic">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--/.bid-status-->
                            <section id="btn-now">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 bottom-red">
                                            
                                            <div>
                                                <button type="button" class="btn-now" onclick="myFunction()">BID NOW</button>
                                            </div>
                                            <script>
                                                function myFunction() {
                                                    window.alert("You have to login the system first !!");
                                                }

                                            </script>
                                        </div>
                                    </div>
                                    <script>
                                        var countDownDate2 = new Date("Feb 5, 2019 4:50:50").getTime();


                                        var x = setInterval(function() {


                                            var now = new Date().getTime();


                                            var distance = countDownDate2 - now;



                                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);


                                            document.getElementById("epic").innerHTML = hours + "H " +
                                                minutes + "M " + seconds + "S ";


                                            if (distance < 0) {
                                                clearInterval(x);
                                                document.getElementById("epic").innerHTML = "EXPIRED";
                                            }
                                        }, 1000);

                                    </script>
                                </div>
                            </section>
                            <!--/.bid-option-row-->
                        </div>
                        <!--/.auction-block-->
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div id="dv20300">
                        <div class="auction-block">
                            <h4 class="title-check">
                                <a href="" title="Click to View in Full Page">Necklace</a>
                            </h4>
                            <form class="making-border">
                                <span class="price">BDT : 1450.00</span>
                                <article class="feature-imag">
                                    <a href="" title="Click to View in Full image"><img src="img/ancient%20necklace.jpg" style="width: 245px;height: 156px"></a>
                                </article>
                            </form>
                            <form class="border-making">
                                <div class="bid-credit-row">
                                    <span class="auction-id">AID: bb230</span>
                                    <a class="bid-credit" style="color: #008fb3" title="Number of Require Credits Per BID">4x</a>
                                </div>
                            </form>
                            <!--/.bid-credit-row-->
                            <div class="bid-row cf">
                                <div class="container">
                                    <div class="row a-right">
                                        <div class="bid-status">
                                            <p class="bid-price">৳ 20 </p>
                                        </div>
                                        <div class="countdown" id="rapid"> </div>
                                    </div>
                                </div>
                            </div>

                            <!--/.bid-status-->
                            <section id="btn-now">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 bottom-red">
                                           
                                            <div>
                                                <button type="button" class="btn-now" onclick="myFunction()">BID NOW</button>
                                            </div>
                                            <script>
                                                function myFunction() {
                                                    window.alert("You have to login the system first !!");
                                                }

                                            </script>
                                        </div>
                                        <script>
                                            var countDownDate3 = new Date("Feb 7, 2019 5:50:50").getTime();


                                            var x = setInterval(function() {


                                                var now = new Date().getTime();


                                                var distance = countDownDate3 - now;



                                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);


                                                document.getElementById("rapid").innerHTML = hours + "H " +
                                                    minutes + "M " + seconds + "S ";


                                                if (distance < 0) {
                                                    clearInterval(x);
                                                    document.getElementById("rapid").innerHTML = "EXPIRED";
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
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div id="dv20300">
                        <div class="auction-block">
                            <h4 class="title-check">
                                <a href="" title="Click to View in Full Page">Locket Clock</a>
                            </h4>
                            <form class="making-border">
                                <span class="price">BDT : 1500.00</span>
                                <article class="feature-imag">
                                    <a href="" title="Click to View in Full image"><img src="img/antique%20clock%201.jpg" style="width: 245px;height: 156px"></a>
                                </article>
                            </form>
                            <form class="border-making">
                                <div class="bid-credit-row">
                                    <span class="auction-id">AID: bb500</span>
                                    <a class="bid-credit" style="color: #008fb3" title="Number of Require Credits Per BID">2x</a>
                                </div>
                            </form>

                            <!--/.bid-credit-row-->
                            <div class="bid-row cf">
                                <div class="container">
                                    <div class="row a-right">
                                        <div class="bid-status">
                                            <p class="bid-price">৳ 10 </p>
                                        </div>
                                        <div class="countdown" id="random"> </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.bid-status-->
                            <section id="btn-now">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12 bottom-red">
                                            
                                            <div>
                                                <button type="button" class="btn-now" onclick="myFunction()">BID NOW</button>
                                            </div>
                                            <script>
                                                function myFunction() {
                                                    window.alert("You have to login the system first !!");
                                                }

                                            </script>
                                        </div>
                                    </div>
                                    <script>
                                        var countDownDate4 = new Date("Feb 7, 2019 7:50:50").getTime();


                                        var x = setInterval(function() {


                                            var now = new Date().getTime();


                                            var distance = countDownDate4 - now;



                                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                            document.getElementById("random").innerHTML = hours + "H " +
                                                minutes + "M " + seconds + "S ";

                                            if (distance < 0) {
                                                clearInterval(x);
                                                document.getElementById("random").innerHTML = "EXPIRED";
                                            }
                                        }, 1000);

                                    </script>
                                </div>
                            </section>
                            <!--/.bid-option-row-->
                        </div>
                        <!--/.auction-block-->
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div id="dv20300">
                        <div class="auction-block">
                            <h4 class="title-check">
                                <a href="" title="Click to View in Full Page"> 1989 Herican </a>
                            </h4>
                            <form class="making-border">
                                <span class="price">BDT : 3000.00</span>
                                <article class="feature-imag">
                                    <a href="" title="Click to View in Full image"><img src="img/herican.jpg" style="width: 245px;height: 156px"></a>
                                </article>
                            </form>
                            <form class="border-making">
                                <div class="bid-credit-row">
                                    <span class="auction-id">AID: bd300</span>
                                    <a class="bid-credit" style="color: #008fb3" title="Number of Require Credits Per BID">4x</a>
                                </div>
                            </form>
                            <!--/.bid-credit-row-->
                            <div class="bid-row cf">
                                <div class="container">
                                    <div class="row a-right">
                                        <div class="bid-status">
                                            <p class="bid-price">৳ 30 </p>
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
                                                <button type="button" onclick="myFunction()" class="btn-now">BID NOW</button>
                                            </div>
                                            <script>
                                                function myFunction() {
                                                    window.alert("You have to login the system first !!");
                                                }

                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--/.bid-option-row-->
                        </div>
                        <!--/.auction-block-->
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div id="dv20300">
                        <div class="auction-block">
                            <h4 class="title-check">
                                <a href="" title="Click to View in Full Page">Old Camera </a>
                            </h4>
                            <form class="making-border">
                                <span class="price">BDT : 3150.00</span>
                                <article class="feature-imag">
                                    <a href="" title="Click to View in Full image"><img src="img/old%20camera%201.jpg" style="width: 245px;height: 156px"></a>
                                </article>
                            </form>
                            <form class="border-making">
                                <div class="bid-credit-row">
                                    <span class="auction-id">AID: bb400</span>
                                    <a class="bid-credit" style="color: #008fb3" title="Number of Require Credits Per BID">5x</a>
                                </div>
                            </form>
                            <!--/.bid-credit-row-->
                            <div class="bid-row cf">
                                <div class="container">
                                    <div class="row a-right">
                                        <div class="bid-status">
                                            <p class="bid-price">৳ 40 </p>
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
                                                <button type="button" onclick="myFunction()" class="btn-now">BID NOW</button>
                                                <script>
                                                    function myFunction() {
                                                        window.alert("You have to login the system first !!");
                                                    }

                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!--/.bid-option-row-->
                        </div>
                        <!--/.auction-block-->
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div id="dv20300">
                        <div class="auction-block">
                            <h4 class="title-check">
                                <a href="" title="Click to View in Full Page">Telephone</a>
                            </h4>
                            <form class="making-border">
                                <span class="price">BDT : 2000.00</span>
                                <article class="feature-imag">
                                    <a href="" title="Click to View in Full image"><img src="img/telephone.jpg" style="width: 245px;height: 156px"></a>
                                </article>
                            </form>
                            <form class="border-making">
                                <div class="bid-credit-row">
                                    <span class="auction-id">AID: bg500</span>
                                    <a class="bid-credit" style="color: #008fb3" title="Number of Require Credits Per BID">3x</a>
                                </div>
                            </form>
                            <!--/.bid-credit-row-->
                            <div class="bid-row cf">
                                <div class="container">
                                    <div class="row a-right">
                                        <div class="bid-status">
                                            <p class="bid-price">৳ 20 </p>
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
                                                <button type="button" onclick="myFunction()" class="btn-now">BID NOW</button>
                                                <script>
                                                    function myFunction() {
                                                        window.alert("You have to login the system first !!");
                                                    }

                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--/.bid-option-row-->
                        </div>
                        <!--/.auction-block-->
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div id="dv20300">
                        <div class="auction-block">
                            <h4 class="title-check">
                                <a href="" title="Click to View in Full Page">Television</a>
                            </h4>
                            <form class="making-border">
                                <span class="price">BDT : 3000.00</span>
                                <article class="feature-imag">
                                    <a href="" title="Click to View in Full image"><img src="img/television.jpg" style="width: 245px;height: 156px"></a>
                                </article>
                            </form>
                            <form class="border-making">
                                <div class="bid-credit-row">
                                    <span class="auction-id">AID: be245</span>
                                    <a class="bid-credit" style="color: #008fb3" title="Number of Require Credits Per BID">4x</a>
                                </div>
                            </form>
                            <!--/.bid-credit-row-->
                            <div class="bid-row cf">
                                <div class="container">
                                    <div class="row a-right">
                                        <div class="bid-status">
                                            <p class="bid-price">৳ 20 </p>
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
                                                <button type="button" onclick="myFunction()" class="btn-now">BID NOW</button>
                                                <script>
                                                    function myFunction() {
                                                        window.alert("You have to login the system first !!");
                                                    }

                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--/.bid-option-row-->
                        </div>
                        <!--/.auction-block-->
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div id="dv20300">
                        <div class="auction-block">
                            <h4 class="title-check">
                                <a href="" title="Click to View in Full Page">Jewellery</a>
                            </h4>
                            <form class="making-border">
                                <span class="price">BDT : 4350.00</span>
                                <article class="feature-imag">
                                    <a href="" title="Click to View in Full image"><img src="img/old%20jewellery.jpg" style="width: 245px;height: 156px"></a>
                                </article>
                            </form>
                            <form class="border-making">
                                <div class="bid-credit-row">
                                    <span class="auction-id">AID: bs125</span>
                                    <a class="bid-credit" style="color: #008fb3" title="Number of Require Credits Per BID">5x</a>
                                </div>
                            </form>
                            <!--/.bid-credit-row-->
                            <div class="bid-row cf">
                                <div class="container">
                                    <div class="row a-right">
                                        <div class="bid-status">
                                            <p class="bid-price">৳ 80 </p>
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
                                                <button type="button" class="btn-now">BID NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--/.bid-option-row-->
                        </div>
                        <!--/.auction-block-->
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div id="dv20300">
                        <div class="auction-block">
                            <h4 class="title-check">
                                <a href="" title="Click to View in Full Page"> 1990 Herican </a>
                            </h4>
                            <form class="making-border">
                                <span class="price">BDT : 850.00</span>
                                <article class="feature-imag">
                                    <a href="" title="Click to View in Full image"><img src="img/herican1.jpg" style="width: 245px;height: 156px"></a>
                                </article>
                            </form>
                            <form class="border-making">
                                <div class="bid-credit-row">
                                    <span class="auction-id">AID: bg300</span>
                                    <a class="bid-credit" style="color: #008fb3" title="Number of Require Credits Per BID">2x</a>
                                </div>
                            </form>
                            <!--/.bid-credit-row-->
                            <div class="bid-row cf">
                                <div class="container">
                                    <div class="row a-right">
                                        <div class="bid-status">
                                            <p class="bid-price">৳ 20 </p>
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
                                                <button type="button" class="btn-now">BID NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!--/.bid-option-row-->
                        </div>
                        <!--/.auction-block-->
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div id="dv20300">
                        <div class="auction-block">
                            <h4 class="title-check">
                                <a href="" title="Click to View in Full Page">Typewrite</a>
                            </h4>
                            <form class="making-border">
                                <span class="price">BDT : 5000.00</span>
                                <article class="feature-imag">
                                    <a href="" title="Click to View in Full image"><img src="img/typewriter.jpg" style="width: 245px;height: 156px"></a>
                                </article>
                            </form>
                            <form class="border-making">
                                <div class="bid-credit-row">
                                    <span class="auction-id">AID: aa765</span>
                                    <a class="bid-credit" style="color: #008fb3" title="Number of Require Credits Per BID">6x</a>
                                </div>
                            </form>
                            <!--/.bid-credit-row-->
                            <div class="bid-row cf">
                                <div class="container">
                                    <div class="row a-right">
                                        <div class="bid-status">
                                            <p class="bid-price">৳ 100 </p>
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
                                                <button type="button" class="btn-now">BID NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!--/.bid-option-row-->
                        </div>
                        <!--/.auction-block-->
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div id="dv20300">
                        <div class="auction-block">
                            <h4 class="title-check">
                                <a href="" title="Click to View in Full Page">1985 Camera</a>
                            </h4>
                            <form class="making-border">
                                <span class="price">BDT : 4000.00</span>
                                <article class="feature-imag">
                                    <a href="" title="Click to View in Full image"><img src="img/old%20camera.jpg" style="width: 245px;height: 156px"></a>
                                </article>
                            </form>
                            <form class="border-making">
                                <div class="bid-credit-row">
                                    <span class="auction-id">AID: bh243</span>
                                    <a class="bid-credit" style="color: #008fb3" title="Number of Require Credits Per BID">4x</a>
                                </div>
                            </form>
                            <!--/.bid-credit-row-->
                            <div class="bid-row cf">
                                <div class="container">
                                    <div class="row a-right">
                                        <div class="bid-status">
                                            <p class="bid-price">৳ 50 </p>
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
                                                <button type="button" class="btn-now">BID NOW</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!--/.bid-option-row-->
                        </div>
                        <!--/.auction-block-->
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3"></div>
                <div class="col-sm-12 col-md-6 col-lg-6">
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
                <div class="col-sm-12 col-md-3 col-lg-3"></div>
            </div>
        </div>
    </section>
    
   <?php include "includes/footer.php" ?>