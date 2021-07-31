<?php
    header("Content-type: text/html;charset=utf-8"); 
    session_start();   

    //首先判断COOKIE是否有记住用户信息   
    if(isset($_COOKIE['username'])){
        $_SESSION['username'] = $_COOKIE['username'];  
    }
    

    //已经登陆   
    if(isset($_SESSION["username"])){
        echo "欢迎 ".$_SESSION["username"]."来到!<br>";  
        echo "<a href='loginout.php'>注销</a>";
    } else {
        //未登录   
        echo "您还未登录,请<a href='login.php'>登录</a>!!";
    }

?>