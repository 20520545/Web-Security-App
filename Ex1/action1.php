
<?php
 
   

    //Embedded file connect to database
    include('connect.php');
          
          
    //receive data from file register.html
    $username   = $_POST['txtUsername'];
    $password   = $_POST['txtPassword'];
    
    //check whether the fields are filled in?
    if (!empty($username) && !empty($password)) 
    {
       
        // save user's info into table 
        $sql = "INSERT INTO `users` (`username`, `password`) VALUES('$username', '$password') ";

        // Inform save data into database 
        if ($conn->query($sql)===TRUE) {
            echo "Save data successfully!\n";
        } else {
            echo "Error {$sql}".$conn->error;
        }
        
    } else {
        echo "You need to fill in all fields before register.\n";
    }
          
    
        
  

?>
