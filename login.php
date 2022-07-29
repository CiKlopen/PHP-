<?php 
function cback(){
    echo "<script language='javascript' type='text/javascript'>window.location.href='index.html'</script>";
}
if(isset($_POST["submit"])){
    //第一个if条件是 判断表单提交
    if($_POST["username"] == "" || $_POST["password"] == ""){
        //第二个if条件是 判断用户是否输入
        echo "<script>alert('请输入账号或密码')</script>";
        exit(cback());
    }else{
    $username = $_POST["username"];
    $password = $_POST["password"];
    //将用户输入的值提取出来
    include("conn.php");
    //导入conn.php文件 导入的文件之间共享变量 new了一个mysql的连接 由于是面向对象 所以调用方式与属性 的方法不太一样 
    $conn->query("set names utf8"); //直接向 conn对应的数据库发送指令
    $sql = "select use_name,use_psd from runoob_use where use_name = '$username' and use_psd = '$password'"; //这是要执行的sql语句 作用到query()函数中的
    $check_query = $conn->query($sql); //query() 函数 是发送指令语句的函数封装
    //echo $check_query->fetch_array();
    if($RE = mysqli_fetch_array($check_query,MYSQLI_ASSOC)){
        //这个if的 mysqli_fetch_array()函数 是接收特定的返回集 然后以数组的方式进行 键值进行的对应 或 使用常规数组进行获取数据
        echo "<script>alert('登录成功')</script>";
        echo "数据库内容 ".$RE["use_name"].$RE["use_psd"];
        $varify = 1;
    }else{
        echo "<script>alert('账号或密码错误！')</script>";
        $varify = 0;
    }
}
}else{
    echo "发生未知错误";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>个人主页</title>
</head>
<body>
    <p>hello world</p>
    <?php if($varify){
        echo "<p>登录成功</p>";
        $url = "home.php";
        echo "<script language='javascript' type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";
    }else{
        echo "<p>login low</p>";
    }?>
</body>
</html>