
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
        $Account_check = $conn->query("SELECT * FROM `dangnhap` WHERE username = N'$username'");
        $Password_check = $conn->query("SELECT * FROM `dangnhap` WHERE password = N'$password' ");
        // Inform login success or failed 
        if (mysqli_num_rows($Account_check) > 0) {
            if(mysqli_num_rows($Password_check) > 0)
            {
                echo "Login successfully";
            }
            else
            {
                echo "Wrong password, please enter again";
            }
        } else {
            echo "Username does not exist, please enter again!";
        }
        
    } else {
        echo "You need to fill in all fields before register.\n";
    }
    
    echo "<br><a href='login.html'>Back to Login page</a>";
          
    
        
  

?>
