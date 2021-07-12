<?php
    $arr=array(
        array(1,2,3,4,5),
        array(2,3,4,5,6),
        array(3,4,5,6,7),
        array(4,5,6,7,8),
        array(5,6,7,8,9)
    );
    foreach ($arr as $value) {
        foreach ($value as $val) {
            echo "$val";  
        }
        echo "<br>";  
    }
?>