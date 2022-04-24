<?php
	include_once 'hmdb.php';
	
	
	@$bb_no = $_SESSION['id'];
	// $bb_no = $_SESSION['id'];		
	if(!isset($bb_no)){
		header("Location: ../homepage.php");
	}

	
	$aadhar = $_POST['aadhar'];
	$amount = $_POST['amount'];
	
	$result = mysqli_fetch_array(mysqli_query($conn, "SELECT btype, rhf FROM donor WHERE aadhar='$aadhar'"));
	$btype = $result[0];
	$rhf = $result[1];
	
	$sql = "INSERT INTO blood(aadhar, b_type, rh, amount, bb_no) VALUES('$aadhar', '$btype', '$rhf', $amount, $bb_no)";
	$verify = mysqli_query($conn, $sql);
	
	if($verify){
		header("Location: ../bloodbank.php?donation=success");
	} else {
		header("Location: ../bloodbank.php?donation=failure");
	}