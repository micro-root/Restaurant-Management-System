<?php

$order=filter_input(INPUT_POST, 'Order_Number');
$item=filter_input(INPUT_POST, 'Item_Number');
$quantity=filter_input(INPUT_POST, 'Quantity');
//$price=filter_input(INPUT_POST, 'Address');
$cust=filter_input(INPUT_POST, 'Customer_Number');
$waiter=filter_input(INPUT_POST, 'Waiter_Number');
$bill=filter_input(INPUT_POST, 'bill_number');
$date=filter_input(INPUT_POST, 'date');

if(!empty($order) && !empty($item) && !empty($quantity) && !empty($cust) && !empty($waiter) ){
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
		$sql0="SELECT Price FROM Inventory WHERE Inventory.Item_Number='$item'";
		
		$price=$con->query($sql0);
		$temp=$price->fetch_object();
		$res=$temp->Price*$quantity;
		//$Date=STR_TO_DATE('$date','%m-%d-%y');


		$sql = "INSERT INTO `Order Detail` (Order_Number , Item_Number, Quantity,Price) values ('$order','$item','$quantity','$res')";

		$sql1 ="INSERT INTO `Serves` (Waiter_ID , Customer_ID, Order_Number) values ('$waiter','$cust','$order')";
		$sql2="INSERT INTO `Bill` (Order_Number,Bill_Number,Total_Price, `Date/Time` ) values ('$order','$bill','$res','$date')";
		$sql3="INSERT INTO `Customer Bill` (Customer_ID, Bill_Number ) values ('$cust','$bill')";
		$sql4="INSERT INTO `Customer Order` (Customer_ID,Order_Number) values('$cust','$order')";

		if($con->query($sql) && $con->query($sql1)&& $con->query($sql2) && $con->query($sql3) && $con->query($sql4))
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
	echo "All Feilds Needed";
}


?>