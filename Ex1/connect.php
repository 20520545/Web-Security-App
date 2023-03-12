<?php
    $host = 'localhost'; //server name
    $username = 'root'; 
    $password = '';
    $dbname = 'account'; //database name
   
    $conn = new mysqli($host, $username, $password, $dbname);
    
    // check connection
    if ($conn->connect_error){
        die("Connect database unsuccessfully!\n".$conn->connect_error);
    }

    echo "Connect database successfully!\n";
?>
