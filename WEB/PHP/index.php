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
    //-----------选择数据库--------------
    //  boolean mysql_select_db(dbname);    
    //切换数据库,如果不做特别设置那么当用户默认所在的数据库应该是MySQL因此要切换的正确的数据库当中才能进行操作.    
    //如果该函数执行成功则返回TRUE不成功则返回FALSE.    
    //
    //
    //
    mysqli_connect("localhost","root","","qke");   
    mysqli_select_db(qke);   
    if(mysqli_select_db($con, "A1")){
        echo "成功";
    } else {
        echo "";  
    };
    












?>