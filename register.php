<?php include ('server.php'); ?>

<?php include "includes/header.php"?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-4"></div>
        <div class="col-md-4 col-lg-4 header">
            <div>
                <h2>Registration</h2>
            </div>
        </div>
        <div class="col-md-4 col-lg-4"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-4"></div>
        <div class="col-md-4 col-lg-4 text-field">

            <form action="register.php" method="post">
<!--      display validadtion error         -->
              <?php  include ('errors.php'); ?>
               
                <div class="form-group">
                    <label> First Name</label>
                    <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>" >
                </div>
                <div class="form-group">
                    <label> Last Name</label>
                    <input type="text" name="lastname" class="form-control" value="<?php echo $lastname ;?>">
                </div>
                <div class="form-group">
                    <label> Username </label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username;?>">
                </div>
                <div class="form-group">
                    <label> Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $email;?>">
                </div>
                <div class="form-group">
                    <label> Password</label>
                    <input type="password" name="password_1" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="password_2" class="form-control"  >
                </div>
                <div class="form-group">
                    <label> Mobile</label>
                    <input type="text" name="mobile" class="form-control" value="<?php echo $mobile ?>">
                </div>
                <div class="form-group">
                   <center> <button type="submit" class="save-btn" name="register">Register</button></center>
                </div>
                <p>
                    Already a member? <a href="login.php">Log in</a>
                </p>
            </form>

        </div>
        <div class="col-md-4 col-lg-4"></div>
    </div>
</div>
<?php include "includes/footer.php" ?>

