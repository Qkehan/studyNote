<?php
    header("Content-type:text/html;charset=utf-8");
    
    echo '欢迎您！！';
    date_default_timezone_set('PRC');  
    echo date("Y-m-d H:i:s")."<br>";  
    echo '【6-PHP文件和图像技术】'."<br>"; 
    echo "当前文件的路径为：".__FILE__.'<br><hr>';    //获取当前文件路径  
    //
    //
    $arr="/(dqs)(pps)\\1\\2 /";  
    $str="dqsppsdqspps";  
    if(preg_match($arr,$str,$matches[0])){
        echo "1";  
    } else {
        echo "0";  
    }
    echo "---------------<br>";    
    $arr=array('Tom Lucy','PHP','pig cat','C');   
    $matches=preg_grep('/[A-z]*$/',$arr);   
    print_r($matches);  
    echo "---------------<br>";   
    $arr=preg_split('/[@,\.]/','abc@163.com');
    print_r($arr);  

?>