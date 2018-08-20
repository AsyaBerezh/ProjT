<?php

session_start();

$_SESSION = array();

header('Location: ./../Register.php');

session_destroy();