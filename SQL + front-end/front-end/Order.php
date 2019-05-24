<?php include "header.php"; ?>

	<form method="post" action ="Orderadd.php">
		Order Number:
		<input type="number" name="Order_Number" ><br>
		Item:
		<input type="number" name="Item_Number" ><br>
		Quantity:
		<input type="number" name="Quantity" ><br>
		Customer Number:
		<input type="number" name="Customer_Number" ><br>
		Waiter 
		<input type="number" name="Waiter_Number" ><br>
		Bill:
		<input type="number" name="bill_number" ><br>
		Date:
		<input type="date" name="date" ><br>
		<input type="submit" name="submit" value="Submit">
</form>

<a href="create.php">Previous</a><br>
<a href="index.php">Back to Homepage</a>
<?php include "footer.php"; ?>