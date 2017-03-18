<?php
    require_once('dbconfig.php');
    
    $con = mysqli_connect($host, $user, $pass, $database ) or die("Could not connect to host.");

    for($i=9;$i<12;$i++){
        $user = "mary".$i;
        $pass = "mary".$i;
        
        $sql = "insert into users values(null,'".$user."','".md5($pass)."')";
        $result = mysqli_query($con , $sql);
        if ($result) {
            // code...
            echo "Insert ".$user."Successful !!.<br>";
        }
        else echo("Insert Fail !<br>");
         
    }
    
    $query = "SELECT * FROM users"; 
    $result = mysqli_query($con,$query) or die("Can't Found Data");
    
    while ($row = mysqli_fetch_array($result)) {
    // extract each field
    $field1 = $row['id']; 
    $field2 = $row['username'];
    // print the data (here is output)
    echo 'Id: '.$field1.' '.'Username: ' . $field2.' <br/>'; 
      
    }
    mysqli_close($con); 
?>