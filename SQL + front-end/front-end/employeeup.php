<?php include "header.php"; ?>

	<form method="post" action ="employeeupdate.php">
		Updated Name:
		<input type="text" name="Name" ><br>
		Employee ID:
		<input type="number" name="Employee_ID" ><br>
		Updated Address:
		<input type="text" name="Address" ><br>
		Updated Gender:
		<input type="text" name="Gender" ><br>
		<input type="submit" name="submit" value="Submit">
</form>

<a href="create.php">Previous</a><br>
<a href="index.php">Back to Homepage</a>
<?php include "footer.php"; ?>