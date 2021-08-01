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

        <form action="index_ok.php" method="POST" >  

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
                        <!-- 提取数据库[数组]的id键 -->
                        <p><?php echo $id=$arr['id']; ?></p>
                        <!-- 重点:如果想要顺利的将ID value POST就必须用 echo输出一下:如下 -->

                        <input type="hidden" name="htmlID" value="<?php echo $id=$arr['id']; ?>"> 
                        <div align="center">
                            <input type="submit" name="Submit2" class="STYLE3" value="编辑" onclick="func_edit();"> 
                        </div>
                        <div align="center">
                            <input type="submit" name="Submit" class="STYLE3" value="删除">
                        </div>
                    </label>
                </td>
            </tr>
            <br>
        <?php            
        }
        echo "</table></form>";    //表单域  
        $res=mysqli_query($conn,"select * from news");
        $num=mysqli_num_rows($res); 
        echo "数据表中条目数为:".$num;  
    ?>

    <br><hr><br>
    <button><a href="add.php">添加新闻</a></button><br><hr><br>

    <!-- js的编辑按钮跳转 -->
    <!-- <script>
        function func_edit(){
            var form = document.querySelector('form');      
            form.action = "edit.php";  
            // element.submit(); 
        };
    </script> -->

</body>
    
</html>

