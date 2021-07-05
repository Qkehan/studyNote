<?php
    header("Content-type:text/html;charset=utf-8");

    
    echo '欢迎您！！';
    echo date("Y-m-d H:i:s");  
    echo '<br>';

    //-----【数据类型】-------
    //PHP中支持3种数据类型，分别是 标量数据类型、复合数据类型、特殊数据类型， PHP中所有的数据类型如下：
    /*
    数据类型{
        标量类型{
            boolean(布尔型)
            integer(整型)
            float（浮点型）
            string（字符串型）
        };  
        复合类型{
            array（数组）
            object（对象）
        };  
        特殊类型{
            resource（资源）
            NULL（空值）  
        };  
    }
    */  
    //-----------【标量类型】------------
    //1、布尔型：
    //  布尔型是PHP中常用的数据类型之一，通常用于逻辑判断，它只有true和false两个值，表示事物的“真”和“假”，并且不区分大小写。
    //  需要注意的是在特殊情况下其他类型也可以表示布尔值，不如：0表示FALSE，1表示TRUE。      
    //
    //2、整型：
    //  整型用来表示整数，它可以由十进制、八进制和十六进制指定，且前面加上‘+’或者‘-’符号，可以表示整数或负数。    
    //  八进制数使用0~7表示，且数字前面必须加上0.   
    //  十九禁止数使用0~9余A~F表示，数字前面必须加上0x。    
    // $octonary = 073; //八进制数  
    // $decimal = 59; //十进制数  
    // $sexadecimal = 0x3b;  //十六进制数   
    //  八进制和十六进制表示的都是十进制数值59。  
    //  若给定数值大于系统环境的整型所能表示的最大范围，会发生数据溢出，导致程序出现问题。如：32位系统的取值范围是：-(2^31)~[(2^31)-1]。       
    //
    $octonary = 073; //八进制数  
    $decimal = 59; //十进制数  
    $sexadecimal = 0x3b;  //十六进制数   
    echo $octonary.'<br>';
    echo $decimal.'<br>';
    echo $sexadecimal.'<br>';  
    //
    //3、浮点型：
    //  浮点型可以保存浮点数或整数，浮点数是程序中表示小数的一种方法，也可以是整数，在PHP中，通常有两种方式表示浮点数：标准格式、科学计数法格式。 
    //  注意：不管采用哪种格式表示，浮点数的有效位数都是14位。有效位数就是从左边第一个不为0的数开始，直到末尾结束的个数，且不包括小数点。      
    //示例：  
    $fnum1 = 1.759;
    $fnum2 = -4.382;
    $fnum3 = 3.14E5;
    $fnum4 = 7.469E-3;  
    echo $fnum1.'<br>';
    echo $fnum2.'<br>';
    echo $fnum3.'<br>';
    echo $fnum4.'<br>';
    echo 0.001*pow(2,3).'<br>';  //pow 2的3次方   
    //
    //4、字符串型：
    //  字符串是连续的字符序列，由数字、字母和符号组成。字符串中的每个字符只占用一个字节。定义字符串有三种方式：  
    //  *1、单引号（‘’）。
    //  *2、双引号（“”）。  
    //  *3、定界符（<<<）。    
    //  如果在单引号和双引号定义的字符串中包含变量名，那么它们的输出结果是完全不同的。双引号中包含的变量名会自动被替换成变量的值，而单引号中包含的变量名则按普通字符串输出。     
    $name = "qkehan";   
    $area = 'china';  
    echo $name.'<br>';   //qkehan  
    echo $area.'<br>';  
    echo $name." come from $area".'<br>';
    echo $name.' come from $area'.'<br>';   
    //注：PHP的字符串中可以使用转义字符。    
    //例如：在双引号字符串中使用双引号时，可以使用“\”来表示。双引号字符串还支持换行符“\n”、制表符“\t”等转义字符的使用。而单引号字符串只支持“‘’”和“\”的转义（转义的单引号（\'）和转义的反斜杠（\\），将分别被打印为一个单引号和一个反斜杠。）     
    //   
    echo "\\".'<br>';  
    echo '\\'.'<br>';
    echo "你好".'\n'."PHP".'<br>';   //你好\nPHP
    echo "你好"."\n"."PHP".'<br>';   //你好 PHP 
    //
    //--------------【复合数据类型】------------------  
    //复合数据类型将多个简单数据类型组合在一起，存储在一个变量名中，包括两种（数组和对象）。   
    //1、数组（array）  
    //2、对象（object） 
    //
    //-----------【特殊数据类型】----------   
    //特殊数据类型包括两种（资源和空值）。    
    //1、资源（resource）   
    //  资源是由专门的函数来建立和使用的。它是一种特殊的数据类型，并由程序员分配。在使用资源时，要及时的释放不需要的资源。如果忘记了释放资源，系统会自动启用垃圾回收机制，避免内存消耗殆尽。    
    //2、空值（NULL） 
    //  空值，表示没有为该变量设置任何值，另外，空值（null）不区分大小写，null和NULL效果是一样的。     
    //
    //-----------【检测数据类型】----------------
    //PHP还内置了检测数据类型的系列函数，可以对不同类型的数据进行检测，判断其是否属于某个类型。   
    //  is_bool             检测变量是否为布尔类型
    //  is_string           检测变量是否为字符串类型
    //  is_float/is_double  监测变量是否为浮点类型
    //  is_integer/is_int   检测变量是否为整数
    //  is_null             检测变量是否为null
    //  is_array            检测变量是否为数组类型
    //  is_object           监测变量是否为对象类型
    //  is_numeric          检测变量是否为数字或由数字组成的字符串  
    //
    $x = 2.5;
    if(is_float($x) || is_double($x)){
        echo '$x是浮点型'.'<br>';
    }
    //
    //-------------【数据类型转换】--------------  
    //通常情况下，数据类型转换分为自动类型转换和强制类型转换。    
    //1、自动类型转换   
    //  数据类型的自动转换是指在定义常量或变量时，不需要指定常量或变量的数据类型，在代码执行过程中，PHP会根据需要将常量或变量转换为合适的数据类型，但是在转换时要遵循一定的规则。    
    //  *1、布尔型数据和数值在进行算数运算时，TRUE被转换为整数1，FALSE被转换为整数0.   
    //  *2、字符串型数据和数值型数据在进行算术运算时，如果字符串以数字开头，将被转换为相应的数字；如果字符串不是以数字开头，将被转换为整数0.    
    //  *3、在进行字符串连接运算时，整数、浮点数将被转换为字符串型数据，布尔值TRUE将被转换为字符串“1”，布尔值FALSE和NULL将被转换为空字符串“”。    
    //  *4、在进行逻辑运算时，整数0、浮点数0.0、空字符串“”、字符串“0”、NULL以及空数组将被转换为布尔值FALSE，其它数据将被转换为布尔值TRUE。    
    //
    $base = '1800';  
    $a = $base + 3600;   
    echo $a.'<br>';    //5400  
    var_dump($a);   //用来输出变量类型  int 5400
    echo "<br>";  
    if("123abc" == 123){   //字符串艺术字开头，数字运算会转换为数字。   
        echo '== 123'.'<br>';
    } else {
        echo '!= 123';
    };
    if("abc" == 0){   //字符串以字母开头，数字运算会转换为0。     
        echo '== 0'.'<br>'; 
    } else {
        echo " != 0";
    };
    $A = 3;
    $B = 2.31;
    $C = $A.$B;  
    echo $C.'<br>';   //32.31  
    echo "$C".'<br>';   //32.31  
    echo '$C'.'<br>';   //$C  
    echo "\$C = $C".'<br>';    //如果想让“双引号”里面输出$C普通字符，用反斜杠转义  $C = 32.31    
    //
    //2、强制类型转换    
    //  a、应用括号括起来的类型名称进行转换    
    //  所谓强制类型转换，就是在编写程序时手动转换数据类型，在要转换的数据或变量之前加上”（目标类型）“即可。   
    //  (boolean)   强制转换为布尔型
    //  (string)    强制转换为字符串型
    //  (integer)   强制转换为整型
    //  (float)     强制转换为浮点型
    //  (array)     强制转换为数组
    //  (object)    强制转换为对象 
    //
    var_dump((boolean)3.2);  //bool(true)  
    echo '<br>';
    var_dump((integer)'hello');   //int(0)  
    echo '<br>';  
    var_dump((float)false);    //float(0)  
    echo '<br>';  
    //
    //  b、使用以val结尾的函数名的函数    
    //  intval      int intval(mixed var)       返回var的整数值  
    //  floatval    float floatval(mixed var)   返回var的浮点数值
    //  strval      string strval(mixed var)    返回var的字符串值   
    //
    $str = "123.456abc";   
    $str = intval($str);   //用这个函数转换数据类型   
    var_dump($str);   //int 123  
    echo "<br>"; 
    //
    //  c、使用settype()函数    
    //语法：  bool settype(mixed var, string type)   
    //参数：  参数var为指定的变量。   
    //参数：  战术type为指定的类型，参数type有7个可选值：Boolean、float、integer、array、null、object、string。如果转换成功则返回true，否则返回false。    
    //
    $str1 = "123.456";  
    settype($str1, "float");  
    var_dump($str1);    //float(123.456)   
    echo "<br>";  







?>