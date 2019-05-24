<?php
$host = "localhost";
	$user = "root";
	$pass = "root";
	$database = "Restaurant";

	$con = new mysqli($host, $user, $pass, $database);
	if(mysqli_connect_error())
	{
		die('connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
		else 
		{
			echo "error".$sql."<br>".$con->error;
		}
	$con->close();	

?>
