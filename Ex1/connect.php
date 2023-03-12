<?php
    $host = 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
    $username = 'root'; //Tên sử dụng Database
    $password = '';//Mật khẩu của tên sử dụng Database
    $dbname = 'account'; //Đây là tên của Database
   
    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error){
        die("Connect database unsuccessfully!\n".$conn->connect_error);
    }

    echo "Connect database successfully!\n";
?>