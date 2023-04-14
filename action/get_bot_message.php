<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
include('../database.inc.php');
$txt=mysqli_real_escape_string($con,$_POST['txt']);




if(isset($_SESSION['is_email'])){
    $is_email=$_SESSION['is_email'];
    $sql="select reply from chatbot_hints where question like '%$txt%'";
$res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        $row=mysqli_fetch_assoc($res);
        $html=$row['reply'];
    }else{
        $html="Sorry not be able to understand you";
    }
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($con,"insert into message(message,added_on,email,type) values('$txt','$added_on','$is_email','user')");
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($con,"insert into message(message,added_on,email,type) values('$html','$added_on','$is_email','bot')");
    echo $html;
}
else{
    $html="You are logged out ! <button class='btn btn-dark btn-sm' onclick='getchats()'>Login Again</button> ";
    echo $html;

}
