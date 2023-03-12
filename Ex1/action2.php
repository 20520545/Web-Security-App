
<?php
 
    // Check whether submit button is clicked?
    if (!isset($_POST['btn-submit'])){
        die('');
    }
    else {
        echo "Submited!\n";
    }

    //Embedded file connect to database
    include('connect.php');
          
          
    //receive data from file register.html
    $username   = $_POST['txtUsername'];
    $password   = $_POST['txtPassword'];
    
    //check whether the fields are filled in?
    if (!empty($username) && !empty($password)) 
    {
       
        // Compare input vs database 
        $sql = $conn->query("SELECT * FROM `users` WHERE username = N'$username' AND password = N'$password' ");

        // Inform login success or failed 
        if (mysqli_num_rows($sql) > 0) {
            echo "Login success";
        } else {
            echo "Login failed, please enter again!";
        }
        
    } else {
        echo "You need to fill in all fields before register.\n";
    }
          
    
        
  

?>
