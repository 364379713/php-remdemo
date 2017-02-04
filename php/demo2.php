<?php
//数组
//range(low,high,[step]);
//创建一个指定范围的数组，第三个参数是可选参数步长；
//$numbers=range(1,10,3);
//print_r($numbers);

//foreach循环来遍历数组；foreach(数组名as。。){}
//$Arr = array('baidu'=>'李宏伟','QQ'=>'马化腾','apple'=>'乔布斯');
//foreach($Arr as $key=>$value){
//	echo $value.'<br />';
//}

//each()函数 数返回当前元素的键名和键值(数组形式)，并将内部指针向后移动
//$Arr = array('baidu'=>'李宏伟','QQ'=>'马化腾','apple'=>'乔布斯');
//print_r(each($Arr));

//current()函数 返回数组中当前指针的值
//$Arr = array('baidu'=>'李宏伟','QQ'=>'马化腾','apple'=>'乔布斯');
//each($Arr);
//print_r(current($Arr)); 马化腾

//end()函数 将内部指针指向数组中的最后一个元素
//$Arr = array('baidu'=>'李宏伟','QQ'=>'马化腾','apple'=>'乔布斯');
//echo end($Arr); 乔布斯

//next() 将内部指针指向数组中的最后一个元素并返回;
//perv() 将内部指针指向数组中的上一个元素并返回；
//reset() 讲内部指针指向数组中的第一个元素；
//$Arr = array('baidu'=>'李宏伟','QQ'=>'马化腾','apple'=>'乔布斯');
//each($Arr);
//echo reset($Arr);

//list()函数用于在一次操作中给一组变量赋值 注：该函数只用于数字索引的数组($key值是索引的);
//$Arr=array('李宏伟','马化腾','乔布斯');
//list($name,$name2,$name3)=$Arr;
//echo $name2; 马化腾

//使用list()和each()函数组合的方式可以把数组中的键$key和值$value分开
//$ages=array('baidu'=>'李宏伟','QQ'=>'马化腾','apple'=>'乔布斯');
//list($name,$age)=each($ages);
//echo $name;

//array_unique()函数会删除数组中值一样的元素只保留第一个被保留的数组将保持第一个数组项的键名类型
//$Arr = array('baidu'=>'李宏伟','QQ'=>'马化腾','apple'=>'乔布斯','apple1'=>'乔布斯');
//print_r(array_unique($Arr));
//echo '<br />';
//print_r($Arr);

//array_flip() 函数用于反转/交换数组中的键名和对应关联的键值
//$ages=array('baidu'=>'李宏伟','QQ'=>'马化腾','apple'=>'乔布斯');
//print_r(array_flip($ages));

//二维数组
//$Arr=array(array('苹果',2),array('香蕉',3),array('橘子',4));
//for($i=0;$i<3;$i++){
//	for($j=0;$j<2;$j++){
//		echo $Arr[$i][$j];
//	}
//	echo '<br />';
//}

//带有键名的二维数组
//$Arr=array(array('公司'=>'baidu','名字'=>'李宏伟'),array('公司'=>'QQ','名字'=>'马化腾'));
//for($i=0;$i<2;$i++){
//	while(!!list($key,$value)=each($Arr[$i])){
//		echo $key.'-'.$value.'<br />';
//	}
//	echo '<br />';
//}

//数组排序sort()函数用于数组排序;有两个参数第一个放数组，第二个可选sortingtype放排序的类型
//rsort()函数用于数组的反向排序；和sort顺序相反
//$Arr=array('0','1','2','4','3','11');
//sort($Arr);
//print_r($Arr);

//asort()函数按照数组的值value顺序排序；
//rasort()相反
//$Arr=array('c'=>'2','b'=>'3','a'=>'1');
//asort($Arr);
//print_r($Arr);

//ksort()函数按照数组的键名key顺序排序
//rksot()与ksort相反
//$Arr=array('c'=>'2','b'=>'3','a'=>'1');
//ksort($Arr);
//print_r($Arr);

//shuffle()对数组的值进行随机排序
//$Arr=array('c'=>'2','b'=>'3','a'=>'1');
//shuffle($Arr);
//print_r($Arr);

//array_reverse()对数组进行反向排序，不会改变原来的数组
//$Arr=array('c'=>'2','b'=>'3','a'=>'1');
//array_reverse($Arr);
//print_r(array_reverse($Arr));


//array_unshift()函数向数组开头添加数据 参数2参数3.。。无限延展添加个数；
//$Arr=array('c'=>'2','b'=>'3','a'=>'1');
//array_unshift($Arr,'aa','bb');
//print_r($Arr);

//array_push()函数向数组最后追加数组元素
//$Arr=array('c'=>'2','b'=>'3','a'=>'1');
//array_push($Arr,'aa','bb');
//print_r($Arr);

//count(arr,[0|1])函数计算数组中的个数；第二个参数可选默认0不计算多维数组中的元素
//第二个参数设置为1也会计算多维数组中的元素；
//$Arr=array('c'=>'2','b'=>'3','a'=>'1');
//echo count($Arr);

//array_count-values()统计数组中的值出现的个数
//$a=array("A","Cat","Dog","A","Dog");
//print_r(array_count_values($a)); Array([A]=>2[Cat]=>1[Dog]=>2)

//extract()函数通过一个数组创建一系列的标量变量，这些变量的名称必须是数
//组中关键字的名称，而变量值则是数组中的值 (key是变量，value是变量的值)；
//$Arr=array('c'=>'2','b'=>'3','a'=>'1');
//extract($Arr);
//echo $a; 1


?>