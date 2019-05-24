<?php

$Name=filter_input(INPUT_POST, 'Name');
$Resnum=filter_input(INPUT_POST, 'Restaurant_Number');
$phone=filter_input(INPUT_POST, 'Phone_Number');
$add=filter_input(INPUT_POST, 'Address');
if(!empty($Name) && !empty($Resnum) && !empty($phone) && !empty($add)){
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
		$sql = "INSERT INTO Restaurant (Name,Restaurant_Number,Phone_Number,Address) values ('$Name','$Resnum','$phone','$add')";
		if($con->query($sql))
		{
			echo "Added";

		}
		else 
		{
			echo "error".$sql."<br>".$con->error;
		}
	$con->close();	
	}

}
else 
{
	echo "All Fields Needed";
}


?>