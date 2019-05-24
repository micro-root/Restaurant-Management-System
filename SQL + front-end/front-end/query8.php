<?php
    
    $givenItem=filter_input(INPUT_POST, 'ID' );
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
		$sql="
		SELECT Availability
		FROM Inventory
		WHERE Item_Number = '$givenItem'";
		
		


		if($con->query($sql))
		{
			$result=$con->query($sql);
			if($result->fetch_object()->Availability >1)
			{
				echo "NO";
			}
			else 
			{
				echo "YES";
			}
		}
		else 
		{
			echo "error".$sql."<br>".$con->error;
		}
	$con->close();	
	}


?>