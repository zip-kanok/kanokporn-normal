<?php
$q=$_GET["q"];

//Add database connection here
$host = "localhost";
$user = "egco427";
$pass = "egco427";
$database = "egco427";

$con = mysqli_connect($host, $user, $pass, $database) or die("Could not connect to host.");
$sql = "SELECT * FROM ajaxusers WHERE ID='".$q."'";
$result = mysqli_query($con,$sql) or die("Error");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)){
    $Firstname = $row['FirstName'];
    $Lastname = $row['LastName'];
    $Age = $row['Age'];
    $Hometown = $row['Hometown'];
    $Job = $row['Job'];
	echo "<tr><td>".$Firstname."</td><td>".$Lastname."</td><td>".$Age."</td><td>".$Hometown."</td><td>".$Job."</td></tr>";
}
//Add codes here
echo "</table>";

mysqli_close($con);
?> 