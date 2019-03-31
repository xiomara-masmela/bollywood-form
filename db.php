<?php

//global $con;
$con = mysqli_connect("127.0.01", "root", "", "movie_booking") or die ("error");
// Check connection
if(mysqli_connect_errno($con))  echo "Failed to connect MySQL: " .mysqli_connect_error();
?>
