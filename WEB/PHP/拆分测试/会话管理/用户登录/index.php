<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index_ok.php" method="POST">
        用户名: 
        <input type="text" name="username"><br>  
        密码: 
        <input type="password" name="password"><br>
        验证码:
        <input type="text" name="yzm" >
        <img src="yzm.php" alt="">
        <a href="">看不清</a><br>
        <input type="submit" value="登录">
    </form>
    
</body>
</html>

<?php
    
?>