<?php

$id=filter_input(INPUT_POST, 'Restaurant_Number');
if(!empty($id))
{
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
			$check= "SELECT * from Restaurant WHERE Restaurant_Number='$id'";
		if(mysqli_num_rows($con->query($check))>0)
			{	
				$sql = "DELETE FROM Restaurant WHERE Restaurant.Restaurant_Number = $id";
				if($con->query($sql))
				{
					echo "deleted";
				}
				else 
				{
					echo "error".$sql."<br>".$con->error;
				}
			}	
		else 
		{
			echo "Record does not exist";
		}
	$con->close();	
	}

}
else 
{
	echo "please input a number";
}


?>