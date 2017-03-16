<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.1 //EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<!-- popcorn3.php - Processes the form described in
     popcorn3.html
     -->
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title> Process the popcorn3.html form </title>
</head>
<body>
<?php

// Get form data values

//add code here
$name = $_POST["name"];
$street = $_POST["street"];
$city = $_POST["city"];
$unpop = $_POST["unpop"];
$caramel = $_POST["caramel"];
$caramelnut = $_POST["caramelnut"];
$toffeynut = $_POST["toffeynut"];
$payment = $_POST["payment"];

// If any of the quantities are blank, set them to zero

//add code here
if($unpop == ""){  $unpop = 0;  } 
if($caramel==""){  $caramel= 0;  }
if($caramelnut==""){  $caramelnut = 0;  }
if($toffeynut=="") {  $toffeynut = 0;  }



// Compute the item costs and total cost

//add code here
$unpop_cost = 3.0 * $unpop;
$caramel_cost = 3.5 * $caramel;
$caramelnut_cost = 4.5 * $caramelnut;
$toffeynut_cost = 5 * $toffeynut;

$total_price = $unpop_cost+$caramel_cost+$caramelnut_cost+$toffeynut_cost;
$total_items = $unpop+$caramel+$caramelnut+$toffeynut;

// Return the results to the browser in a table

?>
<h4> Customer: </h4>
<?php
print ("$name <br /> $street <br /> $city <br />");

?>
<p /> <p />

<table border = "border">
	<caption> Order Information </caption>
	<tr>
		<th> Product </th>
		<th> Unit Price </th>
		<th> Quantity Ordered </th>
		<th> Item Cost </th>
	</tr>
	
	<!-- add codes here -->
	<?php 
	if ($unpop != 0) {
		echo "<tr><td>Unpopped Popcorn (1 lb.)</td><td>$3.00</td><td>$unpop</td><td>$unpop_cost</td></tr>"; 
	}
	if ($caramel != 0){
		echo "<tr><td>Caramel Popcorn (2 lb. canister)</td><td>$3.50</td><td>$caramel</td><td>$caramel_cost</td></tr>";
	}
	if ($caramelnut != 0){
		echo "<tr><td>Caramel Nut Popcorn (2 lb. canister)</td><td>$4.50</td><td>$caramelnut</td><td>$caramelnut_cost</td></tr>";
	}
	if ($toffeynut != 0){
		echo "<tr><td>Toffey Nut Popcorn (2 lb. canister)</td><td>$5.00</td><td>$toffeynut</td><td>$toffeynut_cost</td></tr>";
	}
	?>
		
	

</table>
<p /> <p />

<?php
print ("You ordered $total_items popcorn items <br />");
printf ("Your total bill is: $ %5.2f <br />", $total_price);
print ("Your chosen method of payment is: $payment <br />");
?>
</body>
</html>

