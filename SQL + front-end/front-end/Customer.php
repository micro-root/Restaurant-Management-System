<?php include "header.php"; ?>

	<form method="post" action ="customeradd.php">
		Name:
		<input type="text" name="Name" ><br>
		Customer ID:
		<input type="number" name="Customer_ID" ><br>
		Phone Number:
		<input type="number" name="Phone_Number" ><br>
		Address:
		<input type="text" name="Address" ><br>
		<input type="submit" name="submit" value="Submit">
</form>

<a href="create.php">Previous</a><br>
<a href="index.php">Back to Homepage</a>
<?php include "footer.php"; ?>