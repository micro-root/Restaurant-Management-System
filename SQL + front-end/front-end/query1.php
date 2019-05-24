<?php


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
		SELECT Name
		FROM Inventory
		INNER JOIN (SELECT Item_Number
		FROM `Order Detail`
			GROUP BY Item_Number
			ORDER BY COUNT(*) DESC LIMIT 1) as t1
		ON t1.Item_Number = Inventory.Item_Number";
		
		


		if($con->query($sql))
		{
			$result=$con->query($sql);
			while($row=$result->fetch_array())
			{
				
				echo $row['Name'];
			}
		}
		else 
		{
			echo "error".$sql."<br>".$con->error;
		}
	$con->close();	
	}


?>