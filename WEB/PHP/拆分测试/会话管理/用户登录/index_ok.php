<?php
    header("Content-type:text/html;charset=utf-8");  

    $username = $_POST['username'];  
    $password = $_POST['password'];   
    if($password != "" && $username != ""){
        if($username == "mr" && $password == "123456"){
            setcookie('user',$username,time()+60*2);  
            setcookie('pass',$password,time()+60*5);   
            echo "<script>
                    alert('登录成功!');  
                    window.location.href='cookie.php';  
                </script>";  
        } else {
            echo "<script>
                    alert('用户名或密码不正确!!');  
                    window.location.href='index.php';  
                </script>";  
        }
    } else {
        echo "<script>
                alert('用户名或密码不能为空!!');  
                window.location.href='index.php';  
            </script>";  
    }

?>