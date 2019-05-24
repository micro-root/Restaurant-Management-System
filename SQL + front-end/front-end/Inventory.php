<?php include "header.php"; ?>

	<form method="post" action ="inventoryadd.php">
		Item Number:
		<input type="number" name="Item_Number" ><br>
		Price:
		<input type="float" name="Price" ><br>
		Name:
		<input type="text" name="Name" ><br>
		Availability:
		<input type="boolean" name="Availability" ><br>
		<input type="submit" name="submit" value="Submit">
</form>

<a href="create.php">Previous</a><br>
<a href="index.php">Back to Homepage</a>
<?php include "footer.php"; ?>