<?php
    header("Content-type:text/html;charset=utf-8");


    $conn = mysqli_connect("localhost","root","","qkehan");     
    // mysqli_select_db($conn, "qkehan");   
    mysqli_query($conn, "set names utf8"); 
    
?>