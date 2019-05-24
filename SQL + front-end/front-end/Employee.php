<?php include "header.php"; ?>

	<form method="post" action ="employeeadd.php">
		Name:
		<input type="text" name="Name" ><br>
		Employee ID:
		<input type="number" name="Employee_ID" ><br>
		Address:
		<input type="text" name="Address" ><br>
		Gender:
		<input type="text" name="Gender" ><br>
		Restaurant:
		<input type="number" name="Restaurant" ><br>
		
		<input type="radio" name="job" value="waiter" >Waiter<br>
		<input type="radio" name="job" value="chef">Chef<br>
		<input type="radio" name="job" value="manager" >Manager<br>

		<input type="submit" name="submit" value="Submit">

</form>

<a href="create.php">Previous</a><br>
<a href="index.php">Back to Homepage</a>
<?php include "footer.php"; ?>