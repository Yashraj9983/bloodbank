<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add Donation</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color: rgb(255,255,255);">
    <div class="contact-clean" style="background-color: rgb(255,255,255);">
        <form class="border rounded" action="includes/add_donation.php" method="post">
            <div class="form-group"><input class="border-dark form-control" type="text" name="aadhar" style="font-family: 'Alfa Slab One', cursive;color: rgb(7,7,7);" placeholder="Aadhar No"></div><input class="form-control" type="text" name="amount" placeholder="Amount of Blood Donated"
                style="font-family: 'Alfa Slab One', cursive;color: rgb(7,7,7);">
            <div class="form-group"><button class="btn btn-primary text-dark" type="submit" style="font-family: 'Alfa Slab One', cursive;padding: 21px;margin: 15px 151px 2px;">add</button></div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>