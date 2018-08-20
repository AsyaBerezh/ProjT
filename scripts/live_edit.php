 <?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'sms2');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

header('Content-Type: application/json');
$input = filter_input_array(INPUT_POST);


if ($input['action'] == 'edit') {
    $mysqli->query("UPDATE stakeholders SET Fullname='" . $input['Fullname'] . "', 
    	Position='" . $input['Position'] . "', Description='" . $input['Description'] . "', 
    	Success_criteria='" . $input['Success_criteria'] . "', Key_stakeholder='" . $input['Key_stakeholder'] . "', 
    	Deadline='" . $input['Deadline'] . "', Result='" . $input['Result'] . "', 
    	Final='" . $input['Final'] . "' WHERE ID_stk='" . $input['ID_stk'] . "'");
} else if ($input['action'] == 'delete') {
    $mysqli->query(" DELETE FROM `stakeholders` WHERE ID_stk ='" . $input['ID_stk'] . "'");
} else if ($input['action'] == 'add') {
    $mysqli->query("INSERT INTO `stakeholders` (`ID_user`, `Fullname`, `Position`, `Description`, `Success_criteria`, `Key_stakeholder`, `Deadline`, `Result`, `Final`) VALUES (" . $_SESSION['user']['ID_user'] . ",'" . $input['Fullname'] . "', '"
	. $input['Position']. "', '". $input['Description']. "', '". $input['Success_criteria']. "', '"
	. $input['Key_stakeholder']. "', '". $input['Deadline']. "', '". $input['Result']. "', '"
	. $input['Final']. "')");

    echo "INSERT INTO `stakeholders` (`ID_user`, `Fullname`, `Position`, `Description`, `Success_criteria`, `Key_stakeholder`, `Deadline`, `Result`, `Final`) VALUES (" . $_SESSION['user']['ID_user'] . ",'" . $input['Fullname'] . "', '"
    . $input['Position']. "', '". $input['Description']. "', '". $input['Success_criteria']. "', '"
    . $input['Key_stakeholder']. "', '". $input['Deadline']. "', '". $input['Result']. "', '"
    . $input['Final']. "')";
} 

header('Location: ./../Stakeholders.php');