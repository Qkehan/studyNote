<?php
    header("Content-type: text/html;charset=utf-8"); 
    //用来判断用户登录条件,如果登录成功,跳转至index.php  
    session_start();  
    if(isset($_POST["login"])){
        $user = $_POST["username"];   
        $pass = $_POST["password"];   
        if($user == "" || $pass == ""){
            header('refresh:3; url = login.php');  
            echo "用户名密码不能为空,3秒钟自动跳转到登录页面!";  
            /*   
            echo "<script>
                    alert('用户名密码不能为空!!');  
                    window.location.href='login.php';  
                </script>"; 
            */
        } else if($user != "mr" || $pass != "123456"){
            header('refresh:3; url = login.php');  
            echo "用户名密码错误,3秒钟自动跳转到登录页面!";  
        } else if($user == "mr" && $pass == "123456"){
            //登录成功,把信息保存在session中  
            $_SESSION[$user];  
        }
    }




?>