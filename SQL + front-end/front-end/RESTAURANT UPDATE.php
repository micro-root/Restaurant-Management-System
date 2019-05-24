<?php include "header.php"; ?>

	<form method="post" action ="restaurantupdate.php">
		Updated Name:
		<input type="text" name="Name" ><br>
		Restarurant Number:
		<input type="number" name="Restaurant_Number" ><br>
		Updated Phone Number:
		<input type="number" name="Phone_Number" ><br>
		Updated Address:
		<input type="text" name="Address" ><br>
		<input type="submit" name="submit" value="Submit">
</form>

<a href="update.php">Previous</a><br>
<a href="index.php">Back to Homepage</a>
<?php include "footer.php"; ?>