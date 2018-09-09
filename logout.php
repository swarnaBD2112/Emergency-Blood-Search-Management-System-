<?php
	session_start();
 	require_once "functions.php";
    $user = new LogInRegistration();
    $user->logOutUser();
    header("Location:login.php?respons=1");
    exit();
?>