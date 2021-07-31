<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login_ok.php" method="POST">
        用户名: 
        <input type="text" name="username"><br>  
        密码: 
        <input type="password" name="password"><br>

        <input type="checkbox" name="remember" value="yes">
        7天自动登录<br>
        <input type="submit" value="登录" name="login">
    </form>
    
</body>
</html>

<?php
    header("Content-type: text/html;charset=utf-8"); 
    
?>