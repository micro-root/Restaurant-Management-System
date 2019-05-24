
<?php include "header.php"; ?>

	<form method="post" action ="resadd.php">
		Name:
		<input type="text" name="Name" ><br>
		Restarurant Number:
		<input type="number" name="Restaurant_Number" ><br>
		Phone Number:
		<input type="number" name="Phone_Number" ><br>
		Address:
		<input type="text" name="Address" ><br>
		<input type="submit" name="submit" value="Submit">
</form>

<a href="create.php">Previous</a><br>
<a href="index.php">Back to Homepage</a>
<?php include "footer.php"; ?>