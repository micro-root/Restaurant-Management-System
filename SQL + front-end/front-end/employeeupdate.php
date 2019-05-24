<?php

$Name=filter_input(INPUT_POST, 'Name');
$Employee_ID=filter_input(INPUT_POST, 'Employee_ID');
$Address=filter_input(INPUT_POST, 'Address');
$Gender=filter_input(INPUT_POST, 'Gender');

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
		$check= "SELECT * from Employee WHERE Employee.Employee_ID='$Employee_ID'";
		if(mysqli_num_rows($con->query($check))>0)
			{
				if(!empty($Name))
	            {
	            	$sql = "UPDATE Employee SET Name = '$Name'
	               WHERE Employee.Employee_ID = '$Employee_ID' ";
	            }
	            if(!empty($Address))
				{
					$sql1 = "UPDATE Employee SET Address = '$Address'
	               WHERE Employee.Employee_ID = '$Employee_ID' ";
	            }
	            
	            if(!empty($Gender))
	            {
	            	$sql2 = "UPDATE Employee SET Gender = '$Gender'
	               WHERE Employee.Employee_ID = '$Employee_ID' ";
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
					echo " Address Updated "."<br>";
				
				} 
				if($con->query($sql2))	
				{
					$flag=1;
					echo " Gender Updated"."<br>";
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