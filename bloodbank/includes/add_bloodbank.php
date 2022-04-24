<?php

	include_once 'hmdb.php';
	
	$address = $_POST['address'];
	$phone_no = $_POST['phone_no'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
	
	$sql = "INSERT INTO users(username, password, type) VALUES('$username', '$password_hash', 'bloodbank')";
	$verify1 = mysqli_query($conn, $sql);
	
	$sql = "INSERT INTO bloodbank(address, phone_no, username) VALUES('$address', '$phone_no', '$username')";
	$verify2 = mysqli_query($conn, $sql);
	
	
	if($verify1 && $verify2){
		header("Location: ../add_bloodbank.php?error=0");
	} else {
		header("Location: ../add_bloodbank.php?error=1");
	}