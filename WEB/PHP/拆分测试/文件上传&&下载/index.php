<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文件上传以及下载</title>
</head>
<body>
    <form enctype="multipart/form-data" method="POST" method="post" action="wjsc2.php">
        <input type="hidden" name="max_file_size" value="30000">
        <!-- 自动生成二维数组   -->
        选择文件：<input type="file" name="userfile">
        <input type="submit" name="button" id="button" value="上传文件">
    </form>
    <br>
    <form action="xiazai.php" method="POST">
        <input type="submit" name="button2" id="button2" value="下载文件" >
    </form>
    
</body>
</html>