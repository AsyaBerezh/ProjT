<?php
session_start();

include_once("db_connect.php");

if (isset($_POST['login'])) {
    $userName = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($userName) and !empty($password)) {
    	$user = $conn->query("SELECT * FROM `users` WHERE `Password`='" . $password . "' AND `Username`='" . $userName . "'")->fetch_assoc();

	    if (!empty($user)) {
	        $_SESSION['user'] = $user;
	        header('Location: ./../Stakeholders.php');
	    } else {
	    	header('Location: ./../Register.php?error=no_such_user');
	    }
    } else {
    	header('Location: ./../Register.php?error=required');
    }

    exit;
}