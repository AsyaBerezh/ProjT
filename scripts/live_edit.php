 <?php

$mysqli = new mysqli('localhost', 'root', '', 'sms2');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}
header('Content-Type: application/json');
$input = filter_input_array(INPUT_POST);

if ($input['action'] == 'edit') {
    $mysqli->query("UPDATE stakeholders SET Fullname='" . $input['Fullname'] . "', Position='" . $input['Position'] . "', Description='" . $input['Description'] . "' WHERE ID_stk='" . $input['ID_stk'] . "'");
} else if ($input['action'] == 'delete') {
    $mysqli->query("UPDATE stakeholders SET deleted=1 WHERE ID_stk='" . $input['ID_stk'] . "'");
} else if ($input['action'] == 'add') {
    $mysqli->query("INSERT INTO stakeholders (Fullname, Position, Description, Success_criteria, Key_stakeholder, Deadline, Result, Final) VALUES (". $input['Fullname']. ",". $input['Position']. ",". $input['Description']. ",". $input['Success_criteria']. ",". $input['Key_stakeholder']. ",". $input['Deadline']. ",". $input['Result']. ",". $input['Final']. ")");
} 

//include_once("db_connect.php");
// if ($input['action'] == 'edit') {	
// 	$update_field='';
// 	if(isset($input['Fullname'])) {
// 		$update_field.= "Fullname='".$input['Fullname']."'";
// 	} else if(isset($input['Position'])) {
// 		$update_field.= "Position='".$input['Position']."'";
// 	} else if(isset($input['Description'])) {
// 		$update_field.= "Description='".$input['Description']."'";
// 	} else if(isset($input['Success_criteria'])) {
// 		$update_field.= "Success_criteria='".$input['Success_criteria']."'";
// 	} else if(isset($input['Key_stakeholder'])) {
// 		$update_field.= "Key_stakeholder='".$input['Key_stakeholder']."'";
// 	} else if(isset($input['Deadline'])) {
// 		$update_field.= "Deadline='".$input['Deadline']."'";
// 	} else if(isset($input[''])) {
// 		$update_field.= "Result='".$input['Result']."'";
// 	} else if(isset($input['Final'])) {
// 		$update_field.= "Final='".$input['Final']."'";
// 	}	
// 		if($update_field && $input['ID_stk']) {
// 		$sql_query = "UPDATE stakeholders SET $update_field WHERE ID_stk='" . $input['ID_stk'] . "'";	
// 		mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));		
// 	}
// }
echo json_encode($input);
?>
