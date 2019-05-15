<?php
session_start();
include_once('include/config.php');
?>
<!doctype html>
<html>
<head>
<style>




</style>

 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="file://///jcub.edu.au/homedirs$/team17nov18/HT/lab06/js/nav.js"></script>
    <title>Sports WareHouse</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="file://///jcub.edu.au/homedirs$/team17nov18/HT/lab06/js/Read_more.js">	</script>



</head>
	<body onLoad="run_first()">

<?php
if(isset($_POST['name'], $_POST['email'], $_POST['Phone'], $_POST['Quantity'], $_POST['id'], $_POST['Address'], $_POST['zip'])) {
    //make the database connection
    $conn  = db_connect();
    $name = $conn -> real_escape_string($_POST['name']);
    $email = $conn -> real_escape_string($_POST['email']);
	$Phone = $conn -> real_escape_string($_POST['Phone']);
	$Quantity = $conn -> real_escape_string($_POST['Quantity']);
	$id = $conn -> real_escape_string($_POST['id']);
	$Address = $conn -> real_escape_string($_POST['Address']);
	$zip = $conn -> real_escape_string($_POST['zip']);
    //create an insert query
    $sql = "insert into customer (name, email, Phone, Quantity, id, Address, zip)  VALUES ('$name', '$email', '$Phone', '$Quantity', '$id', '$Address', '$zip')";
    //execute the query
    if($conn -> query($sql))
    {
		
    }
    $conn -> close();
}
else {
	
	

       echo "Error";
}
?>


</body>
