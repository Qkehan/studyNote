<?php
    header("Content-type:text/html;charset=utf-8");  

    //连接服务器  
    include("conn.php");   //$conn = 服务器    

    
    $pid = $_POST['htmlID'];   //接收POST来的ID值        
    

    // DELETE FROM `news` WHERE `news`.`id` = 6   数据库语法  
    $del = mysqli_query($conn,"DELETE FROM news WHERE news.id='$pid' ");  

    if($del){
        echo "<script>
                alert('删除成功!');  
                window.location.href='index.php';  
            </script>";  
    } else {
        echo "<script>
                alert('删除失败!');  
                window.location.href='index.php';  
            </script>"; 
    }


?>