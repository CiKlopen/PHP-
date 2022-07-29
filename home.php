<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 留言板 1.0 </title>
</head>
<body>
<div align = "center">
    <h1>欢迎来到我的留言板</h1>
</div>
<form action="" method="post">
<div>
    <div align = "right">    
        <div align="left">
        <p>精选留言</p>
        <p>用户留言</p>
        <textarea name="message_nickname" style="width: 500px; height: 500px;"></textarea>
        <br><br>
        <div>
        <input type="text" name="message_nickname" placeholder="请输入留言昵称" style="width: 150px;">
    
        </div>  
            <br>
                <textarea  placeholder="请输入留言！！！" type="text" name="message_a" style="height:300px; width: 300px"></textarea>
            <br>
        <input type="submit" name="submit" value=" 提 交 " style="width: 250px;" )> 
        </div>
     
    </div>
</div>
</form>
</body>
</html>
<?php
    function cback(){
        echo "<script language='javascript' type='text/javascript'>window.location.href='index.html'</script>";
    }
    $formurl = "index.html";
    if($_SERVER["HTTP_REFERER"] == ""){
        echo "<script>alert('非法访问')</script>";
        exit(cback());
    }

    
    // echo "1";
    // echo $_SERVER["HTTP_REFERER"];

?>