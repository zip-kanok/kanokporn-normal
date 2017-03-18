<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
  <head>
    <title>Practical AJAX: Working with PHP and MySQL</title>
  </head>
  <body>

<?php
// load configuration file
require_once('error_handler.php');
require_once('config.php');

// connect to the database
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);      
// the SQL query to execute
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql= 'SELECT id, username FROM users'; 

// execute the query
$result = mysqli_query($conn, $sql);

// loop through the results
while ($row = mysqli_fetch_assoc($result)) 
{
  // extract user id and name
  $userid = $row['id'];
  $username = $row['username'];

  // do something with the data (here we output it)
  echo 'Name of user #' . $userid . ' is ' . $username . '<br/>';
}

// close the database connection
mysqli_close($conn);
?>

  </body>
</html>
