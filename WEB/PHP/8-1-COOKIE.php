<?php
    header("Content-type:text/html;charset=utf-8");
    
    echo '欢迎您！！';
    date_default_timezone_set('PRC');  
    echo date("Y-m-d H:i:s")."<br>";  
    echo '【8-1-COOKIE】'."<br>"; 
    echo "当前文件的路径为：".__FILE__.'<br><hr>';    //获取当前文件路径  
    //
    //
    //******************[COOKIE概述]******************
    //
    //记录用户在网站上的活动就是会话技术。会话技术是一种维护同一个浏览器与服务器之间多次请求之间的数据状态的技术。     
    //它可以很容易的实现对用户登录的支持记录该用户的行为，并根据授权级别和个人喜好显示相应的内容。   
    //cookie和session是目前最常用的两种会话技术。     
    //其中cookie是一种在远程浏览器端存储数据，并以此来跟踪和识别用户的机制。而session则是将信息存放在服务器端的会话技术。
    //当用户通过浏览器访问WAP服务器是服务器，会给用户发一些信息，这些信息都保存在cookie中。      
    //当该浏览器再次访问服务器时，就会在请求头中将cookie发送给服务器，方便服务器对浏览器做出正确的响应。  
    //
    //服务器向客户发送COOKIE时,会在HTTP响应头中增加Set-Cookie响应头字段. Set-Cookie头字段中设置的COOKIE遵循一定的羽凡啊格式,例:   
    // Set-Cookie: City=Beijing; Path=/;       
    //在上述示例中,City表示COOKIE的名称,beijing表示COOKIE的值,path表示COOKIE的属性.     
    //需要注意的是,COOKIE必须以键值对的形式存在,其属性可以有多个,但这些属性之间必须用分号(;)和空格分隔.   
    //   
    //
    //*************************[创建COOKIE]*************************
    //在使用COOKIE之前首先创建COOKIE. 在PHP中通过setcookie()函数创建COOKIE,其声明方式如下:    
    // bool setcookie(string $name[,string $value[,int $expire = 0[,string $path[,string $domain[,int $secure]]]]])      
    //上述声明格式中,参数$name和$value是必须的, 分别用于表示Cookie的名称和值, 除此之外,其他的参数都是可选参数,    
    //其中,$expire用于表示COOKIE的有效日期, $path用于表示COOKIE在服务器端的有效路径, $domain用于表示COOKIE的有效域名,      
    //$secure用于指定COOKIE是否通过安全的HTTPS链接来传输.    
    //
    //注意:  
    //由于cookie是HTTP请求消息投的一部分，因此setcookie()函数必须在其他信息被输出到浏览器前调用，否则会导致程序出错。  
    //一个浏览器能创建的空气数量最多为30个，并且每个cookie的容量不能超过4KB，每个web站点能设置的cookie总数不能超过20个。     
    //
    //*********************[读取COOKIE]******************
    //当用户通过浏览器访问web服务器时，服务器会给用户发送一些信息，这些信息很多都会保存在cookie中，要想获取cookie中的信息，可以使用超全局数组$_COOKIE[]来读取, 具体事例：    
    // $val = $_COOKIE["key"];    
    //在上述代码中, $val表示一个变量,用于存储从COOKIE中获取的数据,key是一个字符串.     
    //
    //*********[删除COOKIE]********
    // 删除COOKIE时只需要将setcookie()函数值得参数$value设置为空,参数$expire设置为小于系统的当前时间即可.     
    //
    //
    //
    //控制登录用户的过期时间  
    // 
    //
    setcookie("banji", "jiying7193", time()+60*1);   //setcookie(名字,value, 保存时间当前时间+保留时间时间)    
    setcookie("kecheng", "php", time()+60*5);  
    echo "cookie创建成功".'<br>';  
    //
    $val = $_COOKIE["banji"];  
    $val1 = $_COOKIE["kecheng"];   
    echo $val.'<br>'.$val1;     //jiying7193   php
    //
    //删除COOKIE   
    setcookie("kecheng","",time()-1);  
    echo "删除COOKIE成功".'<br><hr><br>';  
    //
    //
    //
    //COOKIE案例--显示用户上次访问时间   
    //如果COOKIE存在,表示用户已经登陆过   
    if(isset($_COOKIE["logintime"])){
        echo "您上次登录的时间: ".date("Y-m-d H:i:s",$_COOKIE["logintime"]);  
        setcookie("logintime",time(),time()+60*10);   //10分钟   
    } else {
        echo "您首次登录我们的网站";   
        setcookie("logintime",time(),time()+60*10);   //10分钟   
    }

    //



?>