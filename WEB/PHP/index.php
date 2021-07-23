<?php
    header("Content-type:text/html;charset=utf-8");
    
    echo '欢迎您！！';
    date_default_timezone_set('PRC');  
    echo date("Y-m-d H:i:s")."<br>";  
    echo '【6-PHP文件和图像技术】'."<br>"; 
    echo "当前文件的路径为：".__FILE__.'<br><hr>';    //获取当前文件路径  
    //
    //
    //******************【文件的概述】*********************
    // 文件在程序中是以流的形式来操作的。流是指数据在数据源（文件）和程序（内存）之间经历的路径。
    // 所谓文件流，是指在通过HTTP协议POST或GET数据的过程中，传输一方直接以二进制流的方式传送某个文件的内容，这样就形成了一条文件流，接收方只要将接收的流内容直接写进文件即可。流根据数据的传输方向可分为输入流和输出流。输入流是指数据从数据源（文件）到程序（内存）的路径，输出流是指数据从程序（内存）到数据源（文件）的路径。    
    //
    //---------------------【文件类型】----------------
    // 计算机中的文件可分为多种类型，如文本文件、图片、MP3、视频、可执行程序等。接下来通过下表来列举常见的文件类型。   
    //  block       --块设备文件，如某个磁盘分区，光驱等   
    //  char        --字符设备，是指在I/O传输过程中以字符为单位进行传输的设备，如键盘   
    //  dir         --目录类型，目录也是文件的一种   
    //  fifo        --命名管道，常用于将信息从一个进程传递到另一个进程  
    //  file        --普遍文件类型，如文本文件、图片、可执行文件等   
    //  link        --符号链接，是指向文件的指针，类似于Windows中的快捷方式。  
    //  unknown     --未知类型    
    //
    // 为了方便获取文件的类型，PHP中提供了filetype()函数，filetype()函数声明方式如下：   
    // string filetype( string $filename )   --$filename表示文件名，函数的返回值为该文件的类型，如果文件不存在，则返回false。    
    //
    $filename1="/storage/emulated/0/htdocs/index.php";  
    $filename2="/storage/emulated/0/htdocs/";  
    echo "文件类型为：".filetype($filename1)."<br>";   
    echo "文件类型为：".filetype($filename2)."<br>-----------------<br>";   
    //
    //********************【文件操作】*******************  
    //
    // 操作文件时，经常需要获取文件的一些属性，如文件的大小、权限和访问时间等。PHP内置了一系列函数用于获取这些属性，如下表所示。     
    // int filesize ( string $filename )    --获取文件大小  
    // int filectime(string $filename)      --获取文件的创建时间
    // int filemtime(string $filename)      --获取文件的修改时间  
    // int fileatime(string $filename)      --获取文件的上次访问时间  
    // bool is_readable(string $filename)   --判断给定文件是否可读  
    // bool is_writable(string $filename)   --判断给定文件是否可写  
    // bool is_executable(string $filename) --判断给定文件是否可执行  
    // bool is_file(string $filename)       --判断给定文件是否为一个正常的文件  
    // bool is_dir(string $filename)        --判断给定文件是否是一个目录  
    // array stat(string $filename)         --给出文件的信息  
    //注意：上表中所列举的函数都需要提供一个$filename作为参数，即文件名（包括普通文件和目录），然后获取该文件的相关信息。   
    //
    $filename="/storage/emulated/0/htdocs/index.php";     
    if(file_exists($filename)&is_file($filename)){
        echo "文件大小为".filesize($filename)."字节<br>";   
        echo "文件的创建时间为".date('Y-m-d',filectime($filename))."<br>";   
        echo "文件的修改时间为".date('Y-m-d',filectime($filename))."<br>"; 
        echo "文件的访问时间为".date('Y-m-d',filectime($filename))."<br>"; 
        echo is_readable($filename)?"该文件可读<br>":"该文件不可读<br>";   
        echo is_writable($filename)?"该文件可写<br>":"该文件不可写<br>";   
        echo is_executable($filename)?"该文件可执行<br>":"该文件不可执行<br>";    
    } else {
        echo "该文件不存在";    
    }
    //
    //除了使独立函数分别获取文件的属性外，还可以使用stat()函数获取文件的统计信息。使用stat()函数返回的统计信息，既包括索引数组，也包括关联数组。其具体含义如下表所示。     
    // 0    dev     --设备名 
    // 1    ino     --号码 
    // 2    mode    --inode保护模式 
    // 3    nlink   --被链接数目  
    // 4    uid     --所有者的用户名id   
    // 5    gid     --所有者的组id   
    // 6    rdev    --设备类型，如果是inode设备的话   
    // 7    size    --文件大小的字节数  
    // 8    atime   --上次访问时间（UNIX时间戳）   
    // 9    mtime   --上次修改时间（UNIX时间戳）    
    // 10   ctime   --上次改变时间（UNIX时间戳）   
    // 11   blksize --文件系统IO的块大小   
    // 12   blocks  --所占据块的数目   
    //需要注意的是，上表中所列出的文件统计信息是以UNIX系统为基础的，而在Windows下并没有uid、gid、blksize和blocks等属性，所以在Windows下它们的值分别取默认值0或-1。    
    //
    $filename="/storage/emulated/0/htdocs/index.php";     
    if(file_exists($filename)&is_file($filename)){
        echo "<pre>";   
        print_r(stat($filename));   
        echo "<pre>";   
    } else {
        echo "该文件不存在";     
    }
    //
    //-------------------【打开和关闭文件】-------------------
    //1、打开文件   
    // 在PHP中打开文件使用的是fopen()函数，其声明方式如下：    
    // resource fopen( string $filename , string $mode [, bool $use_include_path = false [, resource $context ]] )     
    // 上述声明中，$filename表示指定打开的文件，$mode表示文件打开的模式，可选参数$use_include_path表示是否需要在$inlcude_path中搜寻文件，可选参数$content表示上下文，通常用来设置一些其它的协议。      
    //
    // 通常在使用fopen()函数的时候，$filename参数的值不仅可以是本地文件，还可以是以http或者ftp开头的网络URL地址，而参数$mode指定文件的打开模式也有很多种，常见的模式如下表所示。    
    //  r   --只读方式打开，将文件指针指向文件头。   
    //  r+  --读写方式打开，将文件指针指向文件头。   
    //  w   --写入方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之。   
    //  w+  --读写方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之。  
    //  a   --写入方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。    
    //  a+  --读写方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。  
    //  x   --创建并以写入方式打开，将文件指针指向文件头。如果文件已存在，则 fopen()调用失败并返回 FALSE，并生成一条E_WARNING 级别的错误信息。如果文件不存在则进行创建。    
    //  x+  --创建并以读写方式打开，其他的行为和 'x' 一样。    
    // 
    //
    //2、关闭文件   
    // 在PHP中关闭文件使用的是fclose()函数，其声明方式如下：  
    // bool fclose( resource $handle )   
    // 上述代码中，fclose()函数只有一个参数，该参数类型为 fopen()函数成功打开文件时返回的文件指针，如果文件关闭成功时返回true，失败则返回false。    
    //
    //---------------------【读取文件】--------------------------
    //1、fread()函数   
    // --fread()函数用于在打开文件时读取指定长度的字符串，其声明方式如下：    
    // string fread ( resource $handle , int $length )    
    // --fread()函数中的handle参数表示文件系统指针，length参数用于指定读取的字节长度。     
    // --该函数在读取指定length个字节数，或读取到文件末尾时就会停止读取文件，返回所读取的字符串，如果出错返回 false。
    //
    //
    //2、fgetc()函数 & fgets()函数  
    // --fgetc()函数用于在打开的文件中读取一个字符，其声明方式如下：   
    // string fgetc( resource $handle )    
    // --上述声明中，$handle参数表示一个文件指针。该函数每次只能读取一个字节。返回一个包含一个字符的字符串，如果遇到文件结束标志EOF时，则返回false。    
    //
    // --fgets()函数用于在打开的文件中读取一行，其声明方式如下：   
    // string fgets( int $handle [, int $length ] )   
    // --上述声明中，$length是可选参数，指定了读取的字节数。该函数一次至多从打开的文件中读取一行内容。碰到换行符、EOF 或者已经读取了length - 1字节后停止（看先碰到那一种情况）。   
    // --如果没有指定$length，则默认为1024字节。   
    //
    //
    //3、file_get_contents()函数    
    // --file_get_contents()函数用于将文件的内容全部读取到一个字符串中，其声明方式如下：   
    // string file_get_contents( string $filename [, bool $use_include_path [, resource $context [, int $offset [, int $maxlen ]]]] )    
    // --file_get_contents()函数中，$filename指定要读取的文件名，$use_include_path为可选参数，如果也想在$use_include_path中搜寻文件的话，可以将该参数设为1。     
    // --$context为可选参数，指定文件指针的上下文，可用于修改流的行为，若为null，则忽略。     
    // --$start为可选参数，指定在文件中开始读取的位置，默认从文件头开始。$maxlen为可选参数，指定读取的最大字节数，默认为整个文件的大小。   
    //
    //
    //4、file()函数   
    // --file()函数的作用是将整个文件读入到数组中，如果该函数执行成功，则返回一个数组，数组中的每个元素都是文件中的一行，包括换行符在内。如果执行失败，则返回false。其声明方式如下：     
    // array file ( string $filename [, int $use_include_path [, resource $context ]] )    
    // --$filename参数指定了要读取的文件名，也就是说该函数不需要使用fopen()函数打开文件。    
    // --可选参数 $use_include_path表示需要在该路径中搜索文件，$content表示句柄的环境，若使用null则忽略。  
    //
    //
    //-----------------------【写入文件】---------------------
    // 在 PHP中提供了fwrite()和file_put_contents()等函数用于将数据写入到文件的操作，下面将针对这两个函数进行详细讲解。    
    //
    //1、fwrite()函数   
    //  --fwrite()函数用于写入文件，其声明方式如下：    
    //  int fwrite( resource $handle , string $string [, int $length ] )    
    //  --参数$handle表示fopen()函数返回的文件指针，参数$string表示要写入的字符串。    
    //  --参数$length为可选参数，指定写入的字节数，如果指定了$length，则写入指定$length长度的字节，如果省略，则写入整个字符串。    
    //
    //
    //2、file_put_contents()函数   
    //  --在PHP中，file_put_contents()函数也可以用来对文件进行写入操作，而且不需要使用fopen()函数打开文件，其声明方式如下：    
    //  int file_put_contents( string $filename , string $data [, int $flags [, resource  $context ]] )     
    //  --参数 $filename表示指定要写入的文件，参数$data表示指定要写入的字符串内容。    
    //  --可选参数$flags表示指定写入的特征，例如FILE_USE_INCLUDE_PATH，FILE_APPEND表示追加写入，    
    //  --参数$context表示一个资源，该函数执行成功时返回写入到文件内数据的字节数，失败则返回false。   
    //
    //
    //----------------------【其他操作】------------------------
    //1、拷贝文件  
    //  --copy()函数用于实现拷贝文件的功能，其声明方式如下：     
    //  bool copy( string $source , string $dest )    
    //  --参数 $source表示指定源文件，参数$dest表示指定目标文件，当文件拷贝成功时其返回值为true，失败时返回值为false。    
    //
    //2、重命名文件  
    //  --rename()函数用于实现文件或目录的重命名功能，其声明方式如下：      
    //  bool rename( string $oldname , string $newname [, resource $context ] )     
    //  --变量$oldname表示指定源文件的名称，变量$newname表示指定新的文件名称，如果该函数执行成功返回true，失败则返回false。     
    //
    //3、删除文件   
    //  --unlink()函数的作用是删除文件，其声明方式如下：   
    //  bool unlink( string $filename )   
    //  --参数$filename表示文件名或文件路径，如果删除成功返回值为true，失败则返回false。   
    //
    //
    //
    //-----------------------【解析目录】------------------------
    //在程序中经常会对文件的目录进行操作，如获取目录名，文件的拓展名等，在PHP中提供了basename()、dirname()和pathinfo()三个函数来完成对文件目录的解析操作。      
    //
    //1、basename()函数   
    //  --basename()函数用于返回路径中的文件名，其声明方式如下：     
    //  string basename( string $path [, string $suffix ] )     
    //  --$path用于指定路径名，$suffix是可选参数，如果指定了该参数，且文件名是以$suffix结尾的，则返回的结果中会被去掉这一部分字符。    
    //
    //2、dirname()函数  
    //  --dirname()函数用于返回路径中的目录部分，其声明方式如下：   
    //  string dirname( string $path )    
    //  --该函数只有一个参数path，即路径名，该函数的返回值为文件的目录。    
    //
    //3、pathinfo()函数   
    //  --pathinfo()函数用于以数组的形式返回路径的信息，包括目录名、文件名、文件基本名和扩展名。其声明方式如下：     
    //  mixed pathinfo( string $path [, int $options ] )   
    //  --参数$path表示指定的路径名，可选参数$options指定要返回哪些项，默认返回全部。该函数的返回值是一个关联数组。     
    //
    //
    //
    //---------------------------【遍历目录】----------------------------
    //在程序中有时需要对某个目录下的所有的子目录或文件进行遍历，在PHP中提供了opendir()、readdir()、closedir()和rewinddir()等函数用于实现目录的遍历。接下来针对这四个函数进行详细的讲解。      
    //
    //1、opendir()函数   
    //  --opendir()函数用于打开一个目录句柄，其声明方式如下：    
    //  resource opendir( string $path [, resource $context ] )    
    //  --$path指定要打开的目录路径，$context是可选参数表示上下文，通常省略。   
    //  --函数如果执行成功，则返回目录句柄的$resource，否则返回flase。    
    //
    //2、readdir()函数   
    //  --readdir()函数用于从目录句柄中读取条目，其声明方式如下：
    //  string readdir( resource $dir_handle )   
    //  --函数只有一个参数$dir_handle，它用于接收一个目录句柄的$resource。函数执行成功返回目录中下一个文件的文件名，否则返回false。     
    //
    //3、closedir()函数   
    //  --closedir()函数用于关闭目录句柄，其声明方式如下：   
    //  void closedir( resource $dir_handle )    
    //  --函数只有一个参数$dir_handle，它用于接收一个目录句柄的$resource。没有返回值。   
    //
    //4、rewinddir()函数    
    //  --rewinddir()函数用于倒回目录句柄，其声明方式如下：  
    //  void rewinddir( resource $dir_handle )    
    //  --函数只有一个参数$dir_handle，它指定由opendir()函数打开的目录句柄的$resource。   
    //  --执行该函数将$dir_handle指定的目录流重置到目录的开头，没有返回值。   
    //
    //
    //-------------------------【创建和删除目录】-------------------------
    //在PHP中进行文件管理时，经常需要对文件目录进行创建和删除，为此PHP提供了mkdir()和rmdir()函数来实现文件目录的创建和删除，接下来将对这两个函数进行详细讲解。        
    //
    //1、mkdir()函数
    //  --在PHP中，mkdir()函数用于新建目录，其声明方法如下：  
    //  bool mkdir( string $pathname [, int $mode [, bool $recursive [, resource $context ]]] )    
    //  --$pathname指定要创建的目录，$mode为可选参数，指定目录的访问权限，默认值为0777。    
    //  --$recursive为可选参数，指定是否递归创建目录，默认值为false。    
    //  --$context为可选参数，指定上下文，通常可以忽略。该函数执行成功返回true，失败则返回false。   
    //
    //2、rmdir()函数	  
    //  --与mkdir()函数相对应，rmdir()函数用于删除目录，其声明方式如下：   
    //  bool rmdir( string $dirname )    
    //  --函数只有一个参数$dirname，即指定要删除的目录名。函数执行成功时返回true，否则返回false。    
    //  --需要注意的是，在删除文件时必须保证该目录是空的，且具备相应的权限。   
    //
    //
    //
    //
    //*********************【文件的上传和下载】***************************
    //文件上传的过程实质上就是文件复制的过程。首先需要在浏览器端通过HTTP协议将文件上传到服务器端的文件夹，然后再将其移动到指定的目录，从而完成文件的上传。    
    //在文件上传的过程中，会涉及到客户端表单设置和服务器端文件操作，接下来针对这两部分的操作分别进行讲解。  
    //  
    //
    //2、PHP处理上传文件  
    //  --当用户通过上传表单选择一个文件并提交后，PHP会自动生成一个$_FILES二维数组，该数组保存了上传文件的信息。    
    //  --例如上传表单中选择文件的代码如下：   
    //  <input type = "file" name = "userfile" />   
    //  --关于该文件的所有信息都包含在$_FILES[“userfile”]数组中，并且该数组包含了多个键，具体如下：{
    //      --$_FILES[‘userfile’][‘name’]：上传文件的名称，如girl.jpg、boy.png等；  
    //      --$_FILES['userfile']['type']：上传文件的MIME类型，如image/png等；   
    //      --$_FILES['userfile']['size']：上传文件的大小，以字节为单位；   
    //      --$_FILES['userfile']['tmp_name']：存储在服务器文件的临时名称；   
    //      --$_FILES['userfile']['error']：由文件上传导致的错误代码。 {
    //              【上传文件出现错误时，$_FILES[‘userfile’][‘error’]会返回不同的常量值表示不同的错误，具体如下表所示。】    
    //              0   UPLOAD_ERR_OK           --没有错误发生，文件上传成功。
    //              1   UPLOAD_ERR_INI_SIZE     --文件超过了php.ini中upload_max_filesize选项限制的值。    
    //              2   UPLOAD_ERR_FORM_SIZE    --文件大小超过了表单中max_file_size选项指定的值。   
    //              3   UPLOAD_ERR_PARTIAL      --文件只有部分被上传   
    //              4   UPLOAD_ERR_NO_FILE      --没有文件被上传   
    //              6   UPLOAD_ERR_NO_TMP_DIR   --找不到临时文件   
    //              7   UPLOAD_ERR_CANT_WRITE   --文件写入失败   
    //          };    
    //  };        
    //
    //  --文件上传成功后会暂时存储在服务器端的临时文件夹中（C:\Windows\Temp），为了让文件存储在指定目录中，需要使用is_uploaded_file()函数和move_uploaded_file()函数进行设置。    
    //  --is_uploaded_file()函数用于判断文件是否是通过HTTP POST上传的，move_uploaded_file()函数用于将上传的文件从临时文件夹移动到新的位置。     
    //
    //
    ?>
        <form enctype="multipart/form-data" action="index.php" method="POST">  
            <input type="hidden" name="max_file_size" value="30000">
            选择文件：<input type="file" name="userfile" >
            <input type="submit" name="button" id="button" value="文件上传"> 
            <br>
        </form>
        <!-- 一般是分成两个文件 --> 
    <?php
    // 判断文件上传到临时目录是否会出错，如果出错则输出错误信息并退出
    if($_FILES['userfile']['error']>0){
        switch($_FILES['userfile']['error']){
            case 1: 
                $msg="文件超过php.ini中upload max filesize选项限制的值"; break;  
            case 2: 
                $msg="文件大小超过了表单中max_file_size选项指定的值。"; break;  
            case 3:
                $msg="文件只有部分被上传"; break;  
            case 4:
                $msg="没有文件被上传"; break;  
            case 6:
                $msg="找不到临时文件"; break;  
            case 7:
                $msg="文件写入失败"; break;   
            default:
                $msg="未知错误"; break;  
        }
        echo $msg;  
        exit; 
    }
    // 上传临时目录成功，将其复制到指定的文件夹中 
    $des="uploads/".$_FILES['userfile']['name'];  //将要移动到的目录以及名称      
    if(is_uploaded_file($_FILES['userfile']['tmp_name'])){ //系统自动的，临时文件夹目录 
        if(move_uploaded_file($_FILES['userfile']['tmp_name'],$des)){  //从临时文件夹移动到$des文件夹   
            echo "上传成功";   
        }
    }
    //  
    //---------------【文件下载】------------------  
    //与文件上传相比，文件下载要简单得多。在实现文件下载时，需要在HTTP消息中设置两个响应消息头，这两个响应消息头用于告诉浏览器不要直接在浏览器中解析该文件，而是将文件以下载的方式打开。   
    //
    //
    //提供下载的方式可以使用HTML中的a标签：<a href="不联网路径">点击下载</a>  
    //  缺陷：{
    //      1、a标签能够提供的让浏览器自动下载的内容有限：浏览器无法解析才会下载。 
    //      2、a标签下载的文件存储路径会需要通过href属性写出来，这样会暴露服务器存储数据的位置（不安全）。   
    //  };
    //
    //PHP下载：读取文件内容，以文件流的形式传递给浏览器:在相应中告知浏览器不要解析，激活下载框实现下载。  
    //
    //1、文件上传表单   
    //  --在实现文件上传时，首先需要设置文件上传表单，这个表单的提交方式必须为POST。   
    //  --另外，还需要添加上传的属性enctype=”multipart/form-data”，该属性说明浏览器可以提供文件上传功能，服务器端提交的数据中包含文件的数据。     
    //  --通过上述表单可以完成文件的上传操作，该表单与普通表单有一些不同之处，具体如下：{
    //          --表单的提交方式为POST，并且有一个enctype属性提示表单中有二进制文件数据。   
    //          --第1个input标签的type属性为hidden表示隐藏，通过value值指定允许上传文件的最大尺寸。    
    //          --第2个input标签的type属性为file显示一个文件输入框，并提供“浏览”按钮用于选择文件。   
    //  };  
    //1、指定浏览器解析字符集  
    // header('Content-type:text/html;charset=utf-8');  
    //2、设定响应头
    //  *a、设定文件返回类型：image/jpg || application/octet-stream  
    //  *b、设定返回文件计算方式：Accept-ranges:bytes   
    //  *c、设定下载提示：Content-Disposition: attachment; filename="文件名字"   
    //  *d、设定文件大小：Accept-length: 文件大小文件大小（字节）  
    //3、读取文件  
    //4、输出文件  
    //
    //如果文件的名称是从服务器读取来的，而且存在中文，那么如果直接使用名称会乱码。
    //这种情况需要进行字符集转码：从GBK转成UTF-8：$file = iconv('当前见字符集','指定字符集',$读取的文件); 然后赋值给变量使用          
    //
    //方案1：如果文件较小，可以使用PHP5的文件函数操作：file_get_contents()    
    //方案2：如果文件比较大（网络不好）：可以使用PHP4的文件操作方式：一次读一点：$f = @fopen($file,'r') or die();     
    /*
    $fp = @fopen($file,'r') or die()； //以只读方式打开 
    *读取写法一：直接读然后输出，用得比较多 
    while($row = fread($fp,1024)){
        echo $row;  
    }
    *读取写法二：判定是否可读，然后再读   
    while(!feof($fp)){   //feof()判断指针是否到达最后，！如果没有到达最后继续执行    
        echo fread($fp,1024);  
    }
    */
    //
    //
    //
    // 下面给出一个简单的示例，以下载图片girl.jpg为例，示例代码如下：    
    /*
    header("Content-type: image/jpeg"); //指定文件MIME类型  
	header("Content-Disposition: attachment;filename=girl.jpg");   //指定文件描述  

    在上面的代码中，“Content-type”用于指定文件MIME类型，常见的有image/gif、image/jpeg、text/html、text/css等。   
    “Content-Disposition”用于文件描述，其中attachment表明这是一个附件，“filename=girl.jpg”则指定了下载后的文件名。   
    */
    //
    define('ROOT_PATH',dirname(__FILE__));  //定义常量，目录文件名字  
    // 定义一个下载函数   
    function downfile($file_path){
        // 判断文件是否存在
        // 可能会出现中文名进行转码  
        // $file_path = iconv("utf-8","gb2312",$file_path);  //可能会出现中文进行转码    
        if(file_exists($file_path)){   //file_exists 检查文件目录是否存在  
            echo '<br>文件存在！';  
        } else {
            echo dirname(__FILE__);  
            exit('<br>文件不存在');  
        };
        // 获取文件名称  
        $file_name = basename($file_path);    
        // 获取文件大小  
        $file_size = filesize($file_path);  
        // 以只读方式打开文件  
        $fp = fopen($file_path,'r');  
        // 这两句是告诉浏览器，不要在浏览器里解读文件，这里面有一个下载的东西。  
        header("Content-type: application/octet-stream");   //文件以二进制流形式传输给浏览器  
        header('Accept-ranges: bytes');  //以字节形式计算     
        header("Content-Disposition: attachment; filename={$file_name}");   
        
        $buffer=1024;  //定义字节数 
        $file_count = 0;  
        //直接读
        /*
        while($row = fread($fp,$buffer)){
            echo $row;  
        }
        */
        // 判断文件是否结束  
        while(!feof($fp) && ($file_size - $file_count > 0)){
            $file_data = fread($fp, $buffer);   //每次只读一个字节  
            $file_count += $buffer;   
            echo $file_data;  
        }
        //关闭资源 
        fclose($fp);      
        
        // echo file_get_contents($file_path);  //小文件的PHP文件获取函数，有反应可以下载     
    }
    // 调用示例  
    downfile('ROOT_PATH',"/uploads/123.txt");    
    //
    //
    //
    //*********************【图像基础】***********************
    //
    //
    //*********************【图像基础操作】*******************
    //
    //

?>