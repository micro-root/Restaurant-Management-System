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
		SELECT *
		FROM Customer
		INNER JOIN (SELECT Customer_ID 
		FROM `Customer Order`
			GROUP BY Customer_ID
			ORDER BY COUNT(*) DESC LIMIT 1) as t1
		ON t1.Customer_ID = Customer.Customer_ID";
		
		


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