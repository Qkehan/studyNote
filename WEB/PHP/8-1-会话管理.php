<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" name="form" id="form" method="POST">
        <h3>POST表单</h3><br>
        <label for="">姓名:
            <input type="text" name="username">
        </label><br>
        <label for="">密码:
            <input type="password" name="password">
        </label><br>
        <label for="">性别:
            <input type="radio" name="sex" value="男">男
            <input type="radio" name="sex" value="女">女
        </label><br>
        <label for="">兴趣爱好:     
            <!-- 从表单开始将name的值,直接保存为数组hobby[]这样PHP直接能用 -->
            <input type="checkbox" name="hobby[]" value="音乐">音乐
            <input type="checkbox" name="hobby[]" value="运动">运动
            <input type="checkbox" name="hobby[]" value="阅读">阅读
        </label><br>
        <label for="">
            <input type="submit" name="submit" value="注册">
        </label><br><hr><br>
    </form>

    <!-- <form action="" name="form" id="form" method="GET">
        <h3>GET表单</h3><br>
        <label for="">姓名:
            <input type="text" name="username">
        </label><br>
        <label for="">密码:
            <input type="password" name="password">
        </label><br>
        <label for="">性别:
            <input type="radio" name="sex" value="男">男
            <input type="radio" name="sex" value="女">女
        </label><br>
        <label for="">兴趣爱好:     
            //从表单开始将name的值,直接保存为数组hobby[]这样PHP直接能用 
            <input type="checkbox" name="hobby[]" value="音乐">音乐
            <input type="checkbox" name="hobby[]" value="运动">运动
            <input type="checkbox" name="hobby[]" value="阅读">阅读
        </label><br>
        <label for="">
            <input type="submit" name="submit" value="注册">
        </label><br><hr><br>
    </form>  -->



</body>
</html>

<?php
    header("Content-type:text/html;charset=utf-8");
    
    echo '欢迎您！！';
    date_default_timezone_set('PRC');  
    echo date("Y-m-d H:i:s")."<br>";  
    echo '【8-1-会话管理】'."<br>"; 
    echo "当前文件的路径为：".__FILE__.'<br><hr>';    //获取当前文件路径  
    //
    //
    //
    //
    //********************[超全局变量]**********************
    //在PHP中一共有9个预定义的超全局变量   
    //  $_GET       --经由HTTP GET方法提交至脚本的变量   
    //  $_POST      --经由HTTP POST方法提交至脚本的变量  
    //  $_REQUEST   --经由GET\POST和COOKIE机制提交至脚本的变量  
    //  $_SERVER    --经由Web服务器设定或者直接与当前脚本的执行环境相关联  
    //  $_ENV       --执行环境提交至脚本的变量  
    //  $_FILES     --经由HTTP POST文件上传而提交至脚本的变量   
    //  $_COOKIE    --经由HTTP Cookies方法提交至脚本的变量  
    //  $_SESSION   --当前注册给脚本会话的变量  
    //  $GLOBALS    --包含一个引用指向每个当前脚本的全局范围内有效的变量  
    //
    //
    //$_GET:
    //  --在操作PHP脚本文件时,经常需要获取客户端提交的数据. 对于GET方式提交的数据,可以用$_GET变量来获取.   
    //  --$_GET变量实际上是一个数组,它可以获取GET方式提交表单中的数据,也可以获取在URL地址中的参数值.  
    //
    //GET和POST最直观的区别就是,GET把参数包含在URL中,POST通过requst body传递参数.   
    //  1.GET在浏览器回退时是无害的,而POST会再次提交请求.   
    //  2.GET产生的URL地址可以被Bookmarks, 而POST不可以.   
    //  3.GET请求会被浏览器cache, 而POST不会, 除非手动设置.   
    //  4.GET请求只能进行URL编码, 而POST支持多种编码方式.   
    //  5.GET请求参数会被完整的保留在浏览器历史记录中, 而POST中的参数不会被保留.   
    //  6.GET请求在URL中传递的参数是有长度限制的, 而POST没有.   
    //  7.对参数的数据类型, GET只接受ASCLL字符, 而POST没有限制.    
    //  8.GET比POST更不安全, 因为参数直接暴露在URL上,所以不能用来传递敏感信息.    
    //  9.GET参数通过URL传递, POST放在 Request body 中.    
    //------------这不是想要的答案!!!!!
    //实际上GET和POST本质上没有区别!??????
    //  GET和POST是什么??HTTP协议中的两种发送请求的方法.    
    //  HTTP是什么???HTTP是基于 TCP/IP 的相关数据如何在万维网中如何通信的协议.     
    //  HTTP的底层是 TCP/IP. 所以 GET和POST的底层也是TCP/IP, 也就是说, GET/POST都是TCP链接, GET和POST能做的事情是一样一样的.       
    //  如果给GET加上Request body, 给POST带上URL参数, 技术上是完全行得通的.    
    //------------那么'标准答案'里面的哪些区别是怎么回事???    
    //HTTP给汽车运输，设定了好几个服务类别，有GET   POST  PUT  DELETE等等，HTTP规定当执行get请求的时候，要给汽车上贴上get的标签，设置method为get，而且要把发送的数据放在车顶上URL中，以方便记录。       
    //如果是post请求，就要在车上贴上post的标签，并把货物放在车厢里。当然你也可以在get的时候往车厢内偷偷藏点货物。但是这是很不光彩。也可以在post的时候，在车顶上也放一些数据，让人觉得傻乎乎的。 HTTP只是个行为准则，而TCP才是get和post怎么实现的基本。       
    //
    //---------但是我们只看到HTTP对get和post参数的传送渠道，(URL还是request body)提出了要求。"标准答案"你关于参数大小的限制又是从哪来的呢？----------------------   
    //在万维网世界中还有另一个重要的角色: 运输公司。不同的浏览器（发起HTTP请求。）和服务器（接收HTTP请求。）就是不同的运输公司。         
    //虽然理论上你可以在车顶上无限的堆货物( URL中无限加参数)。但是运输公司可不傻，装货和卸货也是有很大成本。他们会限制单次运输量来控制风险，数据量太大，对浏览器和服务器都是很大负担。     
    //业界不成文的规定是。(大多数)浏览器通常都会限制URL长度在2k个字节。而(大多数)服务器最多处理64K大小的URL。超过的部分，恕不处理。        
    //如果你用get服务，在request body偷偷藏了数据，不同服务器的处理方式也是不同的，有些服务器会帮你卸货，读出数据，有些服务器直接忽略，所以虽然get可以带request body，也不能保证一定能被接收到哦。      
    //-----好了，现在你知道get和post本质就是TCP链接并无差别，但是由于HTTP规定和浏览器或服务器的限制，导致它们在应用过程中体现出一些不同。-----------
    //-----你以为这就结束了!!-----------------
    // 在这里大boss出场！这位boss有多神秘呢？当你试图在网上找“ Get和post的区别”的时候，那些百度词条里没有提到他！！    
    //
    //Get和post还有一个重大的区别，简单地说：   
    //-----Get产生一个TCP数据包； Post产生两个TCP数据包。   
    //往长的说：  
    //---对于get方式的请求，浏览器会把HTTP header和data一并发送出去，服务器响应200(返回数据)；   
    //---而对于post浏览器先发送header服务器，响应100 continue, 浏览器再发送data, 服务器响应200 OK (返回数据)。  
    //
    //也就是说get只需要汽车跑一趟就把货送到了，而post得跑两趟第1趟先去和服务器打个招呼，还我等一下要送一批货来，你们打开门接赢我，然后再回头把货送过去.      
    //因为post需要两步时间上消耗要多一点，看起来get比post更有效。    
    //但是:   
    //1. Get与post都有自己的语义，不用随便混用。  
    //2.去研究在网络环境好的情况下，发一次包和发两次包的时间差别基本可以无视。而在网络环境差的情况下，两次包的TCP，在验证数据包完整性上有非常大的优点。
    //3.并不是所有浏览器都会在post中发送两次包，Firefox就只发送一次。  
    //
    //
    //$_REQUEST:    
    //---如果需要通过一种方式同时获取$_GET, $_POST中的数据时，可以使用。预定义的超全局变量$_REQUEST, $_REQUEST是一个可以保存各种方式传递给PHP脚本变量的数组.     
    //---默认情况下包含$_GET, $_POST, $_COOKIE中的内容. 即通过$_REQUEST, 可以获得$_GET, $_POST, $_COOKIE中的数据。     
    //
    //值得一提的是，$_GET, $_POST和$_COOKIE在$_REQUEST中出现的顺序依赖于PHP的配置文件 PHP.ini 中variables_order 配置指令所指令的顺序。    
    //默认情况下，PHP对于预定义超全局变量的解析顺序为$_ENV, $_GET, $_POST, $_COOKIE, $_SERVER，解析后新值会覆盖同名的旧址值。       
    //注意，由于$_REQUEST中的变量是通过$_GET, $_POST和$_COOKIE输入机制传递给脚本文件，所以可以被远程用户篡改而降低安全性，例如用户可以通过浏览器来修改URL等，所以在实际开发中只有在不能确定get请求还是post请求的时候才会用到$_REQUEST。     
    //
    //
    if(isset($_GET["name"])){
        echo $_GET["name"];   
    } else {
        echo "没有找到那个参数";  
    }; 

    /*
    echo '$_SERVER["REQUEST_METHOD"]="POST"处理方式'.'<br>';   
    if($_SERVER["REQUEST_METHOD"]="POST"){     //"REQUEST_METHOD"让表单为POST方式输出  
        echo "姓名:".$_POST["username"]."<br>";
        echo "姓别:".$_POST["sex"]."<br>";
        $hob = $_POST["hobby"];  
        echo "爱好:";
        foreach($hob as $key => $value){
            echo $value." ";
        };
    }; 
    echo "<br><hr>";  
*/
    
    //
    //





?>