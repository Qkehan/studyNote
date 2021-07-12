<?php
    header("Content-type:text/html;charset=utf-8");
    
    echo '欢迎您！！';
    date_default_timezone_set('PRC');  
    echo date("Y-m-d H:i:s")."<br>";  
    echo '【5-字符串函数】'."<br>"; 
    echo "当前文件的路径为：".__FILE__.'<br><hr>';    //获取当前文件路径  
    //
    //*******************【一、字符串处理方式】*************
    /*
    字符串函数  
    1、回顾字符换内容  
        单引号、双引号、字符串连接符“.”   
        在PHP中{
            简单的字符串处理用的就是字符串函数  
            复杂的处理用正则表达式 
        }， 
    2、字符串的特点{  
        *1、其他类型数据在字符串处理函数里面会自动转换为字符串来处理    
        *2、可以将字符串视为数组[]，也可以当做字符集合来看待{}推荐，就是说明显不是数组，但是可以视为数组。简单的用下标访问出来。          
    }，   
    3、强大的字符串处理函数{
        *1、输出函数{  
            echo()  
            print()   
            print_r()  
            printf()   
            sprintf()   
            die()   
            var_dump()   
        }   
    }    
    
    */
    //
    echo substr("abcdefghi",2,4)."<br>";   
    echo substr(123456789,2,4)."<br>";   
    $str="02988888888";    
    echo $str{0}.$str{1}.$str{2}."<br>";    //029  
    
    //
    //
    //
    //****************【二、常用的字符串函数】*************
    //1、strlen()函数    
    //  strlen()函数用于获取字符串的长度。
    //  strlen()函数的返回值类型是int整型。   
    //  汉子占2个字符，数字、英文、小数点、下划线和空格各占1个字符。    
    //示例：      
    echo strlen('abc')."<br>";   //3  
    echo strlen('p h p')."<br>";   //5  
    //
    //2、strrpos()函数   
    //  strrpos()函数用于获取指定字符串在目标字符串中最后一次出现的位置，其中，目标字符串中第1个字符的位置从0开始。    
    //  strrpos()函数的返回值类型是int整型，但当找不到指定字符串时，返回值为布尔型false。    
    //  第一个参数是目标字符串。第二个参数是指定字符串。   
    //  第三个参数是字符串开始查找的位置，它有三种情况，具体如下：{
    //      省略第三个参数时，表示从目标字符串的第0个位置开始向后查找指定字符串。
    //      第三个参数为正数n时，表示从目标字符串的第n个位置开始向后查找指定字符串。   
    //      第三个参数为负数m时，表示从目标字符串的尾部第m个位置开始向前查找指定字符串。
    //  }
    //示例：
    echo strrpos("itcast","a")."<br>";   //3
    echo strrpos("itcast","c",1)."<br>";   //2  
    echo strrpos("itcast","t",-4)."<br>";  //1  
    //
    //3、substr()函数   
    //  substr()函数用于获取字符串中的子串。    
    //  substr()函数的返回值类型是字符串型。   
    //  substr()函数的第一个参数表示待处理的字符串。   
    //  substr()函数的第二个参数表示字符串开始截取的位置，当它为负数m时，表示从待处理字符的结尾处向前数第m个字符开始。   
    //  substr()函数的第三个参数表示截取字符串的长度，当其省略时，表示截取到字符串的结尾，当其为负数m时，表示从截取后的字符串的末尾处去掉m个字符。
    //示例：  
    echo substr('itcast',2)."<br>";    //cast   
    echo substr('itcast',0,2)."<br>";  //it
    echo substr('itcast',3,-1)."<br>";    //as 
    echo substr('itcast',-4,-1)."<br>";     //cas   
    //
    //4、str_replace()函数    
    //  str_replace()函数用于字符串中的某个字符进行替换操作。     
    //  str_replace()函数的第一个参数表示目标字符串。   
    //  str_replace()函数的第二个参数表示替换字符串。   
    //  str_replace()函数的第三个参数表示执行替换的字符串。    
    //  str_replace()函数的第四个参数是一个可选的参数，用于保存字符串被替换的次数。   
    //示例：   
    echo str_replace('e','E','welcome',$count).'<br>';   //  
    echo $count.'<br>';     
    //
    //5、explode()函数    
    //  explode()函数可以使用一个字符串分割另一个字符串。  
    //示例：   
    var_dump(explode('n','banana')).'<br>';   //array(3) { [0]=> string(2) "ba" [1]=> string(1) "a" [2]=> string(1) "a" }      
    var_dump(explode('n','banana',2))."<br>";    //array(2) { [0]=> string(2) "ba" [1]=> string(3) "ana" }    
    var_dump(explode('n','banana',-2));    //array(1) { [0]=> string(2) "ba" }   
    var_dump(explode('n','banana',0));    //array(1) { [0]=> string(6) "banana" }      
    var_dump(explode('p','itcast'));     //array(1) { [0]=> string(6) "itcast" }     
    var_dump(explode('','itcast'));     //bool(false)     
    //
    //6、implode()函数    
    //  implode()函数用于指定的连接符将数组拼接成一个字符串。   
    //
    //
    //******************【三、正则表达式】***************
    //
    //
    //
    //

















?>