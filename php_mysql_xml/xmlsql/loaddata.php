<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head>
		<title>Example: Working with PHP and MySQL</title>
	</head>
	<body>
	<h2>loaddata.php</h2>
	<?php


		//Database Configuration : username: root, password: , databasename: person, table: personinfo 
		$host = "localhost";
		$user = "egci427";
		$pass = "egci427";
		$database = "egci427";

		//Load data from Database
		$con = mysqli_connect($host, $user, $pass, $database) or die("Could not connect to host.");
		$query = "SELECT * FROM personinfo ORDER BY lastname";
		$result = mysqli_query($con, $query) or die("Data not found.");		

		while ($row = mysqli_fetch_array($result)) 
		{
			// extract firstname and lastname
			$field1 = $row['firstname'];
			$field2 = $row['lastname'];

			// Print output as " Name: Bob Cat")
			echo 'Name: ' . $field1 . '  ' . $field2 . '<br/>';
		}
		
	?>
	</body>
</html>
