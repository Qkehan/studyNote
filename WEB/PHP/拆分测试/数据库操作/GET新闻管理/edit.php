<?php
    header("Content-type:text/html;charset=utf-8");   
    
    $link = mysqli_connect("localhost","root","");     //连接服务器   
    mysqli_set_charset($link,'utf8');    
    mysqli_query($link, "use qkehan");     //选择数据库    


    $eID = $_GET['eID'];   
    echo "<script>
            alert(' ".$eID." ');
        </script>";  

    // $query = mysqli_query($link,"select * from news where news.id='$getid' ");   //这两句效果一样   
    $query = mysqli_query($link,"select * from news where id='$eID' ");  
    //因为数组只有一条信息,所以不需要遍历    
    $arr = mysqli_fetch_array($query);    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit_ok.php" method="POST" name="from">
        <table id="01" width="560" height="430" border="0" cellpadding="0" cellspacing="0">
            <tr >
                <td width="78" height="51" valign="bottom">新闻标题</td>
                <td width="328" valign="bottom">
                    <label>
                        <input type="text" name="name" size="40" value="<?php echo $arr['name']; ?>">
                    </label>
                </td>
            </tr>
            <tr>
                <td height="141">新闻内容</td>
                <td valign="bottom">
                    <label>
                        <textarea name="news" cols="40" rows="10"><?php echo $arr['news']; ?></textarea>
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <label>
                        <input type="hidden" name="id" value="<?php echo $arr['id']; ?>">
                        <input type="submit" name="update" value="修改">
                    
                        <button><a href="index.php" style="text-decoration:none;">取消</a></button>
                    </label>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
