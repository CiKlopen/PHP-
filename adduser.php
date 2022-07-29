<?php 
    if($_POST["username"] == "" and $_POST["password"] == ""){
        exit("<script>alert('确认账号密码输入')</script>");
    }else if($_POST["password"] != $_POST["age_password"]){
        echo "请检查两次输入的密码";
    }else if(varify_name($_POST["username"])){
        echo "账号已存在";
        exit();
    }else
    {
        $name=$_POST["username"];
        $psd=$_POST["password"];
        include("conn.php");
        $sql="INSERT INTO runoob_use(use_name,use_psd) VALUES('$name','$psd')";
        if($conn->query($sql) === true){
            echo "注册成功";
            exit();
        }else{
            echo "账号已存在了".$name.$psd;
            exit();
        } 
    }
function varify_name($name){
    include("conn.php");
    $sql = "select use_name from runoob_use where use_name=$name";
    $result = $conn->query($sql);
    if(mysqli_fetch_array($result,MYSQLI_ASSOC)){
        return true;
    }
    return false;
}   
?>