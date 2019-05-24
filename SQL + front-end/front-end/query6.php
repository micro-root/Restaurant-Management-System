<?php

    $givenCustomer_ID=filter_input(INPUT_POST, 'ID' );
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
		SELECT *
		FROM `Order Detail`
		INNER JOIN (SELECT Order_Number
		FROM `Customer Order`
		WHERE Customer_ID='$givenCustomer_ID'
		) as t1
		ON t1.Order_Number = `Order Detail`.Order_Number";
		
		


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