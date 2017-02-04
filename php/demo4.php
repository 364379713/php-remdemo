<?php
//自定义函数
//md5给字符串加密
//echo md5('123456');

//函数的调用和JS一模一样 ，函数调用不区分大小写，但是变量区分大小写
//global 用在函数内访问全局变量
//$a=2;
//fna();
//function fna(){
//	global $a;
//	$a = 20;
//}
//echo $a;

//函数内可以通过超级全局变量中的任何变量
//$a=2;
//fna();
//function fna(){
//	$GLOBALS['a']=20;
//}
//echo $a;

//文件包含
//include 'demo3.php';
//include_once()函数的作用与include相同不过它会首先验证是否包含了该文件
//如果包含了该文件，则不再执行 include_once();
//include_once 'demo3.php';

//require()语句和include()语句几乎是等价的二者的诧异在于当这两个语句调用
//失败后include()弹出的是警告。而require()弹出的是错误；
//require 'demo3.php';
//require_once 'demo3.php';

//魔法常量
//__FILE__ 存放的当前的文件名
//__line__存放的当前的行号
//__FUNCTION__存放的当前函数名
//__CLASS__存放的当前的类名
//__METHOD__存放当前方法名字
?>