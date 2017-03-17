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

include('config.php');
// Get form data values

//add code here

$unpop = $_POST["unpop"];
$caramel = $_POST["caramel"];
$caramelnut = $_POST["caramelnut"];
$toffeynut = $_POST["toffeynut"];
// If any of the quantities are blank, set them to zero

//add code here
if($unpop == ""){  $unpop = 0;  } 
if($caramel==""){  $caramel= 0;  }
if($caramelnut==""){  $caramelnut = 0;  }
if($toffeynut=="") {  $toffeynut = 0;  }

$product = array("unpop"=>$unpop,"caramel"=>$caramel,"caramelnut"=>$caramelnut,"toffeynut"=>$toffeynut);


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

<?php
	// connect to DB
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE) or die("Couldn't connect to Database");
    foreach ($product as $temp=>$temp_val) {
        // code...
        if($temp_val != 0){
            if($temp=="unpop"){
                $query_insert = "INSERT INTO popcorn VALUES(null,'".$temp."',3.00,'".$unpop."','".$unpop_cost."')";
            }
            if($temp=="caramel"){
            	$query_insert = "INSERT INTO popcorn VALUES(null,'".$temp."',3.50,'".$caramel."','".$caramel_cost."')";
            }
            if($temp=="caramelnut"){
            	$query_insert = "INSERT INTO popcorn VALUES(null,'".$temp."',4.50,'".$caramelnut."','".$caramelnut_cost."')";
            }
            if($temp=="toffeynut"){
            	$query_insert = "INSERT INTO popcorn VALUES(null,'".$temp."',5.00,'".$toffeynut."','".$toffeynut_cost."')";
            }
            
            $result = mysqli_query($con,$query_insert);
            if($result){
            	echo "insert successfully !";
            }
            else echo "insert failed !";
        }
    }


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
	
	<?php 
	
	//Display Table
	$query = "SELECT product,price,quantity,cost FROM popcorn";
	$result = mysqli_query($con,$query);
	while($row = mysqli_fetch_array($result)){
		$tb_product = $row['product'];
		$tb_unitprice = $row['price'];
		$tb_quantity = $row['quantity'];
		$tb_cost = $row['cost'];
		echo "<tr><td>".$tb_product."</td><td>".$tb_unitprice."</td><td>".$tb_quantity."</td><td>".$tb_cost."</td></tr>";
		
	}

	

	?>
		
</table>
<p /> <p />
<?php

	//query data from database and show in the bottom of page
	
	$query_unpop = 'SELECT SUM( quantity ) AS tt_unpop FROM  popcorn WHERE product =  "unpop"';
	$query_caramel = 'SELECT SUM( quantity ) AS tt_caramel FROM  popcorn WHERE product =  "caramel"';
	$query_caramelnut = 'SELECT SUM( quantity ) AS tt_caramelnut FROM  popcorn WHERE product =  "caramelnut"';
	$query_toffeynut = 'SELECT SUM( quantity ) AS tt_toffeynut FROM  popcorn WHERE product =  "toffeynut"';

	
	$total_unpop = mysqli_fetch_array(mysqli_query($con,$query_unpop))['tt_unpop'];
	$total_caramel = mysqli_fetch_array(mysqli_query($con,$query_caramel))['tt_caramel'];
	$total_caramelnut = mysqli_fetch_array(mysqli_query($con,$query_caramelnut))['tt_caramelnut'];
	$total_toffeynut = mysqli_fetch_array(mysqli_query($con,$query_toffeynut))['tt_toffeynut'];

    echo "#Number of Unpopped Popcorn (1 lb.) :: ".$total_unpop."&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;|&emsp;Total Unpopped Popcorn Cost :: ".($total_unpop*3)."<br/>";
	echo "#Number of Caramel Popcorn (2 lb. canister) :: ".$total_caramel."&emsp;&emsp;&emsp;|&emsp;Total Unpopped Popcorn Cost :: ".($total_caramel*3.5)."<br/>";
	echo "#Number of Caramel Nut Popcorn (2 lb. canister) :: ".$total_caramelnut."&emsp;"."  "."|&emsp;Total Unpopped Popcorn Cost :: ".($total_caramelnut*4.5)."<br/>";
	echo "#Number of Toffey Nut Popcorn (2 lb. canister) :: ".$total_toffeynut."&emsp;&emsp;|&emsp;Total Unpopped Popcorn Cost :: ".($total_toffeynut*5)."<br/>";

?>
</body>
</html>

