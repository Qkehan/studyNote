<?php
$str="php函数大全、php基础实例、ASP经典";   
$arr=explode("、",$str);    
foreach($arr as $value) {
    echo $value."、";  
};
echo " --为馆藏图书！<br>";     
echo "
<input type='text'>
<button>查询</button>
"
?>