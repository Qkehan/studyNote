<?php
    header("Content-type:text/html;charset=utf-8");
    
    echo '欢迎您！！';
    echo date("Y-m-d H:i:s")."<br>";  
    echo '【PHP的运算符和表达式】'."<br>";  
    echo "当前文件的路径为：".__FILE__.'<br>';    //获取当前文件路径  


    //*****************【运算符和表达式】******************* 
    //
    //------------【算术运算符】------------------
    //在数学运算符中常见的就是加减乘除运算，也被称为四则运算。   
    //在PHP中的算数运算符就是用来处理四则运算的符号，这是最简单、最常见的运算符号。   
    // +    加
    // -    减
    // *    乘
    // /    除
    // %    取模
    //在实际应处过程中还需要注意以下两点：  
    //1、四则运算使，先乘除后加减。  
    //2、在进行取模运算时，运算结果的政府取决于被摸数（%左边的数）的符号，与模数（%右边的数）的符号无关。   
    //如：  (-8) % 7 = -1  ,而 8 % (-7) = 1 。    
    //
    //-----------【字符串运算符】-------------
    //字符串运算符只有一个，及英文的句号“.”。它将两根或多个字符串连接起来，结合到一起形成一个新的字符串。而PHP中的“+”号只做赋值运算符使用，而不能做字符串运算符使用。    
    //示例：  
    $m = "520abc";   
    $n = 1;  
    $mn = $m.$n;   
    echo $mn."<br>";    //520abc1  
    $nm = $m + $n;   
    echo $nm."<br>";    //521 字符运算类型转换  
    $num = 45;
    echo "there are ".$num." people"."<br>";  
    echo "there are $num people"."<br>";  
    //
    //------------【赋值运算符】----------------   
    //赋值运算符是一个二元运算符，即它有两个操作数。总是把基本赋值运算符(=)右边的赋值给左边的变量或常量。   
    // “=”表示赋值运算符，而非数学意义上的相等的关系。     
    //
    // =    赋值        $a=3;$b=2;          //$a=3;$b=2;
    // +=   加等于      $a=3;$b=2;$a+=$b;   //$a=5;$b=2;
    // -=   减等于      $a=3;$b=2;$a-=$b;   //$a=1;$b=2;
    // *=   乘等于      $a=3;$b=2;$a*=$b;   //$a=6;$b=2;
    // /=   除等于      $a=3;$b=2;$a/=$b;   //$a=1.5;$b=2; 
    // %=   模等于      $a=3;$b=2;$a%=$b;   //$a=1;%b=2;  
    // .=   连接等于   $a="abc";$a.="def";  //$a="abcdef";     
    $a = 4;
    $b = 3;
    $a -= $b;
    echo $a."<br>";   //1  
    $first;
    $second;  
    $third;  
    $first = $second = $third = 3; //为三个变量同事赋值   
    //赋值语句的执行顺序是从右到左，即先将3赋值给变量$third。最后把变量$second的值赋值给变量$first，完成三个变量的同事赋值。      
    //
    //除“=”外的其他运算符均为特殊赋值运算符，在使用过程中需要注意以下两点：   
    //
    //1、“+=”、“-=”、“*=”、“/=”、“%=” 的用法类似，这里以“+=”为例进行讲解。    
    //示例： 若 $a=5; 那么 $a+=4; 相当于 $a=$a+4;     
    // "+="表示变量$a先与4进行加法运算，然后在将运算结果赋值给变量$a，最后变量$a的值为9。     
    //
    //2、“.=”表示对两个字符串进行连接操作。   
    //示例：  若 $str='welcome to';  那么 $str.='itcast; 相当于 $str=$str.'itcast';    
    // “.=”表示变量$str先与 "itcast" 字符串进行连接，然后将连接后得到的新字符串再赋值给变量$str，最后变量 $str 的值为"welcome to itcast"。      
    // 
    //----------------【位运算符】--------------------
    // &    按位与   
    // |    按位或   --  ~   (int)  (float)  (string)  (array)  (object)  @

    echo $a++."<br>";  //1    
    echo ++$a."<br><hr>";  //3   
    //字符串的自增自减运算   
    echo "小写字母的自增：<br>";  
    $a = "a";  
    while($a <= "z"){
        echo $a++."<br>"; 
    }
    //
    //---------------【比较运算符】-----------------
    //比较运算符用来对两个变量或表达式进行比较，其结果是一个布尔类型的true或false。    
    //在实际开发中还需要注意以下两点：   
    //1、对于两个不同的数据进行比较时，PHP会自动将其转换成相同类型的数据后再进行比较，如：3与3.14进行比较时，先将3转换为浮点型3.0，然后再与3.14进行比较。     
    //2、运算符“===”与“！==”在进行比较时，不仅要比较数值是否相等，还要比较其数据类型是否相等。而“==”和“！==”运算符在进行比较时，只比较其值是否相等。    
    // ==   等于 
    // !=   不等于 
    // <>   不等于 
    // ===  恒等 
    // !==  不恒等 
    // >    大于  
    // >=   大于等于 
    // <    小于 
    // <=   小于等于 
    //
    //------------【逻辑运算符】----------------
    //逻辑运算符就是在程序开发中用于逻辑判断的符号，其返回值类型是布尔类型。   
    // &&   与  
    // ||   或  
    // ！   非  
    // xor  亦或    $a xor $b    //$a和$b一个为true，一个为false，结果为true，否则为false。     
    // and  与  //与&&相同，但优先级低
    // or   或  //与||相同，但优先级低  
    //
    //---------------【三元运算符】-------------------
    //三元运算符又称为三目运算符，它是一种特殊的运算符。   
    //语法： <条件表达式>?<表达式1>:<表达式2>    
    //先求条件表达式的值，如果为真，则粉刺会表达式1的执行结果。
    //如果条件表达式的值为假，则返回表达式2的执行结果。  
    //示例：  
    $a=100; 
    echo($a==true)?"表达式正确<br>":"表达式不正确<br>";   //正确   
    //
    //----------------【运算符优先级】--------------
    //结合方向：
    //左：
    //      [  
    //      *  /  %   
    //      +  -  .   
    //      <<  >>  
    //      &  
    //      ^  
    //      |  
    //      &&  
    //      ||  
    //      ? :   
    //      and  
    //      xor    
    //      or   
    //      ,     
    //右： 
    //      ++  --  ~   (int)  (float)  (string)  (array)  (object)  @    
    //      !    
    //      =  +=  -=  *=  /=  .=  %=  &=  |=  ^=  <<=  >>=      
    //无：
    //      new  
    //      instanceof  
    //      ==  !=  ===  !==  <>   
    //
    //
    $a=$b=0;
    echo $a + ($b++);   //0   
    //
    //计算圆的周长和面积： r=15;周长C=94.2； 面积S=706.5；  
    //
    //---------【表达式】-----------
    //将运算符和操作数连接起来的式子称为表达式表达式是构成PHP语言的基本元素，也是PHP最重要的组成元素，根据运算符的不同表达式可以分为算术表达式、字符表达式、关系表达式、赋值表达式以及逻辑表达式等。   
    //
    // 



?>