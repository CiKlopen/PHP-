<?php 
function log_message($text){
    if(isset($text)){
        echo "<script>alert('$text')</script>";
    }else{
        echo "<script>alert('确认账号密码输入')</script>";
    }
}
?>