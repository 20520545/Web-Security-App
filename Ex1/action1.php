
<?php
 
    // Nếu không bấm nút submit thì không xử lý
    if (!isset($_POST['btn-submit'])){
        die('');
    }
    else {
        echo "Submited!\n";
    }
    //Nhúng file kết nối với database
    include('./db/connect.php');
          
          
    //Lấy dữ liệu từ file register.html
    $username   = $_POST['txtUsername'];
    $password   = $_POST['txtPassword'];
    
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!empty($username) && !empty($password)) 
    {
        //mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);
        //Lưu thông tin thành viên vào bảng
        $sql = "INSERT INTO `users` (`username`, `password`) VALUES('$username', '$password') ";

        
        if ($conn->query($sql)===TRUE) {
            echo "Save data successfully!\n";
        } else {
            echo "Error {$sql}".$conn->error;
        }
        
    } else {
        echo "You need to fill in all fields before register.\n";
    }
          
    
        
  

?>