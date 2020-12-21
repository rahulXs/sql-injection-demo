<?php

session_start();
$user = $_SESSION['user'];
$q = $_SESSION['q'];

?>

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Home - SQL Injuction</title>
</head>

<body style="font-family: sans-serif; padding-top: 30px;">
  	<div style="margin: 20px auto; max-width: 900px">
		
  		<div style="height: 25px; background-color: #005;">
			<p style="color:white; text-align: center;">
				SQL Injection : Home Page 
			</p>
        </div>
		<div>
		<fieldset style="text-align: center; margin: 20px; padding: 10px;">
			<legend>Message</legend>

			<p> Hello <?php echo $user;?>. You have successfully logged in. </p>
			<?php 
				echo "SQL Query: ".$q;
			?>
			<p><h4><a href="logout.php">Logout</a><h4> </p>
		</fieldset>
		</div>
	
	</div>
  
</body>
</html>