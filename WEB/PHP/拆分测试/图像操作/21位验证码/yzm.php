<?php
    function yzm(){
        header("Content-type: image/png");   
        //随机颜色画布  
        $im = imagecreate(210,30);  
        imagecolorallocate($im,200,200,200);  

        //自定义画笔颜色   
        // $color = "";  
        
        
        $str = 21;  //总数量  
        $wNum = 0;  //白字数量   
        $corNum = 0;
        for($i=0;$i<=$str;$i++){  
            $num = rand(0,1);  

            if($num == 0 && $wNum != ($str - 11) ){
                $text = rand(0,9);  
                $x = ($i*10);   
                $cor = imagecolorallocate($im,0,0,0);
                imagestring($im, 5, $x,5, $text, $cor);  
                $wNum++;
            } else {
                switch(rand(0,3)){
                    case 0: $color = imagecolorallocate($im,255,0,0);; break;  
                    case 1: $color = imagecolorallocate($im,0,255,0); break; 
                    case 2: $color = imagecolorallocate($im,0,0,255); break; 
                    case 3: $color = imagecolorallocate($im,255,0,255); break; 
                    default: break;   
                };
                $text = rand(0,9);  
                $x = ($i*10);   
                imagestring($im, 5, $x,5, $text, $color);  
            }
            
        }
        imagepng($im);   
        imagedestroy($im);  
    }
    yzm();  
    
?>

