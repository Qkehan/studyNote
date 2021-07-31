<?php
    header("Content-type:text/html;charset=utf-8");
    
    echo '欢迎您！！';
    date_default_timezone_set('PRC');  
    echo date("Y-m-d H:i:s")."<br>";  
    echo '【9-1-操作数据库】'."<br>"; 
    echo "当前文件的路径为：".__FILE__.'<br><hr>';    //获取当前文件路径  
    //
    //*****************[MySQL概述]*****************
    //从根本上来说，PHP是通过预先写好的。一些列函数来于MySQL数据库进行通讯，向数据库发送指令，接收返回数据等都是通过函数来完成的。     
    //  
    //PHP并不是直接操作数据库中的数据，而是要把执行操作以SQL语句的形式发送给MySQL服务器，由MySQL服务器执行这些命令，并将结果返回给PHP程序。    
    //
    //  show databases;         --显示系统中已有的数据库;   
    //  create database $name;  --创建数据库;   
    //  use $name;              --使用数据库;   
    //  create table A1(id char(), name char(), sex char(), birthday date);   --创建一个表;    
    //  desc A1;        --查看表结构;   
    //  --给表A1里面插入数据;  
    //  insert into A1(id, name, sex, birthday) value("0405719304", "loupeng", "men", "1990-09-02");    
    //  SELECT * from A1;       --星*是全部的意思, 查看全部A1内容.  
    //
    //
    //********************[PHP访问MySQL的一般步骤]*******************
    //1.链接MySQL服务器  
    //2.选择MySQL服务器 
    //3.执行SQL语句  
    //4.关闭结果集   
    //5.关闭MySQL服务器  
    //
    //-----------PHP链接MySQL数据库-----------
    //  resource mysql_connect(host, username, pwd);   
    //该函数如果操作成功返回类型是一个资源变量,如果不成功则返回FALSE.    
    //host: 要链接的MySQL服务器的名称或者IP地址   
    //username: 登录MySQL服务器的用户名.  
    //pwd: 登录MySQL服务器的密码.  
    //
    //-----------切换选择数据库--------------
    //  boolean mysql_select_db(dbname);    
    //切换数据库,如果不做特别设置那么当用户默认所在的数据库应该是MySQL因此要切换的正确的数据库当中才能进行操作.    
    //如果该函数执行成功则返回TRUE不成功则返回FALSE.    
    //
    //
    //---------------数据库操作---------------
    //  Recordset mysql_query($sql,$conn)    
    //该函数将按$sql函数传递的sql语句对数据库进行查询    
    //$SQL参数是一个标准的sql齿距车就是说大致分为两类, 一是查询结果的比如select语句, 二是没有查询结果返回的比如update, insert, delete语句.    
    //对于有结果产生的sql语句如果执行成功则返回该结果,如果不成功则返回FALSE.   
    //对于没有结果返回的语句,执行成功则返回TRUE不成功则返回FALSE.   
    //
    //  mysql_fetch_array()     
    //从result结果集当中取得一个数组每执行一次记录集指针就会自动向下移动   
    //返回的是一个数字索引数组和关联数组的组合    
    //
    //
    //
    //
    $conn = mysqli_connect("localhost","root","","qkehan");   //PHP7 格式  打开资源并赋值    
    if(mysqli_connect("localhost","root","","qkehan")){
        echo "成功";
    } else {
        echo "失败";  
    };  
    mysqli_select_db($conn, "qkehan");  
    /*
    mysqli_select_db(qke);   
    if(mysqli_select_db($con, "A1")){
        echo "成功";
    } else {
        echo "";  
    };
    */
    mysqli_query($conn, "set_names_utf8");   //对资源设置中文编码  
    echo "<table border='1px' align='center'>
            <tr>
                <td>学号</td>
                <td>姓名</td>
                <td>班级</td>
                <td>语文</td>
                <td>数学</td>
                <td>英语</td>
            </tr>";  
    
    $query = mysqli_query($conn, "select * from B1");  //执行查询结果(结果集)  返回的结果赋值   
    while($res = mysqli_fetch_array($query)){     //(结果集*转换为*数组)结果用来,遍历数组   
        echo "<tr>
                    <td>".$res["id"]."</td>
                    <td>".$res["name"]."</td>
                    <td>".$res["class"]."</td>
                    <td>".$res["chinese"]."</td>
                    <td>".$res["math"]."</td>
                    <td>".$res["english"]."</td>
                </tr>"; 
    };
    echo "</table>";  
    mysqli_close($conn);   
    //
    //------总结-------
    //一定要会写前三步, 连接服务器, 选择数据库, 设置字符集.  
    // $conn = mysqli_connect("localhost","root","","qke"); 
    // mysqli_select_db($conn, "qke");  
    // mysqli_query($conn, "set_names_utf8"); 
    //
    //二用mysqli_query来写执行的对应的SQL命令  
    // $query = mysqli_query($conn, "select * from B1");  //浏览 因为是select所以返回的是一个,结果集      
    //$res = mysqli_fetch_array($query)   //因为是结果集,所以用mysql_fetch_array转换为数组   
    //
    //

    /*
        php 中两种获得数据库中 数据条数的方法  

        一种是传统的利用mysql_num_rows()来计算
        
        $sql="select * from news";
        $res=mysql_query($sql);
        $number=mysql_num_rows($res);

        　　

        还有一种是利用mysql_result()
        
        $sql="select count(*) from news";
        $res=mysql_query($sql);
        $number=mysql_result($res,0,0);

        　　

        mysql_result()函数是用来获取数据库中的结果的

        方法如下
        
        $sql="select * from news";
        $res=mysql_query($sql);
        mysql_result($res,0,1)
    */

















