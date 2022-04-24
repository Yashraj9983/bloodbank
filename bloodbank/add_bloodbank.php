<?php
	@$error = $_GET['error']
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add Bloodbank</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-position: top;background-size: cover;opacity: 1;">   
	<?php
		if(isset($error)){
			if($error == 1){
				echo "<center><p style=\"color:white;background-color:red\">Registration Failed</p></center>";
			} else {
				echo "<center><p style=\"color:white;background-color:green\">Registration Successful</p></center>";
			}
		}
	?>
	<div id="container">
		<form action="includes/add_bloodbank.php" method="post" style="width: 450px;
            background-color: #f06654;
            padding: 15px;
            margin:auto;
            margin-top: 9%;
            display: grid;
            place-items: center;
            border-radius: 1rem;">
			<fieldset style ="padding: 15px;
                width: 400px;
                line-height: 1;
                border-color: #D4A373;">
				<legend style="display: grid;
            place-items: center; font-size:25px">Enter Bloodbank Details</legend>
				<label for="username" style="margin: 10px;">Username:</label>
    			<input type="text" id="username" name="username"><br>
				<label for="username" style="margin: 10px;">Password:</label>
                <input type="password" name="password" required><br>
				<label for="address" style="margin: 10px;">Address:</label>
    			<input type="text" id="address" name="address"><br>
				<label for="phone" style="margin: 10px;">Phone number:</label>
				<input type="tel" id="phone_no" name="phone_no" pattern="[0-9]{10}"><br><br>
				<center><input type="submit" value="REGISTER" id="register" style="background-color: #D4A373;
                color:rgb(0, 0, 0);
                padding: 5px;
                font-size: 14px;
                border-radius: 6px;
                width: 100px;"></center>
			</fieldset>
		</form>
	</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
</body>

</html>