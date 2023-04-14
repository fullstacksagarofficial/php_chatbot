<?php
session_start();
include('../../database.inc.php');
$input = filter_input_array(INPUT_POST);
print_r($input);
if ($input['action'] == 'edit') {	
	$update_field='';
	if(isset($input['question'])) {
		$update_field.= "question='".$input['question']."'";
	}
    else if(isset($input['reply'])) {
		$update_field.= "reply='".$input['reply']."'";
	}
	if($update_field && $input['id']) {
		$sql_query = "UPDATE chatbot_hints SET $update_field WHERE id='" . $input['id'] . "'";	
		mysqli_query($con, $sql_query);		
	}
}


