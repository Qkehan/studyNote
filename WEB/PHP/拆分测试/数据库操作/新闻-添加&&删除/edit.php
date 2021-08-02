<?php
    header("Content-type:text/html;charset=utf-8");      
    include("conn.php");  


    $getid = $_GET['id'];   
    echo "<script>
            alert(' ".$getid." ');
        </script>";  

    $query = mysqli_query($conn,"select * from news where news.id='$getid' ");  
    while($arr = mysqli_fetch_array($query)){  
    
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
                        <input type="submit" name="Submit" value="修改">
                    
                        <input type="reset" name="Submit2" value="取消">
                    </label>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
<?php
    };
?>