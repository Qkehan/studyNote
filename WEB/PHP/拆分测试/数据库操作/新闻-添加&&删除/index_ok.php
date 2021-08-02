<?php
    header("Content-type:text/html;charset=utf-8");  

    //连接服务器  
    include("conn.php");   //$conn = 服务器    


    $pid = $_POST['id'];   //接收POST来的ID值   
    echo "<script>
        alert(' ".$pid." ');
    </script>";       
    //判断ID和submit按钮是否存在  
    if(isset($pid) && isset($_POST['Submit'])){
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
        };

    };
    

    
    
    


?>