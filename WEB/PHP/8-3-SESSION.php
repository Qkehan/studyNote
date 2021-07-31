<?php
    header("Content-type:text/html;charset=utf-8");
    
    echo '欢迎您！！';
    date_default_timezone_set('PRC');  
    echo date("Y-m-d H:i:s")."<br>";  
    echo '【8-3-SESSION】'."<br>"; 
    echo "当前文件的路径为：".__FILE__.'<br><hr>';    //获取当前文件路径  
    //
    //
    //****************[Session概述]******************
    //Session是一种服务器端的技术，他的生命周期由用户访问页面开始，直到断开与网站链接结束。  
    //web服务器在运行时间可以为每个用户的浏览器创建一个。供其独享的session文件。     
    //
    //在会话期间，当用户第1次访问服务器是PHP会自动生成一个唯一的会话，ID用于标识不同的用户。 Session会话时, 会话ID会分别保存在客户端和服务器端两个位置。    
    //在客户端使用临时的cookie保存在浏览器指定的目录中(称为session cookie)。在服务器端以文本文件形式保存在指定的session目录中。     
    //
    //首先，当客户端的浏览器向web服务器发送URL请求后，web服务器会生成一个会话ID，并将客户端浏览器的一些信息保存在WAP服务器中，由会话ID标识。     
    //然后web服务器会将会话ID发送至浏览器端，保存到cookie。当浏览器再次向web服务器发送请求时，会将cookie中保存的会话ID一并发送给web服务器。服务器根据接收到的ID，处理不同的用户的请求。      
    //
    //
    //-----------启动session----------------
    //在使用session之前,首先需要启动session. 在PHP中使用session_start() bool session_start()     
    //在上述声明中,bool是session_start()函数的返回值类型,如果session启动成功,该函数返回TRUE,否则返回FALSE.   
    //
    //------------向Session添加数据----------------
    //完成Session的启动后，WEB服务器会声明一个超全局数组$_SESSION[]。用于保存特定用户的数据，将各种类型的数据添加到session中，必须使用超全局数组$_SESSION具体如下:    
    // $_SESSION['key']=$val;  
    //在上述代码中,key表示一个字符串, $val表示任意类型的数据.   
    //
    //------------读取Session数据-------------
    //在实际开发中,常常需要读取session中存储的数据，由于session中的数据都保存在超全局数组$_SESSION[]中，因此我们需要从超全局数组$_SESSION[]中读取数据，其读取方式如下:     
    //$val = $_SESSION['key'];   
    //在上述语法格式中,$val表示一个变量,用来存储从Session中获取的数据,它可以使基于数据类型,也可以是数组或对象. key是$_SESSION[]数组中元素所对应的字符串下表.    
    //
    //-----------删除Session中的数据--------------
    //服务器在收到用户退出网站请求时，需要删除该次会话中的数据，在PHP中,有三种删除session中数据的方式，他们分别是删除单个数据，删除所有数据，以及结束当前会话，下面对他们分别进行介绍：    
    //
    //1.删除单个数据:  
    //  --删除单个数据通过unset()函数来完成,具体实例如下:   
    //  --unset($_SESSION['key']);   
    //  --在上述示例中, unset()函数的参数是$_SESSION[]数组中指定的元素,通过该函数删除数组中的一个元素.   
    //  --例如: unset($_SESSION['username'])可以删除$_SESSION数组中键为"username"对应的数据.    
    //
    //2.删除所有数据:  
    //  --如果想一次删除Session中的所有数据,只需要将一个空的数组赋值给$_SESSION[]即可,具体实例:   
    //  --$_SESSION = array();  
    //  --在上述代码中,右边就是一个空的数组,将空数组赋值为左边的$_SESSION[]数组,这样便一次删除了所有的数据.   
    //  --值得注意的是,使用session_unset()函数也能达到删除所有数据的目的.    
    //
    //3.结束当前会话:  
    //  --PHP中提供了session_destory()函数用于结束当前会话,调佣该函数将注销当前会话,并且删除会话中的全部数据,其函数声明如下:    
    //  --bool session_destroy();   
    //  --在上述声明中,bool表示该函数的返回值为布尔类型,销毁成功时会返回TRUE,失败时返回false.    
    //  --调用该函数后,如果需要再次使用会话,必须重新调用session_start()函数重新启动新会话.    
    //
    session_start();   
    // echo "服务器给的session ID: ".session_id();     
    //自己给session里面填东西   
    $_SESSION['banji'] = 'ruanjian7193';  
    $_SESSION['kecheng'] = 'PHP';  

    // unset($_SESSION['banji']);  //删除 
    $val = $_SESSION['banji'];  
    // echo $val;   //ruanjian7193    

    //删除session  
    $_SESSION = array();  
    
    $val = $_SESSION['banji'];  
    echo $val;   //ruanjian7193  
    session_destroy();  //结束会话  
    //
    //
    //---------------session案例------------------  
    //需求分析:  
    //1.在web应用开发中经常需要实现用户登录的功能，假设有一个用户名为username的用户，当该用户进入网站首页时，如果还未登录，则页面会提示登录，并且自动跳转进入登录界面。   
    //2.当用户登录时，如果用户名和密码都正确，则登录成功，否则提示登录失败。   
    //3.登录成功后还可以点击注销回到首页，显示用户未登录时的界面。   
    //







?>