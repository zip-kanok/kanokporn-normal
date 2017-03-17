<?php
    require_once('include/config.inc.php');

    $con = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD,DB_DATABASE) or die("Couldn't connect to Database");
    $query = "SELECT * FROM cardinfo";
    $result = mysqli_query($con,$query);
    $cardinfo = array();
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            array_push($cardinfo,$row);
        }
        
        echo json_encode($cardinfo);

    }
?>