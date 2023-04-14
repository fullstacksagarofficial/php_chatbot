<?php
session_start();
include('../database.inc.php');
$email=mysqli_real_escape_string($con,$_POST['email']);
// check email exist 
$selectemail="select * from user where email='$email'";
$execute = mysqli_query($con, $selectemail);
 if ($execute->num_rows == 1) {
    $row = mysqli_fetch_assoc($execute);
    $_SESSION['is_email']=$row['email'];
} 
else{
    $sql="insert into user (email) values('$email')";
    $res=mysqli_query($con,$sql);
    $_SESSION['is_email']=$email;
}

echo "success";

?>