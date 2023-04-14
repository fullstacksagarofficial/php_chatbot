<?php
session_start();
include('../../database.inc.php');

$question=mysqli_real_escape_string($con,$_POST['question']);
$answer=mysqli_real_escape_string($con,$_POST['answer']);


$sql="insert into chatbot_hints (question,reply) values('$question','$answer')";
$res=mysqli_query($con,$sql);



?>