<?php
    
    $start=filter_input(INPUT_POST, 'start' );
    $end=filter_input(INPUT_POST, 'end' );
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
		WHERE Inventory.Price >= '$start' AND Inventory.Price  <= '$end'";
		
		


		if($con->query($sql))
		{
			echo "Range Rs $start - $end";
			echo "<br>";
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