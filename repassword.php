<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>密码重置</title>
</head>
<body>
<h1 align="center">重置密码</h1>


<div align="center" style="height:120px">
    <form action="" method="post" name="re_password">
        <input  type="text" name="old_password" placeholder="请输入密码"/><br><br>
        <input  type="text" name="new_password" placeholder="请输入新密码"/><br><br>
        <input  type="submit" name="submit" value=" 重 置 密 码 " style="width:120px" />
    </form>
</div>
</body>
</html>
<?php
include("log.php");



if($_POST["submit"] == " 重 置 密 码 "){
    $old_password = $_POST["old_password"];
    $new_password = $_POST["new_password"];
    if($old_password == ""){
        log_message("请检查输入密码");
    }else if($new_password == ""){
        log_message("请检查输入新的密码");
    }else{
        log_message("密码重置成功");
    }
}


?>