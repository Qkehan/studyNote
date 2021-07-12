<?php
    header("Content-type:text/html;charset=utf-8");
    
    echo '欢迎您！！';
    date_default_timezone_set('PRC');  
    echo date("Y-m-d H:i:s")."<br>";  
    echo '【常量和变量】'."<br>"; 
    echo "当前文件的路径为：".__FILE__.'<br><hr>';    //获取当前文件路径  
    //
    //
?>