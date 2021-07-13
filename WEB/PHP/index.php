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
    3、强大的字符串处理函数【重点】{   
        【不是在源字符串上修改，而是返回一个格式化的新字符串。】   
        *1、输出函数{  
            echo()      --可以看做是系统指令，不用加括号，直接写参数。    
            print()     --有返回值，效率不高  
            print_r()   --
            printf()    --格式化输出，不改变原数据， %d整数 %f浮点 %.2f保留两位小数 %c字符 %s字符串 $x十六进制 %o八进制 %b二进制   
            sprintf()   --返回格式化的字符串，并改变原来的数据值。     
            die()       --exit()函数的别名，退出前输出。  
            var_dump()  --
        },  
        *2、字符串格式化函数{  
            *1、去除空白函数(空白含有ASCLL为0--null,9--制表符,10--*-,13--回车,32--空格，等等){
                **1、trim()  去除两端空白
                **2、ltrim() 去除左空白
                **3、rtrim() 去除右空白
            }, 
            *2、字符串填补函数{
                **1、str_pad()   str_pad(被处理变量，填补后长度，填补符号，*左右填补);  四个参数，不会改变原数据。      
            },   
        },   
        *3、大小写转换{
            *1、ucfirst()   --字符串中首字符转换大写。
            *2、ucwords()   --字符串中每个单词的首字符大写。   
        }        
    };       
    */
    //----------3-1输入输出函数------------
    echo substr("abcdefghi",2,4)."<br>";   
    echo substr(123456789,2,4)."<br>";   
    $str="02988888888";    
    echo $str{0}.$str{1}.$str{2}."<br>";    //029  
    // die("#######EXIT######");  
    // fopen("1.php","r") or die("打开文件失败");   
    //
    echo "<br>------------pintf格式化输出-----------<br>";    
    $str="100.123456abc";   
    printf("%s",$str);   //100.123456abc
    echo "<br>";   
    printf("%d",$str);   //100  
    echo "<br>";  
    printf("%f",$str);   //100.123456  
    echo "<br>";  
    $tex = printf("%.2f、[16] %x、[8] %o、[2] %b、[填充]%'#20s",$str,$str,$str,$str,$str);  
    //100.12、[16] 64、[8] 144、[2] 1100100、[填充]#######100.123456abc     
    echo '<br>$tex：'.$tex."<br>";   //$tex：71   
    print_r('<br>$tex：'.$tex."<br>");   //$tex：71   
    //
    echo "<br>----------spintf输出格式化的字符串-----------<br>";  
    $str1="100.123456abc";   
    echo "原数据：".$str1."<br>";    
    $tex1 = sprintf('格式化数据$tex1为：'."%'@20s",$str1)."<br>";    
    echo $tex1."<br>----------去除空白函数 trim ltrim rtrim ------------<br>";    
    //
    //
    //--------------3-2字符串格式化函数-------------
    //3.2.1、去除空白函数 trim ltrim rtrim     
    $str="               w   a  m p         ";  
    echo '检查$str长度'.strlen($str)."<br>";    //检查$str长度34   
    echo 'trim处理：'.strlen(trim($str))."<br>";   //trim处理：10  
    echo trim($str)."<br>";     //w a m p
    echo 'ltrim处理：'.strlen(ltrim($str))."<br>";   //ltrim处理：19
    echo ltrim($str)."<br>";    //w a m p   
    echo 'rtrim处理：'.strlen(rtrim($str))."<br>";   //rtrim处理：25   
    echo rtrim($str)."<br>";    //w a m p   
    //
    $str1="123This 123 ... is a test...";  
    echo '检查$str1长度'.strlen($str1)."<br>";    //检查$str长度28    
    echo ltrim($str1,"0..9").'<br>';  //把0..9范围去除  This 123 ... is a test...   
    echo rtrim($str1,".").'<br>';   //把.去除   123This 123 ... is a test    
    echo trim($str1,"0..9.").'<br>';    //去除0..9.数字和点。 This 123 ... is a test    
    echo trim($str1,"0..9A..Z.").'<br>';  //his 123 ... is a test    
    echo trim($str1,"0..9a..z.").'<br>';   //This 123 ... is a     
    //
    //例题：数组（aa,bb,cc,dd）变成字符串aa==#bb==#cc==#dd
    $arr = array('aa','bb','cc','dd');  
    $m="";
    foreach ($arr as $value) {
        $m=$m.$value."==#";  
    }
    $m=trim($m,"=#");  
    echo $m."<br>----------字符串填补函数 str_pad()----------<br>";  
    //
    //3.2.2、字符串填补函数 str_pad() 不会改变原数据    
    $str2="lamp";   
    echo str_pad($str2,10,"*", STR_PAD_BOTH )."<br>";   //***lamp***   
    echo $str2."<br>";  //lamp   
    //
    //3.3、大小写转换    
    $str3="hello word in my way";   
    echo ucfirst($str3)."<br>";   
    echo ucwords($str3)."<br>";  
    //
    //
    //****************【二、常用的字符串函数】*************
    //
    //------------【常用字符串函数】------------------
    //
    //1、strlen()函数    
    //  strlen()函数用于获取字符串的长度。
    //  strlen()函数的返回值类型是int整型。   
    //  汉子占2个字符，数字、英文、小数点、下划线和空格各占1个字符。    
    //示例：      
    echo "<br>------strlen()函数-------<br>";  
    echo strlen('abc')."<br>";   //3  
    echo strlen('p h p')."<br>------strrpos()函数-------<br>";   //5  
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
    echo strrpos("itcast","t",-4)."<br>------substr()函数-------<br>";  //1  
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
    echo substr('itcast',-4,-1)."<br>------str_replace()函数-------<br>";     //cas   
    //
    //4、str_replace()函数    
    //  str_replace()函数用于字符串中的某个字符进行替换操作。     
    //  str_replace()函数的第一个参数表示目标字符串。   
    //  str_replace()函数的第二个参数表示替换字符串。   
    //  str_replace()函数的第三个参数表示执行替换的字符串。    
    //  str_replace()函数的第四个参数是一个可选的参数，用于保存字符串被替换的次数。   
    //示例：   
    echo str_replace('e','E','welcome',$count).'<br>';   //  
    echo $count.'<br>------explode()函数-------<br>';     //2   
    //
    //5、explode()函数    
    //  explode()函数可以使用一个字符串分割另一个字符串。  
    //  explode()函数的返回值类型是数组类型。所谓数组类型就是可以存储一系列数据的变量类型。  
    //  第一个参数表示分隔符。   
    //  第二个参数表示要分割的字符串。   
    //  第三个参数是可选参数，表示返回的数组中最多包含的元素个数，当期为负数m时，表示返回除了最后的m个元素外的所有元素(剔除后面m个元素)，当其为0时，则把它当做1处理。     
    //示例：   
    print_r(explode('n','banana')).'<br>';   //array(3) { [0]=> string(2) "ba" [1]=> string(1) "a" [2]=> string(1) "a" }      
    print_r(explode('n','banana',2))."<br>";    //array(2) { [0]=> string(2) "ba" [1]=> string(3) "ana" }    
    print_r(explode('n','banana',-2))."<br>";    //array(1) { [0]=> string(2) "ba" }   
    print_r(explode('n','banana',0))."<br>";    //array(1) { [0]=> string(6) "banana" }      
    print_r(explode('p','itcast'))."<br>";     //array(1) { [0]=> string(6) "itcast" }     
    var_dump(explode('','itcast'))."<br>";     //bool(false)     
    //
    //6、implode()函数    
    //  implode()函数用于指定的连接符将数组拼接成一个字符串。  
    //  第一个参数表示连接符。   
    //  第二个参数表示待处理的数组。   
    //示例：  
    $arr=array('apple','bnana','orange');   
    print_r(implode("、",$arr)."<br>");  //apple、bnana、orange  
    //例题：数组（aa,bb,cc,dd）变成字符串aa==#bb==#cc==#dd
    $arr = array('aa','bb','cc','dd');   
    echo implode("==#",$arr);    
    //
    //
    //******************【三、正则表达式】***************
    //
    //
    //
    //

















?>