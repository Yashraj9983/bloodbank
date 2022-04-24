<?php

	include_once 'hmdb.php';
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$phone_no = $_POST['phone_no'];
	$email = $_POST['email'];
	$weight = $_POST['weight'];
	$aadhar = $_POST['aadhar'];
	$btype = $_POST['btype'];
	$rhf = $_POST['rhf'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
	/*
	$sql = "CALL add_user('$fname', '$lname', '$gender', $age, '$phone_no', '$email', $weight, '$aadhar', '$btype', '$rhf', '$username', '$password_hash')";
	$verify = mysqli_query($conn, $sql);
	*/
	
	$sql = "INSERT INTO users(username, password, type) VALUES('$username', '$password_hash', 'donor')";
	$verify1 = mysqli_query($conn, $sql);
	
	$sql = "INSERT INTO donor(fname, lname, gender, age, phone_no, email, weight, aadhar, username, btype, rhf) VALUES('$fname', '$lname', '$gender', $age, '$phone_no', '$email', $weight, '$aadhar', '$username', '$btype', '$rhf')";
	$verify2 = mysqli_query($conn, $sql);
	
	
	if($verify1 && $verify2){
		header("Location: ../register.php?error=0");
	} else {
		header("Location: ../register.php?error=1");
	}