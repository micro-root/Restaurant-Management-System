<?php

    $givencus=filter_input(INPUT_POST, 'ID' );
    $givenitem=filter_input(INPUT_POST, 'Number' );
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
		SELECT COUNT(Item_Number)
		FROM `Order Detail`
		INNER JOIN (SELECT Order_Number
		FROM `Customer Order`
		WHERE Customer_ID='$givencus'
		) as t1
		ON t1.Order_Number = `Order Detail`.Order_Number
		WHERE Item_Number='$givenitem'";
		
		


		if($con->query($sql))
		{
			echo "Customer with ID $givencus Ordered Item with Item Number $givenitem";
			echo "<br>";
			$result=$con->query($sql);
			while($row=$result->fetch_array())
			{
				echo $row[0];
			}
			echo " times";
		}
		else 
		{
			echo "error".$sql."<br>".$con->error;
		}
	$con->close();	
	}


?>