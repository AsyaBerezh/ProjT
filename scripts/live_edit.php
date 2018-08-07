<?php
include_once("db_connect.php");
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {	
	$update_field='';
	if(isset($input['Fullname'])) {
		$update_field.= "Fullname='".$input['Fullname']."'";
	} else if(isset($input['Position'])) {
		$update_field.= "Position='".$input['Position']."'";
	} else if(isset($input['Description'])) {
		$update_field.= "Description='".$input['Description']."'";
	} else if(isset($input['Success_criteria'])) {
		$update_field.= "Success_criteria='".$input['Success_criteria']."'";
	} else if(isset($input['Key_stakeholder'])) {
		$update_field.= "Key_stakeholder='".$input['Key_stakeholder']."'";
	}	else if(isset($input['Deadline'])) {
		$update_field.= "Deadline='".$input['Deadline']."'";
	}	else if(isset($input['Result'])) {
		$update_field.= "Result='".$input['Result']."'";
	}	else if(isset($input['Final'])) {
		$update_field.= "Final='".$input['Final']."'";
	}	
		if($update_field && $input['id']) {
		$sql_query = "UPDATE developers SET $update_field WHERE id='" . $input['id'] . "'";	
		mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));		
	}
}

?>
