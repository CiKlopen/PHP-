<?php
$localhost = "127.0.0.1";
$susername = "root";
$spassword = "12345";
$dbname = "yibo";
$conn = new mysqli($localhost,$susername,$spassword,$dbname);
if($conn->connect_error){
    die("连接失败：".$conn->connect->error);
}else{
    //echo "连接成功";
}



?>