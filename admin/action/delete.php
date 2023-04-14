<?php
session_start();
include('../../database.inc.php');

$ID=mysqli_real_escape_string($con,$_POST['delete_id']);


function deletecategory($con, $ID)
{
	$sql = "Delete from chatbot_hints where id = " . $ID;
	$result_delete_data = mysqli_query($con, $sql);
	if (!$result_delete_data) {
		mysqli_error($con, $sql);
	} else {
		return false;
	}
}

$response = deletecategory($con,$ID);

if($response==false){
	echo 'success';
}