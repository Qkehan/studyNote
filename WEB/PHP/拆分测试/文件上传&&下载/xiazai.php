<?php
    header('Content-Type:text/html;charset=utf-8');  
    define('ROOT_PATH',dirname(__FILE__));  
    //定义一个函数用于下载   
    function downFile($file_path){
        //$des='uploads/'.$_FILES[$file_path];  【暂时没有一点用处】//将传参的目录解析为文件=将文件地址提取     

        //判断文件是否可读    
        if(!file_exists($file_path)){
            exit("文件不存在！".$file_path);  
        } else {
            //可能会出现中文, Windows需要转码为utf-8      
            // $file_path = iconv("utf-8","gb2312",$file_path);  

            //获取文件名称  
            $file_name = basename($file_path,'r');   
            //获取文件大小  
            $file_size = filesize($file_path);   

            $fp = fopen($file_path,'r');   
            header("Content-type: application/octet-stream");   
            header("Content-disposition: attachment;filename={$file_name}");    
            $buffer = 1024;   
            $file_count = 0;  
            //判断文件是否结束  
            while(!feof($fp) && ($file_size - $file_count > 0)){
                $file_data = fread($fp, $buffer);   
                $file_count += $buffer;  
                echo $file_data; 
            }
            fclose($fp);   //关闭文件 
        }; 
    };  

    //调用函数   
    downFile(ROOT_PATH."/uploads/新建文本.txt");   //如果是Windows系统需要加点./uploads/新建文本.txt   Linux系统不需要点"/uploads/新建文本.txt"     

    ?>