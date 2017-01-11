<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>COMP 6120 Term Project</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>

	<body style="">

		<?php
		echo "<h1>Bookstore Database</h1>";
		$dbhost = "acadmysql.duc.auburn.edu";
		$dbuser = "krd0015";
		$dbpass = "noneshallpass";
		$dbname = "krd0015db";

		$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);



		echo "<div class=\"container\">";
		echo "<h2>Book</h2>";
		$query = "SHOW COLUMNS FROM Book";
		$result = mysqli_query($con, $query);

		echo "<table class=\"table table-striped\">";
    	echo "<thead><tr>";
    	while ($row = mysqli_fetch_row($result))
    		echo "<th>", $row[0], "</th>";
    	echo "</tr></thead>";

    	$query = "SELECT * FROM Book";
		$result = mysqli_query($con, $query);

		echo "<tbody>";

		while($row = mysqli_fetch_row($result))
		{	
			echo "<tr>";
			foreach($row as $value)
			{
				echo "<td>", $value, "</td>";
			}
			echo "</tr>";
		}



		echo "</tbody>";
  		echo"</table>";
		echo "</div>";

				echo "<div class=\"container\">";
		echo "<h2>Supplier</h2>";
		$query = "SHOW COLUMNS FROM Supplier";
		$result = mysqli_query($con, $query);

		echo "<table class=\"table table-striped\">";
    	echo "<thead><tr>";
    	while ($row = mysqli_fetch_row($result))
    		echo "<th>", $row[0], "</th>";
    	echo "</tr></thead>";

    	$query = "SELECT * FROM Supplier";
		$result = mysqli_query($con, $query);

		echo "<tbody>";

		while($row = mysqli_fetch_row($result))
		{	
			echo "<tr>";
			foreach($row as $value)
			{
				echo "<td>", $value, "</td>";
			}
			echo "</tr>";
		}

		echo "</tbody>";
  		echo"</table>";
		echo "</div>";



		echo "<div class=\"container\">";
		echo "<h2>Orders</h2>";
		$query = "SHOW COLUMNS FROM Orders";
		$result = mysqli_query($con, $query);

		echo "<table class=\"table table-striped\">";
    	echo "<thead><tr>";
    	while ($row = mysqli_fetch_row($result))
    		echo "<th>", $row[0], "</th>";
    	echo "</tr></thead>";

    	$query = "SELECT * FROM Orders";
		$result = mysqli_query($con, $query);

		echo "<tbody>";

		while($row = mysqli_fetch_row($result))
		{	
			echo "<tr>";
			foreach($row as $value)
			{
				echo "<td>", $value, "</td>";
			}
			echo "</tr>";
		}

		echo "</tbody>";
  		echo"</table>";
		echo "</div>";


		echo "<div class=\"container\">";
		echo "<h2>OrderDetail</h2>";
		$query = "SHOW COLUMNS FROM OrderDetail";
		$result = mysqli_query($con, $query);

		echo "<table class=\"table table-striped\">";
    	echo "<thead><tr>";
    	while ($row = mysqli_fetch_row($result))
    		echo "<th>", $row[0], "</th>";
    	echo "</tr></thead>";

    	$query = "SELECT * FROM OrderDetail";
		$result = mysqli_query($con, $query);

		echo "<tbody>";

		while($row = mysqli_fetch_row($result))
		{	
			echo "<tr>";
			foreach($row as $value)
			{
				echo "<td>", $value, "</td>";
			}
			echo "</tr>";
		}

		echo "</tbody>";
  		echo"</table>";
		echo "</div>";


		echo "<div class=\"container\">";
		echo "<h2>Employee</h2>";
		$query = "SHOW COLUMNS FROM Employee";
		$result = mysqli_query($con, $query);

		echo "<table class=\"table table-striped\">";
    	echo "<thead><tr>";
    	while ($row = mysqli_fetch_row($result))
    		echo "<th>", $row[0], "</th>";
    	echo "</tr></thead>";

    	$query = "SELECT * FROM Employee";
		$result = mysqli_query($con, $query);

		echo "<tbody>";

		while($row = mysqli_fetch_row($result))
		{	
			echo "<tr>";
			foreach($row as $value)
			{
				echo "<td>", $value, "</td>";
			}
			echo "</tr>";
		}

		echo "</tbody>";
  		echo"</table>";
		echo "</div>";


		echo "<div class=\"container\">";
		echo "<h2>Subject</h2>";
		$query = "SHOW COLUMNS FROM Subject";
		$result = mysqli_query($con, $query);

		echo "<table class=\"table table-striped\">";
    	echo "<thead><tr>";
    	while ($row = mysqli_fetch_row($result))
    		echo "<th>", $row[0], "</th>";
    	echo "</tr></thead>";

    	$query = "SELECT * FROM Subject";
		$result = mysqli_query($con, $query);

		echo "<tbody>";

		while($row = mysqli_fetch_row($result))
		{	
			echo "<tr>";
			foreach($row as $value)
			{
				echo "<td>", $value, "</td>";
			}
			echo "</tr>";
		}

		echo "</tbody>";
  		echo"</table>";
		echo "</div>";


		echo "<div class=\"container\">";
		echo "<h2>Customer</h2>";
		$query = "SHOW COLUMNS FROM Customer";
		$result = mysqli_query($con, $query);

		echo "<table class=\"table table-striped\">";
    	echo "<thead><tr>";
    	while ($row = mysqli_fetch_row($result))
    		echo "<th>", $row[0], "</th>";
    	echo "</tr></thead>";

    	$query = "SELECT * FROM Customer";
		$result = mysqli_query($con, $query);

		echo "<tbody>";

		while($row = mysqli_fetch_row($result))
		{	
			echo "<tr>";
			foreach($row as $value)
			{
				echo "<td>", $value, "</td>";
			}
			echo "</tr>";
		}

		echo "</tbody>";
  		echo"</table>";
		echo "</div>";


		echo "<div class=\"container\">";
		echo "<h2>Shipper</h2>";
		$query = "SHOW COLUMNS FROM Shipper";
		$result = mysqli_query($con, $query);

		echo "<table class=\"table table-striped\">";
    	echo "<thead><tr>";
    	while ($row = mysqli_fetch_row($result))
    		echo "<th>", $row[0], "</th>";
    	echo "</tr></thead>";

    	$query = "SELECT * FROM Shipper";
		$result = mysqli_query($con, $query);

		echo "<tbody>";

		while($row = mysqli_fetch_row($result))
		{	
			echo "<tr>";
			foreach($row as $value)
			{
				echo "<td>", $value, "</td>";
			}
			echo "</tr>";
		}

		echo "</tbody>";
  		echo"</table>";
		echo "</div>";

		mysqli_close($con);
		?>

		<form id="qry-form" role="form" method="post" action="query.php">
		<textarea name="input" placeholder="Enter query here" class="form-control" rows="6"></textarea>
		<button type="submit" class="btn btn-default">Submit</button>

	</body>
</html>
