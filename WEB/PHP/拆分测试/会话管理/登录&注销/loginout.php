<?php
    header("Content-type: text/html;charset=utf-8");   
    session_start();   
    
    //清清除session  
    $val = $_SESSION['username'];  
    $_SESSION = array();  //空数组  
    session_destroy();   
    //清除COOKIE   
    setcookie("username", "",time()-1);   
    setcookie("password", "",time()-1);  

    echo "欢迎".$val."下次光临!<br>";    
    echo "重新<a href='login.php'>登录</a>";    

?>