
<?php include "includes/header.php";?>
<?php include ('server.php'); ?>
<?php
$id=$_GET['user'];
 if(isset($id))
 {
$result= mysqli_query($db, "SELECT firstname,lastname,username,email,mobile FROM user WHERE id= '$id'");
$retrieve=mysqli_fetch_array($result);
$name=$retrieve['firstname'];
$last=$retrieve['lastname'];
$user=$retrieve['username'];
$mail=$retrieve['email'];
$mobile1=$retrieve['mobile'];  
 }

if (isset($_POST['update'])) { 
$firstname =$_POST['first_name'];
$lastname = $_POST['last_name'];
$username = $_POST['user_name'];
$email = $_POST['mail'];
$mobile=$_POST['mobile2'];
 

//ensure that form fields are filled properly
    if(empty($firstname)){
    array_push($errors, "First Name is required");
}
    if(empty($lastname)){
    array_push($errors, "Last name is required");
}
    if(empty($username)){
    array_push($errors, "Username is required");
}
    
    if(empty($email)){
    array_push($errors, "Email is required");
}
    
    if(empty($mobile)){
    array_push($errors, "Mobile Number is required");
}
    
    //if there are  no errors, save user to database 
if (count($errors) == 0){
     
        mysqli_query($db, "UPDATE user SET
firstname='$firstname', lastname='$lastname', username='$username', email='$email', mobile='$mobile' WHERE id='$id'");
       header("location: manage-users.php");
       
       
    }   
}   
?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-4"></div>
        <div class="col-md-4 col-lg-4 header">
            <div>
                <h3>Update User Details</h3>
            </div>
        </div>
        <div class="col-md-4 col-lg-4"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-4"></div>
        <div class="col-md-4 col-lg-4 text-field">

            <form method="post">
<!--      display validadtion error         -->
              <?php  include ('errors.php'); ?>
               
                <div class="form-group">
                    <label> First Name</label>
                    <input type="text" name="first_name" class="form-control" value="<?php echo $name; ?>" >
                </div>
                <div class="form-group">
                    <label> Last Name</label>
                    <input type="text" name="last_name" class="form-control" value="<?php echo $last;?>">
                </div>
                <div class="form-group">
                    <label> Username </label>
                    <input type="text" name="user_name" class="form-control" value="<?php echo $user;?>">
                </div>
                <div class="form-group">
                    <label> Email</label>
                    <input type="text" name="mail" class="form-control" value="<?php echo $mail;?>">
                </div>          
                <div class="form-group">
                    <label> Mobile</label>
                    <input type="text" name="mobile2" class="form-control" value="<?php echo $mobile1; ?>">
                </div>
                <div class="form-group">
                   <center> <button type="submit" value="Update" class="save-btn" name="update">Submit</button></center>
                </div>
               
            </form>

        </div>
        <div class="col-md-4 col-lg-4"></div>
    </div>
</div>
<?php include "includes/footer.php" ?>

