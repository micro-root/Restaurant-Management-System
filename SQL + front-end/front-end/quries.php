<?php include "header.php"; ?>
<p><l4>run query</l4></p>
<li><a href="query1.php"><strong>Query1</strong></a></li>
<li><a href="query2.php"><strong>Query2</strong></a></li>


<form method="post" action ="query3.php">
		Date for Query3:<br>
		<input type="date" name="date" ><br>
		<input type="submit" name="submit" value="Submit">
</form>
<form method="post" action ="query4.php">
		Date query4:<br>
		<input type="date" name="date" ><br>
		<input type="submit" name="submit" value="Submit">
</form>
<li><a href="query5.php"><strong>query5</strong></a></li>
<p>
<form method="post" action ="query6.php">
		Customer ID for query6:<br>
		<input type="Number" name="ID" ><br>
		<input type="submit" name="submit" value="Submit">
</form>
<form method="post" action ="query7.php">
		Order Number for query7:<br>
		<input type="Number" name="ID" ><br>
		<input type="submit" name="submit" value="Submit">
</form>
<form method="post" action ="query8.php">
		item Number for query8:<br>
		<input type="Number" name="ID" ><br>
		<input type="submit" name="submit" value="Submit">
</form>
<form method="post" action ="query9.php">
		prices for query9:<br>
		<input type="Number" name="start" ><br>
		<input type="Number" name="end" ><br>
		<input type="submit" name="submit" value="Submit">
</form>
<form method="post" action ="query10.php">
		Customer ID for query10:<br>
		<input type="Number" name="ID" ><br>
		Item Number for query10:<br>
		<input type="Number" name="Number" ><br>
		<input type="submit" name="submit" value="Submit">
</form>
<a href="index.php">Back to Homepage</a>
</p>


<?php include "footer.php"; ?>