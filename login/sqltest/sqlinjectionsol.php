
<form action ='sqlinjectionsol.php' method='POST'>
<table>
	<tr>
		<td>
			Username:
		</td>
		<td>
		<input type='text' name='username'>
		</td>
	</tr>
	<tr>
		<td>
			Password:
		</td>
		<td>
			<input type='text' name='password'>
		</td>
	</tr>
</table>
<input type='submit' value='Login'>
</form>
<?php


$host = "localhost";
$user = "egco427";
$pass = "egco427";
$database = "egco427";

$link = mysql_connect($host, $user, $pass) or die("Could not connect to host.");
mysql_select_db($database, $link) or die("Could not find database.");

if (!isset($_POST['username'])) 
	$username = "undefined";
else 
	$username = $_POST['username'];


if (!isset($_POST['password']))
	$password = "undefined";
else 
	$password = stripslashes($_POST['password']);

if($username != "undefined"){
if($username&&$password)
{
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	$query = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");
	
	if(mysql_num_rows($query))
		die("Access granted! ");
	else
		die("Access denied using password $password");
}
}
?>