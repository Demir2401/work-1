<?php

 error_reporting(E_ALL);
	ini_set("display_error", 1);

	$email_valid = "Demir@gmail.com";
	$pass_valid = "DN";

	$email   = $_POST['email'];
	$password = $_POST['password'];

	if (($email_valid == $email) && ($pass_valid == $password)) {
		correctlogin($email);
	}else {
		incorrectlogin($email);
	
	}

	function correctlogin ($email) {
		error_log("Login accepted for " . $email,0);
		header("location:home.html");
		exit();

	}

	function incorrectlogin ($email) {
		error_log("Login failed for " . $email,0);
		header("location:index.html");
		exit();
	}

?>