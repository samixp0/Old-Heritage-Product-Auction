<?php include "includes/header.php"?>

<div class="row info">
    <div class="col-75">
        <div class="container contain-1">
            <form action="payment.php" method="post">

                <div class="row info">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email">
                        <label for="adr"><i class="fa fa-address-card"></i> Address</label>
                        <input type="text" id="adr" name="address">
                        <label for="city"><i class="fas fa-university"></i> City</label>
                        <input type="text" id="city" name="city">

                        <div class="row info">
                            <div class="col-50">
                                <label for="state"><i class="fa fa-flag"></i> State</label>
                                <input type="text" id="state" name="state">
                            </div>
                            <div class="col-50">
                                <label for="zip"><i class="far fa-file-archive"></i> Zip</label>
                                <input type="text" id="zip" name="zip">
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <div class="border-box">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p></p>
                                                <center>
                                                    <img src="img/bKash-Logo.jpg" class="logo" alt="bkash logo">
                                                    <p></p>
                                                    <p></p>
                                                    <center>
                                                        "Bkash"
                                                        <p></p>
                                                        <p></p>
                                                        <center>
                                                            <input type="radio" name="payment" id="radio_button_1" Value="Bkash">
                                                            <p></p>
                                                        </center>
                                                    </center>
                                                </center>
                                            </td>
                                            <td>
                                                <p></p>
                                                <center>
                                                    <img src="img/dutch-bangla.png" class=logo alt="rocket_logo">
                                                    <p></p>
                                                    <p></p>
                                                    <center>
                                                        "Rocket"
                                                        <p></p>
                                                        <p></p>
                                                        <center>
                                                            <input type="radio" name="payment" id="radio_button_2" Value="Rocket">
                                                            <p></p>
                                                        </center>
                                                    </center>
                                                </center>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border-box.">
                                <center> <input type="submit" value="Checkout" class="btn bg-success"></center>
                            </div>
                        </div>

                    </div>

                </div>

            </form>
        </div>
    </div>

    <div class="col-25">
        <div class="container contain-1">
            <h4>Cart
                <span class="price" style="color:black">
                    <i class="fa fa-shopping-cart"></i>
                    <b>1</b>
                </span>
            </h4>
            <p><a href="#">Product 1</a> <span class="price">$30</span></p>
           
            <hr>
            <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
        </div>
    </div>
</div>
<?php include "includes/footer.php"?>
