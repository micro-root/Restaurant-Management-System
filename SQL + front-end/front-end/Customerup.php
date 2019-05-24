<?php include "header.php"; ?>

	<form method="post" action ="customerupdate.php">
		Updated Name:
		<input type="text" name="Name" ><br>
		Customer_ID:
		<input type="number" name="Customer_ID" ><br>
		Updated Phone Number:
		<input type="number" name="Phone_Number" ><br>
		Updated Address:
		<input type="text" name="Address" ><br>
		<input type="submit" name="submit" value="Submit">
</form>

<a href="database/update.php">Previous</a><br>
<a href="index.php">Back to Homepage</a>
<?php include "footer.php"; ?>