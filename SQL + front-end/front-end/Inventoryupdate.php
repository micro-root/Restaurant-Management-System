<?php
$Inum=filter_input(INPUT_POST, 'Item_Number');
$price=filter_input(INPUT_POST, 'Price');
$name=filter_input(INPUT_POST, 'Name');
$Av=filter_input(INPUT_POST, 'Availability');

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
		$check= "SELECT * from Inventory WHERE Item_Number='$Inum'";
		if(mysqli_num_rows($con->query($check))>0)
			{
				if(!empty($Name))
	            {
	            	$sql = "UPDATE Inventory SET price = '$price'
	               WHERE Inventory.Item_Number = '$Inum' ";
	            }
	            if(!empty($phone))
				{
					$sql1 = "UPDATE Inventory SET Name = '$name'
	               WHERE Inventory.Item_Number = '$Inum' ";
	            }
	            
	            if(!empty($add))
	            {
	            	$sql2 = "UPDATE Inventory SET Availability = '$Av'
	               WHERE Inventory.Item_Number = '$Inum' ";
	            }
		        $flag=0;
		        if($con->query($sql))
				{
					$flag=1;
					echo " Price Updated"."<br>";
				}
				if($con->query($sql1))
				{
					$flag=1;
					echo "  Name Updated "."<br>";
				
				} 
				if($con->query($sql2))	
				{
					$flag=1;
					echo " Availability Updated"."<br>";
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