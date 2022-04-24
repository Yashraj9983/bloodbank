<?php
	@$error = $_GET['error']
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registration</title>
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
		<form action="includes/register_user.php" method="post" style="width: 450px;
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
            place-items: center; font-size:25px">DONOR REGISTRATION</legend>
				<label for="username" style="margin: 10px;">Username:</label>
    			<input type="text" id="username" name="username"><br>
				<label for="username" style="margin: 10px;">Password:</label>
                <input type="password" name="password" required><br>
				<label for="fname" style="margin: 10px;">FIRST NAME:</label>
    			<input type="text" id="fname" name="fname"><br>
    			<label for="lname" style="margin: 10px;">LAST NAME:</label>
    			<input type="text" id="lname" name="lname"><br>
                <label for="address" style="margin: 10px;">AADHAR NO.:</label>
    			<input type="text" id="aadhar" name="aadhar"><br>
				<label for="age" style="margin: 10px;">AGE:</label>
    			<input type="number" id="age" name="age" min="18"><br>
				<label for="gender" style="margin: 10px;">GENDER:</label>
					<input type="radio" id="male" name="gender" value="male">
					<label for="male" style="margin: 10px;">Male</label>
					<input type="radio" id="female" name="gender" value="female">
					<label for="female" style="margin: 10px;">Female</label><br>
				<label for="weight" style="margin: 10px;">WEIGHT:</label>
  				<input type="number" id="weight" name="weight" min="50"><br>
				<select name="btype" id="btype">
					<option value="">Select blood type</option>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="AB">AB</option>
					<option value="O">O</option>
				</select>
				<select name="rhf" id="btype">
					<option value="">Select RH factor</option>
					<option value="+ve">+ve</option>
					<option value="-ve">-ve</option>
				</select>
				<label for="phone" style="margin: 10px;">PHONE NUMBER:</label>
				<input type="tel" id="phone_no" name="phone_no" pattern="[0-9]{10}"><br>
				<label for="email" style="margin: 10px;">EMAIL ID:</label>
    			<input type="email" id="email" name="email"><br><br>
				<input type="submit" value="REGISTER" id="register" style="background-color: #D4A373;
                color:rgb(0, 0, 0);
                padding: 5px;
                font-size: 14px;
                border-radius: 6px;
                width: 100px;"><br><br>
			</fieldset>
		</form>
	</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
</body>

</html>