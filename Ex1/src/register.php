<?php
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
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) 
        {
            echo "<h1>User already exists!</h1>";
            die();
        }
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if ($conn->query($query)===TRUE) 
        {
            echo "<h1>Registered successfully!</h1>";
            sleep(3);
            echo("<meta http-equiv=\"Refresh\" content=\"2; url=index.php\">");
        } 
    }
    catch(Exception $e)
    {
        echo($e->getMessage());
    }
    
?>