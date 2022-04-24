<?php
	include_once 'hmdb.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$result = mysqli_fetch_array(mysqli_query($conn, "SELECT type,password FROM users WHERE username='$username'"));
	$password_hash = $result[1];
	$type = $result[0];
	
	$verify_login = password_verify($password, $password_hash);
	
	if($verify_login){
		$_SESSION['type'] = $type;
		$_SESSION['username'] = $username;
		if($type == 'donor'){
			header("Location: ../donor_home.php");
			$result = mysqli_fetch_array(mysqli_query($conn, "SELECT aadhar FROM donor WHERE username='$username'"));
		} else {
			header("Location: ../bloodbank.php");
			$result = mysqli_fetch_array(mysqli_query($conn, "SELECT bb_no FROM bloodbank WHERE username='$username'"));
		}
		$_SESSION['id'] = $result[0];
	} else {
		header("Location: ../login.php?error=1");
	}