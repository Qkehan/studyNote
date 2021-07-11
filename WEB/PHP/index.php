<?php
    header("Content-type:text/html;charset=utf-8");
    
    echo '欢迎您！！';
    echo date("Y-m-d H:i:s")."<br>";  
    echo '【3-数组】'."<br>"; 
    echo "当前文件的路径为：".__FILE__.'<br><hr>';    //获取当前文件路径  
    //
    //
    //***********【数组的概述】********************
    // 变量中保存单个数据，而数组中则保存的是多个变量的合集。使用数组的目的就是将多个相关联的数据组织在一起形成一个整体，作为一个单元使用。   
    //------------【数组的形成】------------
    // 由于数组是由数组元素组成的，而数组中的元素又分为两部分，分别为键和值。   
    // “键”是数组元素的识别名称，也被称为数组下标。   
    // “值”为数组元素的内容。   
    // “键”和值之间使用“=>”连接。   
    // 数组各个元素之间使用逗号“,”分割。最后一个元素后面的逗号可以省略。   
    //示例：  
    $week = array("a"=>"星期一","b"=>"星期二","c"=>"星期三");   // 包含三个元素 $week["a"]  $week["b"]  $week["c"]     
    //
    //   
    // 
    //
    //******************【PHP数组的分类】*************
    // PHP中将数组分为一维数组、二维数组、多维数组，但是无论是一维还是二维，可以统一讲数组分为两种：数字索引数组（indexed array）和关联数组（associative array）。       
    //1、数字索引数组：数字索引数组，下标（键名）由数字组成，默认从0开始。      
    $arr_int = array("PHP入门与实战","C#入门与实战","VB入门与实战");    
    //2、关联数组：关联数组的键名可以是数字和字符串混合的形式。    
    $arr_string = array("PHP"=>"PHP入门与实战","Java"=>"Java入门与实战","C#"=>"C#入门与实战");     
    echo $arr_string["PHP"]; 
    echo "<br>";  
    $arr=array('a','b','c');  
    echo $arr[2];   
    echo "<br>----------------------<br>";  

    //  

    //
    //*****************【PHP数组创建、修改和删除】*****************
    //
    //------------【数组创建】-----------
    // 与其他语言的数组实现方式不同，PHP不需要在创建数组时指定其大小；    
    // 因为PHP是一种松散类型的语言，所以甚至不需要在使用前声明；   
    //
    //在PHP中创建数组的方式主要有2种：  
    //1、直接为数组元素赋值。    
    // 赋值方式定义数组就是创建一个数组变量，然后使用赋值运算符直接给变量赋值。语法：     
    // $arrayName[key]=value;  
    // $arrayName[]=value;    
    // 其中，键值key可以是整型或者字符串，值value可以是任何类型。   
    // 注意：通过直接为数组元素赋值的方式声明数组时，要求同一数组元素中的数组名相同。   
    //示例：
    $arr[]='PHP';  
    $arr[]='java'; 
    $arr[3]='C语言';
    $arr[5]='C++';  
    $arr['sub']='IOS';  
    $arr[]='网页设计';  
    var_dump($arr);   
    echo "<br>";  
    //
    //2、应用array()函数创建数组。    
    // array([key]=>value,[key]=>value,......)   示例：    
    $info=array('id'=>1,'name'=>'Tom');    
    $fruit=array(1=>'apple',3=>'banana');   
    $num=array(1,4,7,9);   
    $mix=array('tel'=>110,'help',3=>'msg');    
    //
    //
    //在定义数组时，需要注意以下几点：   
    //1、数组元素的下标只有整型和字符串两种，如果有其他类型，则会进行类型转换。   
    //2、在PHP中合法的整数值下标会被自动的转换为整型下标。    
    //3、若数组存在相同的下标时，后面的元素值会覆盖前面的元素值。   
    //4、如果给出方括号但没有指定键，则取当前最大整数索引值，新的键将是该值加1，如果当前还没有整数索引，则键将为0。     
    //示例：  
    $arr=array("a"=>"理论","b"=>"教程");    
    $arr["b"]=98;   
    $arr[3]=99;   
    $arr[]=100;  
    print_r($arr);  
    echo "<br>";  
    //
    //---------------【访问、删除、修改数组元素】------------
    //1、访问数据：  
    // 由于数组中的元素是由键和值组成的，而键又是数组元素的唯一标识，因为可以使用数组元素的键来获取该元素的值。示例：      
    $info1=array('id'=>1,'name'=>'Tom');   
    echo $info1['name'];   //Tom   
    echo "<br>";  
    // 但若想要查看数组中的所有元素，使用以上方式会很繁琐，为此，PHP提供了print_r()和var_dump()函数，专门用于输出数组中的所有元素。示例：      
    $info1=array('id'=>1,'name'=>'Tom');   
    print_r($info1);  //Array ( [id] => 1 [name] => Tom )   
    echo "<br>";  
    var_dump($info1);   //array(2) { ["id"]=> int(1) ["name"]=> string(3) "Tom" }   
    echo "<br>*********<br>";  
    // print_r()函数可以按照一定的格式显示数组的键和值。   
    // var_dump()函数不仅具有print_r()函数的功能，还可以获取数组中元素的个数和数据类型。   
    //
    //2、删除数据：  
    // PHP中提供的unset()函数既可以删除数组中的某个元素，又可以删除整个数组。示例：       
    $fruits=array('apple','banana','orange');   
    unset($fruits[1]);   
    print_r($fruits);   //Array ( [0] => apple [2] => orange )    
    echo "<br>";  
    unset($fruits);   
    print_r($fruits);   //null    
    echo "<br>*********<br>";  
    //
    //3、用括号的语法来修改数组元素：$arr[]=value;   示例：    
    $arr=array("a"=>"理论","b"=>"教程","c"=>"第五次课");  
    $arr["a"]="PHP学习";   
    $arr["e"]="第五讲";        
    print_r($arr);     //Array ( [a] => PHP学习 [b] => 教程 [c] => 第五次课 [e] => 第五讲 )   
    echo "<br>";    
    //
    //
    //
    //****************【PHP数组遍历】*****************
    //
    //1、使用foreach遍历数组   
    // 遍历数组有很多钟方法，可以使用For循环，while循环，最巧妙的一种遍历数组的方法foreach给遍历数组带来了很多方便。   
    /*
    foreach($arr as $key => $value){
        ...
    }
    */
    //灵活多变，简单说就是，=>前面的变量名是key，后面的就是value。    
    //示例：  
    $fruit = array('apple','banana','pear');   
    //foreach($arr as $k=>$v)   
    foreach($fruit as $key => $value){
        echo "编号：$key, 名称：$value<br>";   // 
    }
    // foreach语句后面的（）中的第一个参数是待遍历的数组名字。    
    // foreach语句后面的（）中的第二个参数$key表示数组元素的键。    
    // foreach语句后面的（）中的第三个参数$value表示数组元素值。     
    //
    //当不需要获取数组的键时，上述示例也可以写成如下形式：示例：   
    //这种写法无论as后面是什么$b，输出的都是value      
    foreach($fruit as $value){
        echo $value.'&nbsp;';   //apple pear    
    }
    echo '<br><br>';  
    //
    //
    //2、使用for循环遍历数组   
    $bookinfo = array('PHP程序设计','王彦辉',36,'东软电子出版社');   
    for($int_i=0;$int_i < count($bookinfo);$int_i++){   //count()是统计数组元素个数的函数   
        echo $bookinfo[$int_i].'<br>';   
    }
    //
    //3、使用print_r()函数    
    $arr=array(array(2,4), array(3,5));   
    print_r($arr);   //Array ( [0] => Array ( [0] => 2 [1] => 4 ) [1] => Array ( [0] => 3 [1] => 5 ) )     
    echo "<br>----------------------<br>";  
    //
    //
    //4、使用数组指针遍历数组    
    /*
    key()   
        返回数组当前指针元素的索引；   
    current()  
        返回数组当前指针元素的值；  
    next()  
        将数组指针向前移动一位，并返回当前指针元素的值；如果超出了数组元素的末尾，则返回false；   
    prev()  
        将数组指针往回移动一位，并返回当前指针元素的值；如果指针本来就位于数组的第一个位置返回false；   
    reset()   
        将指针指向第一个元素，并返回第一个元素的值    
    end()    
        将数组指针指向最后一个元素，并返回最后一个元素的值；   
    each()  
        返回数组当前指针元素的键和值，并将指针推进一个位置；    
    list()   
        把数组中的值赋给一些变量；   
    */  
    //
    //例1：   
    $arr=array("apple","banana","orange");   
    echo current($arr)." 1<br>";   //apple  
    //each($arr);    //each()函数以弃用   
    echo " 2<br>";  
    echo current($arr)." 3<br>";   //apple  
    next($arr);   
    echo " 4<br>"; 
    echo current($arr)." 5<br>";  //banana   
    end($arr); 
    echo " 6<br>"; 
    echo current($arr)." 7<br>";   //orange  
    list($val1,$val2,$val3)=$arr;  
    echo " 8<br>"; 
    echo $val1." 9<br>";   //apple   
    echo $val2." 10<br>-----------<br>";    //banana   
    //
    //例2：   
    $fruits = array("apple","banana","orange");   
    do{
        echo key($fruits)." ".current($fruits)." ";   
    } while(next($fruits));  
    echo "<br>----------<br>";  
    //
    //例3：  
    $fruits = array("appale","banana","orange");    
    while($arr = each($fruits)){
        echo $arr["key"]." ".$arr["value"]."<br>";   
    }
    echo "<br>**********<br>";  
    //
    //例4：    
    $fruits = array("apple","banana","orange"); 
    while(list($key,$value) = each($fruits)){
        echo $key." ".$value." ";   
    }
    echo "<br>**************<br>"; 
    //
    //*************【数组相关函数】*******************
    //
    //1、count()函数   
    // count()函数用于计算数组中元素的个数。示例：     
    $stu=array(
        array('Tom','male',18),
        array('Alice','female',15),
        array('Julia','female',14)
    );
    echo count($stu);   //3  
    echo "<br>----------<br>";  
    echo count($stu,1);   //12   
    echo "<br>----------<br>";  
    // count()函数的第二个参数默认为0时，只计算一堆数组的个数。    
    // count()函数的第二个参数为1时，表示递归地对数组计数。   
    //
    //2、range()函数   
    // range()函数用于建立一个包含制定范围单元的数组。示例：     
    $arr=range('a','c');  
    print_r($arr);  //Array ( [0] => a [1] => b [2] => c )  
    echo "<br>----------<br>";    
    //
    //3、array_merge()函数    
    // array_merge()函数用于合并一个或多个数组。示例：   
    $array1=array("food"=>"tea",2,4);   
    $array2=array("a","food"=>"Cod","type"=>"jpg",4);    
    $result=array_merge($array1,$array2);    //
    print_r($result);     //Array ( [food] => Cod [0] => 2 [1] => 4 [2] => a [type] => jpg [3] => 4 )    
    echo "<br>----------<br>";    
    // 数组array2与array1中的字符串下标重复，则后面的下标值覆盖前面的下标值，输出Cod，没有重复的下标元素正常输出。       
    // 其他以数字为下标的数组，键名会以连续方式重新索引。例如：array1中的4合并后下标为1，array2中的4合并后的下标为3。   
    //
    //4、array_chunk()函数   
    // array_chunk()函数可以将一个数组分割成多个。示例：       
    $arr=array('one'=>1,'two'=>2,'three'=>3);    
    print_r(array_chunk($arr,2));     //Array ( [0] => Array ( [0] => 1 [1] => 2 ) [1] => Array ( [0] => 3 ) )     
    echo "<br>";   
    print_r(array_chunk($arr,2,true));     //Array ( [0] => Array ( [one] => 1 [two] => 2 ) [1] => Array ( [three] => 3 ) )     
    echo "<br>----------<br>";    
    // array_chunk()函数的第一个参数表示待分割数组。   
    // array_chunk()函数的第二个参数用于指定分割后数组中元素的个数，最后一个数组的元素个数可能会小于指定个数。    
    // array_chunk()函数的第三个参数在默认或设为false的情况下，表示分割后数组的下标从0开始，当设为true时，表示保留待分割数组中原来的键名。      
    //
    //5、is_array -- 检测变量是否是数组   
    //语法：bool is_array(mixed var) 如果var是array，则返回TRUE，否则返回FALSE     
    //
    //6、empty -- 检查一个变量是否为空   
    //语法：bool empty(mixed var)       
    //如果 var 是非空或非零的值，则 empty() 返回 FALSE。换句话说，""、0、"0"、NULL、FALSE、array()、var $var; 以及没有任何属性的对象都将被认为是空的，如果 var 为空，则返回 TRUE。           
    //
    //7、数组排序函数     
    // 通常情况下，若要对数组进行排序，则需要遍历数组，并对数组中的元素进行比较。实际上，在PHP中提供了许多用于排序的数组函数，方便程序开发。      
    // sort()           对数组进行排序  
    // rsort()          对数组逆向排序
    // ksort()          对数组按照键名排序  
    // krsort()         对数组按照键名逆向排序   
    // asort()          对数组进行排序并保持索引关系  
    // arsort()         对数组进行逆向排序并保持索引关系  
    // shuffle()        打乱数组顺序   
    // array_reverse()  返回一个单元顺序相反的数组  
    //
    //sort：本函数为 array 中的元素赋予新的键名。这将删除原有的键名而不仅是重新排序。
    //rsort：本函数对数组进行逆向排序（最高到最低）。 删除原有的键名而不仅是重新排序。   
    //asort：对数组进行排序并保持索引关系   
    //arsort：对数组进行逆向排序并保持索引关系   
    //ksort：对数组按照键名排序，保留键名到数据的关联   
    //krsort：对数组按照键名逆向排序，保留键名到数据的关联   
    //
    //函数：sort(array, [sort type])    
    //说明：sort()函数按升序对指定数组(第一个参数)进行排序。   
    //sort函数第二参数作用为指定排序类型，是可选参数，可能的值为：   
    //      SORT_REGULAR: 默认值，不改变类型进行排序； 
    //      SORT_NUMERIC: 把值作为数字进行排序；   
    //      SORT_STRING: 把值作为字符串进行排序；    
    //      如数组中有4和”37″，按数字排序，4小于”37″；按字符串排序，4大于”37″；  
    $price=array(32.00,28.00,38.50);   
    echo '排序前结果：<br>';   
    foreach($price as $value){
        echo $value.'<br>';   
    }
    echo "<br>";   
    sort($price);   //排序   
    echo '排序后结果：<br>';   
    foreach($price as $value){
        echo $value.'<br>';   
    }
    echo "<br>----------<br>";    
    //
    //函数：rsort(array, [sort type])    
    //说明：参数用法与sort函数相同。    
    //使用rsort() 对数组进行降序排序。   
    $array=array(5,26,37,18,9,42,88,66);    
    rsort($array);   
    for($i=0;$i<count($array);$i++){
        echo $array[$i]."&nbsp;&nbsp;";    //88  66  42  37  26  18  9  5     
    }
    echo "<br>----------<br>";    
    //
    //关联数组排序：   
    //函数：asort(array,[sort type])    
    //说明：根据关联数组的元素值进行升序排序。参数使用见上面的sort函数。    
    //
    //函数：ksort(array,[sort type])    
    //说明：根据关联数组的关键字进行升序排序。参数使用见上面的sort函数。    
    //
    $price=array('css'=>32.00,'wy'=>28.00,'php'=>38.50);     
    echo '排序前结果：<br>';     
    foreach($price as $key=>$value){
        echo $key.'->'.$value.'<br>';   
    }
    echo "<br>";    
    ksort($price);   
    echo '排序后结果：<br>';     
    foreach ($price as $key => $value) {
        echo $key.'->'.$value.'<br>';  
    }
    echo "<br>----------<br>";    
    //
    //8、explode()返回由字符串组成的数组    
    //语法：array explode(string separator,string str,[int limit])    
    //      Separator为必要参数，指定的分割符；   
    //      Str为必要参数，指定将要被分割的字符串；   
    //      Limit为可选参数。如果设置了limit参数，则返回的数组包含最多limit个元素，而最后的元素将包含string的剩余部分，如果limit参数是负数，则返回除了最后的-limit个元素外的所有元素。     
    //例：   
    $str = "11,22,33,44,55,66";   
    $arr=explode(",",$str);   
    print_r($arr);     //Array ( [0] => 11 [1] => 22 [2] => 33 [3] => 44 [4] => 55 [5] => 66 )     
    echo "<br>----------<br>";     
    //
    //9、implode()将数组元素连接成字符串     
    //例：  
    $arr1=array("a","b","c","d");   
    $str=implode("*",$arr1);  
    echo $str;  //a*b*c*d    
    echo "<br>----------<br>";     
    //
    //本章首先介绍了数组的概念，然后讲解了数组的基本操作，主要包括数组指针、数组遍历等，最后讲解了在实际编程中用到的常用数组函数。
    //
    $arr = array(1=>'aa','1'=>'bb');
    echo $arr[1];  
    echo "<br>----------<br>";     
    $arr = array(0,1,2,3);

    unset($arr[1]);     
    print_r($arr);  //Array ( [0] => 0 [2] => 2 [3] => 3 )   
    echo $arr[2];   //2   
    echo "<br>----------<br>";     
    $a=range(1,20,5);  
    print_r($a);   //Array ( [0] => 1 [1] => 6 [2] => 11 [3] => 16 )    
    //
    echo "<br>----------<br>";     
    $arr = array(1,2,array('h'));   
    count($arr,1);   
    print_r($arr);  
    //













?>