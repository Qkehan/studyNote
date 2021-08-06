

<form action="index_ok.php" method="POST" id="from">  

    <table border='0px' align='center'>
        <tr align='center'>
            <td>ID</td>
            <td>新闻标题</td>
            <td>新闻内容</td>
            <td>编辑/删除</td>
        </tr>


<?php
    $link = mysqli_connect("localhost","root","");   
    mysqli_set_charset($link,'utf8');    
    mysqli_query($link, "use qkehan");   
    $query = mysqli_query($link, "select * from news");  
    while($arr = mysqli_fetch_array($query)){


    
?>
        <tr>
            <td>
            <?php echo $arr["id"] ?>
                &nbsp;
            </td>
            <td height='25'>
                <?php echo $arr["name"] ?>
                &nbsp;
            </td>
            <td height='25'>
                <?php echo $arr["news"] ?>
                <span class="STYLE3">&nbsp;</span>
            </td>
            <!-- 删除按钮 -->
            <td width='150' align='center'>
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
    echo "</table></form>";    
?>
