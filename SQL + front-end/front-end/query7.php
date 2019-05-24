<?php

    $givenOrder_Number_ID=filter_input(INPUT_POST, 'ID' );
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
		SELECT Inventory.Item_Number,Inventory.Price,Inventory.Name
		FROM Inventory
		INNER JOIN (SELECT *
		FROM `Order Detail`
		WHERE Order_Number='$givenOrder_Number_ID'
		) as t1
		ON t1.Item_Number = Inventory.Item_Number";
		
		


		if($con->query($sql))
		{
			$result=$con->query($sql);
			$row=$result->fetch_all(MYSQLI_ASSOC);
			
				echo '<pre>',print_r($row),'</pre>';
		}
		else 
		{
			echo "error".$sql."<br>".$con->error;
		}
	$con->close();	
	}


?>