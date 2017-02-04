<?php
//basename()函数返回路径的文件名部分，第二个参数可选放
//扩展名可以把扩展名隐藏；
//$path='C:\xampp\htdocs\php\demo1.php';
//echo basename($path);  

//dirname()函数返回路径的目录部分
//$path='C:\xampp\htdocs\php\demo1.php';
//echo dirname($path);

//pathinfo()当只有一个参数的时候返回的是关于路径的信息的数组
//当有第二个参数的时候 返回的类型是字符串
//PATHINFO_DIRNAME - 只返回 dirname
//PATHINFO_BASENAME - 只返回 basename
//PATHINFO_EXTENSION - 只返回 extension
//$path='C:\xampp\htdocs\php\demo1.php';
//$array_path=pathinfo($path,PATHINFO_BASENAME);
//echo $array_path;

//realpath()函数将相对路径转换为绝对路径如果失败返回false
//$path = './demo1.php';
//echo realpath($path);

//filesize()函数返回指定文件字节的大小
//这里用round()函数把字节转换成KB
//$file='C:\xampp\htdocs\php\demo1.php';
//echo round(filesize($file)/1024,2).'KB';

//disk_free_space()函数返回指定的目录所在磁盘分区的可用空间
//$drive='C:';
//echo round(disk_free_space($drive)/1024/1024,2).'MB';

//disk_total_space()函数返回指定目录所在的磁盘分区的总空间；
//$file='C:';
//echo round(disk_total_space($file)/1024/1024,2).'MB';

//fileatime()函数返回文件的最后访问时间的时间戳
//$file = 'C:\xampp\htdocs\php\demo1.php';
//echo date("Y-m-d,h:i:s",fileatime($file));

//filectime()函数返回文件的最后改变时间的时间戳
//$file = 'C:\xampp\htdocs\php\demo1.php';
//echo date("Y-m-d,h:i:s",filectime($file));

//filemtime()函数返回文件的最后修改时间戳
//$file = 'C:\xampp\htdocs\php\demo1.php';
//echo date("Y-m-d,h:i:s",filemtime($file));

//三文件处理
//将数据写入一个文件，有 3 个步骤：
//1. 打开这个文件。如果文件不存在，需要先创建它。
//2. 将数据写入这个文件。
//3. 关闭这个文件
//同样，从一个文件中读出数据，也有 3 个步骤：
//1. 打开这个文件。如果这个文件不能打开，就应该意识到这一点并且正确地退出。
//2. 从文件中读出数据。
//3. 关闭这个文件。

//fopen()函数
//$fp=fopen(文件路径 , 文件模式 , [是否在 incloude_path 中搜索一个文件],[允许文件名
//以协议名称开始(如 http://)] )
//文件模式的参数
//"r" （只读方式打开，将文件指针指向文件头）
//"r+" （读写方式打开，将文件指针指向文件头）
//"w" （写入方式打开，清除文件内容，如果文件不存在则尝试创建之）
//"w+" （读写方式打开，清除文件内容，如果文件不存在则尝试创建之）
//"a" （写入方式打开，将文件指针指向文件末尾进行写入，如果文件不存在则尝试创建之）
//"a+" （读写方式打开，通过将文件指针指向文件末尾进行写入来保存文件内容）
//"x" （创建一个新的文件并以写入方式打开，如果文件已存在则返回 FALSE 和一个错误）
//"x+" （创建一个新的文件并以读写方式打开，如果文件已存在则返回 FALSE 和一个错误）
//如果 fopen()函数调用失败，函数将返回 false。可以用一种对于用户友好的方式来处理
//这个错误，可以通过抑制 PHP 的错误信息并且根据自己的方式给出错误信息。
//@$fp=fopen("file.txt",'ab'); //ab 追加并且二进制方式

//在 PHP 中写文件相对比较简单。可以使用 fwrite() 或者 fputs() 函数
//fwrite()函数可放三个参数，第一个放fopen方法打开的文件变量，第二个放添加的字符串，
//第三个放字符串长度可选；fwrite($fp, $string, strlen($string))
//关闭文件用fclose()函数当文件使用完毕后应该将其关闭
//$fp=fopen('text.txt','a');
//fwrite($fp,'HI china');
//fclose($fp)

//fgetc()：读出一个字符，并将指针移到下一个字符。
//fgets()：读出一行字符，可以指定一行显示的长度。
//fgetss()：从文件指针中读取一行并过滤掉 HTML 标记。
//fread()：读取定量的字符。
//fpassthru()： 输出文件指针处的所有剩余数据。
//file()：将整个文件读入数组中，以行分组。
//readfile()：读入一个文件并写入到输出缓冲。
//file_get_contents()：将整个文件读入一个字符串
//file_put_contents():将一个字符串写入文件

//$fp=fopen('text.txt','r');
//feof()判断读完文件函数feof()
//while(!feof($fp)){
//	echo fgetc($fp);
//}

//file_exists()函数判断文件是否存在
//$fp=fopen('text.txt','r');
//if(file_exists('text.txt')){
//	echo '存在';
//}else{
//	echo '不存在';
//}

//查看一个文件的大小：filesize();
//删除一个文件：unlink();
//在文件中定位：rewind()、fseek()和 ftell()；
//rewind()函数可以将文件指针复位到文件的开始。
//ftell()函数可以以字节为单位报告文件指针当前在文件中的位置。
//fseek()函数可以将文件指针 fp 从 whence位置移动 offset 字节。

//opendir()：打开路径指定的目录流。
//closedir()：关闭目录流。
//readdir()：返回目录中的各个元素。
//readdir()返回目录中的各个元素
//$dir = opendir('C:\xampp\htdocs\php');
//while(!!$file=readdir($dir)){
//	echo $file.'<br />';
//}

//scandir()：将目录读入数组。
//print_r(scandir('C:\AppServ\www\Basic5'));

//rmdir()：删除指定的目录。
//rmdir('C:\AppServ\www\Basic5\123');

//rename()：重命名文件。
//rename('Demo1.php','Demo01.php');
//echo '11';
?>