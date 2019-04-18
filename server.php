<?php 

session_start();

$firstname= "";
$lastname= "";
$username = "";
$email = "";
$mobile = "";
$msg= "";
$errors= array();
 
$db = mysqli_connect('localhost','root','','onlineauction');
if (!$db){
    die("connection not establish");
}

//register users
if (isset($_POST['register'])) {
$firstname =$_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password_1 = $_POST['password_1'];
$password_2 =$_POST['password_2'];
$mobile =$_POST['mobile'];
 

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
    
    if(empty($password_1)){
    array_push($errors, "Password is required");
}
    if($password_1 != $password_2){
    array_push($errors, "Password do not match");
  }
    if(empty($mobile)){
    array_push($errors, "Mobile Number is required");
}
    
    //if there are  no errors, save user to database 
    if (count($errors) == 0) {
        $password = md5 ($password_1);//encrypt password
        $sql = "INSERT INTO user (firstname, lastname, username, email, password, mobile)
               VALUES ('$firstname', '$lastname', '$username', '$email', '$password', '$mobile')";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You have successfully register now";
        header('location: users.php');
    } 
    
}
//log user in from login page
if (isset($_POST['login'])) {
$username = $_POST['username'];
$password = $_POST['password'];

//ensure that form fields are filled properly
    if(empty($username)){
    array_push($errors, "Username is required");
}
    if(empty($password)){
    array_push($errors, "Password is required");
   }
    
    if(count($errors) == 0 ){
        $password = md5($password); // encrypt password
        $query = "SELECT * FROM user WHERE username= '$username' AND password= '$password'";
        $result = mysqli_query($db,$query);
        if (mysqli_num_rows($result) == 1){
            
            //login user
            $_SESSION['username'] = $username;
        $_SESSION['success'] = "You have successfully register now";
        header('location: users.php');
        }else {
            array_push($errors,"The username/password is invalid");
               
        }
    }
}
    
    //logout
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
    }


//admin login page
if (isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];

//ensure that form fields are filled properly
    if(empty($username)){
    array_push($errors, "Username is required");
}
    if(empty($password)){
    array_push($errors, "Password is required");
   }
    
    if(count($errors) == 0 ){
        // encrypt password
        $query = "SELECT password FROM admin WHERE username= '$username'";
        $result = mysqli_query($db,$query);
        if (mysqli_num_rows($result) == 1){
            
            //login admin
            $_SESSION['username'] = $username;
        $_SESSION['success'] = "You have successfully register now";
        header('location: admin-panel.php');
        }else {
            array_push($errors,"The username/password is invalid");
               
        }
    }
}




//update user details



?>
