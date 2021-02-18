<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 

<link rel="stylesheet" type="text/css" href="email.php">
<link rel="stylesheet" type="text/css" href="URL.php">
<link rel="stylesheet" type="text/css" href="adress.php">
<link rel="stylesheet" type="text/css" href="interger.php">


</head>
<body>
	

<div class="container">
  <h4>Filters</h4>
  <form action="Filters.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="">URL:</label>
      <input type="" class="form-control" id="pwd" placeholder="Enter URL" name="url">
    </div>
    <div class="form-group">
      <label for="">Address:</label>
      <input type="" class="form-control" id="pwd" placeholder="Enter Address" name="address">
    </div>
    <div class="form-group">
      <label for="pwd">Interger:</label>
      <input type="" class="form-control" id="pwd" placeholder="Enter Interger" name="interger">
    </div>
    <br>
    <input type="submit" class="btn btn-primary" value="submit" name="save" />
  </form>
</div>


<?php
$email = '';
$url = '';
$ip ='';
$int ='' ;

if (isset($_POST['save'])) {
	# code...
	$email = $_POST['email'];
	$url = $_POST['url'];
	$ip = $_POST['ip'];
	$int = $_POST['int'];

	echo "<br";

$email = "";
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}



$url = "";
$url = filter_var($url, FILTER_SANITIZE_URL);
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}



$ip = "";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}



$int = "";
if (empty($_POST["interger"])) {
    $genderErr = "interger is required";
  } else {
    $gender = test_input($_POST["interger"]);
  }
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}


}



?>




</body>
</html>