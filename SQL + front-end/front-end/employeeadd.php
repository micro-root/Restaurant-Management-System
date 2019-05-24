<?php

$Name=filter_input(INPUT_POST, 'Name');
$Employee_ID=filter_input(INPUT_POST, 'Employee_ID');
$Address=filter_input(INPUT_POST, 'Address');
$Gender=filter_input(INPUT_POST, 'Gender');
$job =filter_input(INPUT_POST, 'job');
$Restaurant=filter_input(INPUT_POST, 'Restaurant');
$temp=`Works At`;
if(!empty($Name) && !empty($Employee_ID) && !empty($Address) && !empty($Gender)){
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
		$sql = "INSERT INTO Employee (Name,Employee_ID,Address,Gender) values ('$Name','$Employee_ID','$Address','$Gender')";
		$sql2;
		if($job==manager)
		{
			$sql2="INSERT INTO $job (ID,Restaurant_Number,Name) values ('$Employee_ID','$Restaurant','$Name')";
		}
		else
		{
			$sql2="INSERT INTO $job (Name,ID) values ('$Name','$Employee_ID')";
		}
		$sql3="INSERT INTO `Works At` (`ID`, `Restaurant_Number`) VALUES ('$Employee_ID', '$Restaurant')";
		if($con->query($sql) && $con->query($sql2) && $con->query($sql3))
		{
			echo "Added";
		}
		else 
		{
			echo "error".$sql."<br>".$con->error;
		}
	$con->close();	
	}

}
else 
{
	echo "All Fields Needed";
}


?>