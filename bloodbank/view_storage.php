<?php
	include_once 'includes/hmdb.php';
	@$username = $_SESSION['username'];
	if(!isset($username)){
		header("Location: homepage.php");
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Storage</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
</head>

<body>
    <header>
        <center><h1 style="font-family: 'Abril Fatface', cursive;font-size: 60px; width: 100%;"><em>Blood Storage</em></center></h1>
    </header>
    <div class="table-responsive" style="background-color: #3aafa9;">
        <table class="table">
            <thead>
                <tr>
                    <th><em>Blood type</em></th>
                    <th><em>Rh factor</em></th>
                    <th><em>Amount(L)</em></th>
                </tr>
            </thead>
            <tbody>
                <?php
					
					$bb_no = $_SESSION['id'];		
					// $result = mysqli_query($conn, "SELECT btype, rhf, amount FROM bb_view WHERE bb_no='$bb_no'");
                    $result = mysqli_query($conn, "SELECT b_type, rh, SUM(amount) FROM blood WHERE bb_no='$bb_no' GROUP BY b_type, rh");
					
					while($row = mysqli_fetch_assoc($result)){
						echo "<tr>";
						foreach($row as $field=> $value){
							echo "<td>" . $value . "</td>";
						}
						echo "</tr>";
					}
				?>
            </tbody>
        </table>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>