<?php
// Create connection
$con = mysqli_connect("localhost","username","password","inject_test");

if (mysqli_connect_errno($con)){
  echo "<font style=\"color:#9b0324\">Could not connect:". mysqli_connect_error()."</font\>";
  }
?>