<?php
    $host = 'mysql_db'; //server name
    $username = 'root'; 
    $password = 'root';
    $dbname = 'users'; //database name
    $conn = mysqli_connect($host, $username, $password, $dbname);
    if(isset($_COOKIE['user']))
    {
        echo("<meta http-equiv=\"Refresh\" content=\"2; url=index.php\">");
    }
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
    //receive data from file register.html
        $username   = $_POST['txtUsername'];
        $password   = $_POST['txtPassword'];
        // Compare input vs database 
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";;
        $result = mysqli_query($conn,$query);
        // Inform login success or failed 
        if (mysqli_num_rows($result) >= 1) 
        {
            {
                setcookie("user",$username,0,"/");
                echo ("<h1>Login successfully!</h1>");
                sleep(3);
                echo("<meta http-equiv=\"Refresh\" content=\"2; url=index.php\">");

            }
            
        } 
        else
        {
            echo ("<h1>Wrong password, please enter again!</h1>");
            sleep(3);
            echo("<meta http-equiv=\"Refresh\" content=\"2; url=index.php\">");
        }


        // //echo '<br><a href=\'index.html?name='.'>Back to Login page</a>';
       
        $conn->close();
    }
    else
    die();
    
?>