<?php

$Name=filter_input(INPUT_POST, 'Name');
$Resnum=filter_input(INPUT_POST, 'Restaurant_Number');
$phone=filter_input(INPUT_POST, 'Phone_Number');
$add=filter_input(INPUT_POST, 'Address');

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
		$check= "SELECT * from Restaurant WHERE Restaurant.Restaurant_Number='$Resnum'";
		if(mysqli_num_rows($con->query($check))>0)
			{
				if(!empty($Name))
	            {
	            	$sql = "UPDATE Restaurant SET Name = '$Name'
	               WHERE Restaurant.Restaurant_Number = '$Resnum' ";
	            }
	            if(!empty($phone))
				{
					$sql1 = "UPDATE Restaurant SET Phone_Number = '$phone'
	               WHERE Restaurant.Restaurant_Number = '$Resnum' ";
	            }
	            
	            if(!empty($add))
	            {
	            	$sql2 = "UPDATE Restaurant SET Address = '$add'
	               WHERE Restaurant.Restaurant_Number = '$Resnum' ";
	            }
		        $flag=0;
		        if($con->query($sql))
				{
					$flag=1;
					echo " Name Updated"."<br>";
				}
				if($con->query($sql1))
				{
					$flag=1;
					echo " Phone Number Updated "."<br>";
				
				} 
				if($con->query($sql2))	
				{
					$flag=1;
					echo " Address Updated"."<br>";
				}
				if($flag==0) 
				{
					echo "error"."<br>".$sql."<br>".$con->error;
				}
		}
		else 
		{
			echo "Record does not exist";
		}
	$con->close();	
	}


?>