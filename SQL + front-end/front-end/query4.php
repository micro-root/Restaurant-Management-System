<?php
    
    $givenDate=filter_input(INPUT_POST, 'date' );
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
		SELECT COUNT(Order_Number)
		FROM BILL
		WHERE `Date/Time`= '$givenDate'";
		
		


		if($con->query($sql))
		{
			$result=$con->query($sql);
			echo "$givenDate";
			echo "<br>";
			while($row=$result->fetch_array())
			{
				echo $row[0];
			}
		}
		else 
		{
			echo "error".$sql."<br>".$con->error;
		}
	$con->close();	
	}


?>