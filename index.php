<?php
session_start();
include("db_connect.php");
?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Login - SQL Injuction</title>
</head>
<body style="font-family: sans-serif; padding-top: 30px;">
  <div style="margin: 20px auto; max-width: 900px">
		
		<div style="height: 25px; background-color: #005;">
			<p style="color:white; text-align: center;">
				SQL Injection : Login Page 
			</p>
        </div>
		<div>
		<fieldset style="text-align: center; margin: 20px; padding: 10px;">
			<legend>Login Here</legend>
				<form method="POST" action="index.php" autocomplete="off">
					<p>
						Username:  <input type="text" id="user" name="user"><br /></br />
						Password: <input type="password" id="password" name="password">
					</p>
					<br />
					<p>
						<input type="submit" value="Submit"/> 
						<input type="reset" value="Reset"/>
					</p>
				</form>
		</fieldset>
		</div>

<?php

if (!empty($_POST['user'])) {
$user = ($_POST['user']);
$pass = $_POST['password'];

$q = "SELECT * FROM users where username = '$user' AND password = '$pass';";
$_SESSION['q'] = $q;
	if (!mysqli_query($con,$q))
	{
		die('Error: ' . mysqli_error($con));
	}
	
	$result = mysqli_query($con,$q);
	$row_count = mysqli_num_rows($result);

	if ($row_count > 0) {
		$row = mysqli_fetch_array($result);
		if ($row){
			$_SESSION["user"] = $row[0];			
			header('Location:home.php');
		}
	}
	else{
		echo "<font style=\"color:#9b0324\"><br \>Login failed. Incorrect Username/Password.</font\>";
		echo "<br><br>";
		echo "SQL Query: ".$q;
	}
}
?>
	
</div> 
  
</body>
</html>