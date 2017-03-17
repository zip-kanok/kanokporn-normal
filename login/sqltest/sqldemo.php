<form action ='sqldemo.php' method='POST'>
<table>
	<tr>
		<td>
			Show Username:
		</td>
		<td>
		<input type='text' name='name_bad'>
		</td>
	</tr>
	
</table>
<input type='submit' value='Show UserInfo'>
</form>

<?php

$host = "localhost";
$user = "egco427";
$pass = "egco427";
$database = "egco427";

$link = mysql_connect($host, $user, $pass) or die("Could not connect to host.");
mysql_select_db($database, $link) or die("Could not find database.");



// user input that uses SQL Injection
//$name_bad = "' or '1'='1"; 

if (!isset($_POST['name_bad'])) 
	$name_bad = "undefined";
else 
	$name_bad = $_POST['name_bad'];


if($name_bad != "undefined")
{
// our MySQL query builder, however, not a very safe one
$query_bad = "SELECT * FROM users WHERE username = '$name_bad'";


// display what the new query will look like, with injection
echo "Injection: " . $query_bad . "<br />";

$result = mysql_query($query_bad, $link) or die("Data not found.");

		// loop through the results
		while ($row = mysql_fetch_array($result)) 
		{
			// extract fields
			$id = $row['id'];
			$name = $row['name'];
			$username = $row['username'];
			$password = $row['password'];
			// do something with the data (here we output it)
			echo $id . ' ' . $name . ' ' . $username . '  ' . $password . '<br/>';
		}
}
?>
