<?php
    //Embedded file connect to database
    $host = 'mysql_db'; 
    $username = 'root'; 
    $password = 'root';
    $dbname = 'users'; 
    if(isset($_COOKIE['user']))
    {
        echo("<meta http-equiv=\"Refresh\" content=\"2; url=index.php\">");
    }
    try
    {
        $conn = mysqli_connect($host, $username, $password, $dbname);
        if ($conn->connect_error)
        {
            die("Connection failed: ". $conn->connect_error);
        }
    }
    catch (Exception $e)
    {
        echo($e->getMessage());
    }
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
    //receive data from file register.html
        $username   = $_POST['txtUsername'];
        $password   = $_POST['txtPassword'];
    }
    else
    {
        die("<h1>Wrong method!</h1>");
    } 
    try
    {
        $sql = "INSERT INTO users (username, password) VALUES ($username, $password)";
        if ($conn->query($sql)===TRUE) 
        {
            echo "Registered successfully!\n";
            sleep(3);
            echo("<meta http-equiv=\"Refresh\" content=\"2; url=index.php\">");
        } 
    }
    catch(Exception $e)
    {
        echo($e->getMessage());
    }
    
?>