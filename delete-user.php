<?php  
include('server.php');
$id=$_GET['del'];
mysqli_query($db, "DELETE FROM user WHERE id='$id'");
header("location: manage-users.php");
?>