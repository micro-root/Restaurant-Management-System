<?php

$Item_Number=filter_input(INPUT_POST, 'Item_Number');
$Price=filter_input(INPUT_POST, 'Price');
$Name=filter_input(INPUT_POST, 'Name');
$Availability=filter_input(INPUT_POST, 'Availability');
if(!empty($Item_Number) && !empty($Price) && !empty($Name) && !empty($Availability)){
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
		$sql = "INSERT INTO Inventory (Item_Number,Price,Name,Availability) values ('$Item_Number','$Price','$Name','$Availability')";
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