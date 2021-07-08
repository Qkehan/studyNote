<?php
    header("Content-type:text/html;charset=utf-8");

    echo '你好世界！！';   
    echo '【1-输出符】'."<br>";   
    echo "当前文件的路径为：".__FILE__.'<br>';    //获取当前文件路径  
?>

//print & echo   
//php中最常用的语句是echo语句，除了echo语句之外，还可以使用print语句向浏览器输出数据。   
//相同：  
<?php
    echo '欢迎进入PHP的世界';
    echo '<br>';   
    print '欢迎进入PHP的世界';
?>   
//不同：  
//1、输出多个字符串时，用逗号隔开，使用print语句一次只能输出一个字符串，而使用echo语句可以同时输出多个字符串。用‘.’隔开，echo语句与print语句均可输出。    
//2、print语句可以看做是一个有返回值的函数，因此print语句能作为表达式的一部分，而echo语句不能。    
