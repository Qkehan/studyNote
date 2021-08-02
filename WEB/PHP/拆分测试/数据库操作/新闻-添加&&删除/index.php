<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .STYLE3{
            font-size: 18;  
            }
        body,td,th{
            font-size: 12px;
        }
    </style>
</head>
<body>
    <?php
        header("Content-type:text/html;charset=utf-8");
        
        echo '欢迎您！！';
        date_default_timezone_set('PRC');  
        echo date("Y-m-d H:i:s")."<br>";  
        echo '【新闻】'."<br>"; 
        echo "当前文件的路径为：".__FILE__.'<br><hr>'; 
        //
        //连接服务器  
        include("conn.php");   //$conn = 服务器  
        
        //命令  
        ?>

        <!-- POST   -->
        <form action="index_ok.php" method="POST" id="from">  

        <table border='0px' align='center'>
            <tr align='center'>
                <td>新闻标题</td>
                <td>新闻内容</td>
                <td>编辑/删除</td>
            </tr>
        <?php
        $query = mysqli_query($conn,"select * from news");  
        // $arr = mysqli_fetch_array($query);  
        while($arr = mysqli_fetch_array($query)){   //转换数组和赋值,的过程必须一同遍历,才不会出错!!   
        //
        ?>
            <tr>
                <td height='25'>
                    <?php echo $arr["name"] ?>
                    &nbsp;
                </td>
                <td height='25'>
                    <?php echo $arr["news"] ?>
                    <span class="STYLE3">&nbsp;</span>
                </td>
                <!-- 删除按钮 -->
                <td width='150'>
                    <label>
                        <!-- 重点:如果想要顺利的将ID value POST就必须用 echo输出一下:如下 -->
                        
                        <input type="hidden" name="id" value="<?php echo $arr['id']; ?>"> 

                        <input type="submit" name="Submit" class="STYLE3" value="删除" >
                        <button align="center"><a href="edit.php?id=<?php echo $arr['id']; ?>"  style="text-decoration:none;">编辑</a></button>
                        
                    </label>
                </td>
            </tr>
            <br>

            
            

        <?php            
        };  
        echo "</table></form>";    //表单域  

        $res=mysqli_query($conn,"select * from news");
        $num=mysqli_num_rows($res); 
        echo "数据表中条目数为:".$num;  
    ?>

    <br><hr><br>
    <button><a href="add.php">添加新闻</a></button><br><hr><br>


</body>
    
</html>


            

        
