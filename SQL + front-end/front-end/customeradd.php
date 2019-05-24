<?php

$Name=filter_input(INPUT_POST, 'Name');
$Customer_ID=filter_input(INPUT_POST, 'Customer_ID');
$Phone_Number=filter_input(INPUT_POST, 'Phone_Number');
$Address=filter_input(INPUT_POST, 'Address');
if(!empty($Name) && !empty($Customer_ID)){
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
		$sql = "INSERT INTO Customer (Name,Customer_ID,Phone_Number,Address) values ('$Name','$Customer_ID','$Phone_Number','$Address')";
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
	echo "Name & Customer_ID Fields Needed";
}


?>