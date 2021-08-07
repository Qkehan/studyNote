

<form action="index_ok.php" method="POST" id="from">  

    <table border='0px' align='center'>
        <tr align='center'>
            <td>ID</td>
            <td>新闻标题</td>
            <td>新闻内容</td>
            <td>编辑/删除</td>
        </tr>


<?php
    $link = mysqli_connect("localhost","root","");     //连接服务器   
    mysqli_set_charset($link,'utf8');    
    mysqli_query($link, "use qkehan");     //选择数据库   

    $query = mysqli_query($link, "select * from news");    //对表做操作   
    //将结果集,变成数组   
    while($arr = mysqli_fetch_array($query)){

?>
        <tr>
            <td>
            <!-- 数组的KEY值, 就是数据库表的字段名   -->
            <?php echo $arr["id"] ?>&nbsp;     
            </td>
            <td height='25'>
                <?php echo $arr["name"] ?>&nbsp;
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
                    <button align="center"><a href="index_ok.php?id=<?php echo $arr['id']; ?>"  style="text-decoration:none;">删除</a></button>

                    <button align="center"><a href="edit.php?eID=<?php echo $arr['id']; ?>"  style="text-decoration:none;">编辑</a></button>
                    
                </label>
            </td>
        </tr>
        <br>



<?php
    };   
    echo "</table></form>";    
?>
