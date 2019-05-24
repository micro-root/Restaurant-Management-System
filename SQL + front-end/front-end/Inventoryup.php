<?php include "header.php"; ?>

	<form method="post" action ="Inventoryupdate.php">
		Updated Name:
		<input type="number" name="Item_Number" ><br>
		Customer_ID:
		<input type="float" name="Price" ><br>
		Updated Phone Number:
		<input type="text" name="Name" ><br>
		Updated Address:
		<input type="Boolean" name="Availability" ><br>
		<input type="submit" name="submit" value="Submit">
</form>

<a href="update.php">Previous</a><br>
<a href="index.php">Back to Homepage</a>
<?php include "footer.php"; ?>