<?php 
	
$servername = "localhost";
$username = "bestyout_youtubepromotion";
$password = "oRFRGPIw.3hm";
$database = "bestyout_youtubepromotion";

// Create connection
$con = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

