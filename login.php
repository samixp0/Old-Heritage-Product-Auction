<?php include ('server.php')?>
<?php include "includes/header.php" ?>

   
   
   <div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-4"></div>
        <div class="col-md-4 col-lg-4 header">
            <div>
                <h2>Login</h2>
            </div>
        </div>
        <div class="col-md-4 col-lg-4"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-4"></div>
        <div class="col-md-4 col-lg-4 text-field">

            <form action="login.php" method="post">
                <!--      display validadtion error         -->
              <?php  include ('errors.php'); ?>
                <div class="form-group">
                    <label> Username </label>
                    <input type="text" name="username" class="form-control" >
                </div>
              
                <div class="form-group">
                    <label> Password</label>
                    <input type="password" name="password" class="form-control" >
                </div>
               
                <div class="form-group">
                    <center><button type="submit" class="save-btn" name="login">Login</button></center>
                </div>
                <p>
                    Not yet a member? <a href="register.php">Sign up Now</a>
                </p>
            </form>

        </div>
        <div class="col-md-4 col-lg-4"></div>
    </div>
</div>
   <?php include "includes/footer.php" ?>