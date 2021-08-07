<?php


    $link = mysqli_connect("localhost","root","");     //连接服务器   
    mysqli_set_charset($link,'utf8');    
    mysqli_query($link, "use qkehan");     //选择数据库   
    
?>