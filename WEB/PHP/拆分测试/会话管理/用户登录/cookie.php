<?php
    if($_COOKIE["user"] == "mr" && $_COOKIE["pass"] == "123456"){
        echo "欢迎".$_COOKIE["user"]."光临!"; 
    } else {
        echo "<script>
                alert('您的登录信息已过期,请重新登录!!');  
                window.location.href='index.php';  
            </script>"; 
    }
?>