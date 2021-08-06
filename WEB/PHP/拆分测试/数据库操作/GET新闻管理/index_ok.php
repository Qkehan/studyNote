<?php
    $link = mysqli_connect("localhost","root","");     //连接服务器   
    mysqli_set_charset($link,'utf8');    
    mysqli_query($link, "use qkehan");     //选择数据库    

    $id = $_GET['id'];   
    $del = mysqli_query($link, "delete from news where id='$id'   ");   
    if($del){
        echo "<script>
                alert('删除成功!');  
                window.location.href='index.php';  
            </script>";  
    }else{
        echo "<script>
                alert('删除失败!');  
                window.location.href='index.php';  
            </script>";  
    }



?>