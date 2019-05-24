<?php

$Name=filter_input(INPUT_POST, 'Name');
$Resnum=filter_input(INPUT_POST, 'Customer_ID');
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
		$check= "SELECT * from Customer WHERE Customer.Customer_ID='$Resnum'";
		if(mysqli_num_rows($con->query($check))>0)
			{
				if(!empty($Name))
	            {
	            	$sql = "UPDATE Customer SET Name = '$Name'
	               WHERE Customer.Customer_ID = '$Resnum' ";
	            }
	            if(!empty($phone))
				{
					$sql1 = "UPDATE Customer SET Phone_Number = '$phone'
	               WHERE Customer.Customer_ID = '$Resnum' ";
	            }
	            
	            if(!empty($add))
	            {
	            	$sql2 = "UPDATE Customer SET Address = '$add'
	               WHERE Customer.Customer_ID = '$Resnum' ";
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