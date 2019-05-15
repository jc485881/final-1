<?php
//must appear BEFORE the <html> tag
session_start();
include_once('file:///d|/Downloads/PHP_Part2/lab06/include/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="file:///d|/Downloads/PHP_Part2/lab06/js/nav.js"></script>
    <script src="file:///d|/Downloads/PHP_Part2/lab06/js/read_more.js"></script>
    <title>ABC</title>
</head>
<body onLoad="run_first()">
<?php include("file:///d|/Downloads/PHP_Part2/lab06/include/banner.inc") ?>
<?php include("file:///d|/Downloads/PHP_Part2/lab06/include/nav.inc") ?>
<?php
if(isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['Quantity'], $_POST['address'], $_POST['zip'])) {
    //make the database connection
    $conn  = db_connect();
    $name = $conn -> real_escape_string($_POST['name']);
    $email = $conn -> real_escape_string($_POST['email']);
    $phone = $conn -> real_escape_string($_POST['phone']);
    $Quantity = $conn -> real_escape_string($_POST['Quantity']);
    $address = $conn -> real_escape_string($_POST['address']);
    $postcode = $conn -> real_escape_string($_POST['zip']);
    //create an insert query
    $sql = "insert into customer (name, email, phone, Quantity, address, postcode) 
			VALUES ('$name', '$email', '$phone', '$Quantity', '$address', '$postcode')";
    //execute the query
    if($conn -> query($sql))
    {
		echo "<div class=\"container\">";
        echo "<div class=\"row\">";
        echo "<div class=\"col-s-12 col-12\">";
      
        echo "<p>Hi <b>$name</b></p>";
        echo "<p><a href=\"login.php\" id=\"4\" 
				onClick=\"nav_item_selected(4)\">You can login now</a></p>";
        echo "</div>";
        echo "</div>";
    }
    $conn -> close();
}
else {
    die("Input error");
}
?>
<?php include("file:///d|/Downloads/PHP_Part2/lab06/include/footer.inc") ?>
</body>
</html>




