<?php

$id=filter_input(INPUT_POST, 'Customer_ID');
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
		$check= "SELECT * from Customer WHERE Customer.Customer_ID='$id'";
		if(mysqli_num_rows($con->query($check))>0)
			{
				$sql = "DELETE FROM Customer WHERE Customer.Customer_ID = $id";
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