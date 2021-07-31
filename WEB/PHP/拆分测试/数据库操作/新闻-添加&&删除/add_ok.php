<?php
    //向数据库里面添加数据   
    header("Content-type:text/html;charset=utf-8");

    //连接服务器  
    include("conn.php");   //$conn = 服务器    

    //计算数据表中的条目数量   
    // $res=mysqli_query($conn,"select * from db_news");
    // $num=mysqli_num_rows($res);


    if(isset($_POST['Submit']) && $_POST['name'] != NULL && $_POST['news'] != NULL){
        //插入的SQL语句   
        $name = $_POST['name'];
        $news = $_POST['news']; 
        //操作数据库   
        $insert = mysqli_query($conn,"INSERT INTO news(name,news) VALUES('$name','$news')");  
        //如果操作成功  
        if($insert){
            echo "<script>
                    alert('添加成功!');   
                    window.location.href='index.php';  
                </script>";  
        } else {
            echo "<script>
                    alert('发表失败!');   
                    window.location.href='add.php';  
                </script>";  
        };
        
    } else {
        echo "<script>
                alert('标题或内容不能为空!');   
                window.location.href='add.php';  
            </script>";  
    };
    

?>