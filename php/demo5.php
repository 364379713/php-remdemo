<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
//字符串处理
//格式化字符串
//chop()函数移除字符串后面多余的空白。包括新行
//ltrim()函数移除字符串起始处的空白；
//rtrim()函数移除字符串后面的空白包括新行==chop();
//trim()函数移除字符串两边多余的空白；

//nl2br()函数将字符串作为输入参数用XHTML 中的<br />标记代替字符串中的换行符
//echo nl2br("Teacher!\nStudent!");

//htmlentities();会把html标签按字符串形式返回
//echo htmlentities('<i>hello<i>');
//echo '<i>hello<i>';

//htmlspecialchars()函数转换html特殊字符
//echo htmlspecialchars('<i>我是吴祁！</i>');

//strip_tags();函数会去掉字符串里的HTML
//echo strip_tags('<strong>我是吴祁！</strong>');

//php提供了两个专门用于转移字符串的函数在将任何字符串写到数据库之前，应该
//使用 addslashes()将它们重新格式化
//在调用了 addslashes()后，所有的引号都加了斜杠，而stripslashes()函数去掉了这些斜 杠 。
//echo stripslashes(addslashes('this \a" taeacher'));

//格式化字符串中的字母大小写
//strtoupper()函数将字符串转换为大写
//strtolower()函数将字符串转换成小写
//ucfirst()函数将第一个字母转换为大写
//ucwords()函数将每个单词第一个字母转换为大写

//str_pad()将字符串用指定个数的字符填充字符串。
//echo str_pad('Salad',50).'is good.';

//explode()函数把字符串分割为数组第一个参数放分割符号，第二个参数放字符串
//第三个参数可选写字符串的分割的个数
//$str = "www.runoob.com";
//print_r(explode('.', $str,2));

//join()和 implode()函数返回一个由数组元素组合成的字符串。与explode正好相反
//$arr = array('Hello','World!','Beautiful','Day!');
//echo join(" ",$arr);

//strtok()函数用于分割字符串以指定字符第一个参数传字符串，第二个参数传分隔符号
//$str = "i,will.be#back";
//$tok = strtok($str,",.#");
//echo $tok;
//$tok = strtok(",.#");
//echo $tok;
//$tok = strtok(",.#");
//echo $tok;
//$tok = strtok(",.#");
//echo $tok;
//$str = "i,will.be#back";
//$tok = strtok($str,",.#");
//while($tok){
//	echo "$tok<br />";
//	$tok = strtok(",.#");
//}

//substr()方法是截取字符串传递三个参数第一个参数放字符串，第二个参数放起始位置
//第三个参数放终止位置，如果第三个参数为空则从起始位置截取到最后
//echo substr("abcdefg",1,3);

//str_split()函数分解字符串返回一个数组每一个元素存放一个字符
//print_r(str_split('This is a Teacher!'));

//strrev()函数逆序排列字符串；
//echo strrev('This is a Teacher!');

//strcmp()函数传递两个参数比较两个字符串 相等返回0
//0 - 如果两个字符串相等
//<0 - 如果 string1 小于 string2
//>0 - 如果 string1 大于 string2
//echo strcmp('hello', 'hello');

//使用 strspn()函数返回一个字符串中包含有另一个字符串中字符的第一部分的长度。也
//求两个字符串之间相同的部分
//echo strspn('gmail.','yc60.com@gmail.com');
//string	必需。规定被搜索的字符串。
//charlist	必需。规定要查找的字符。
//start	可选。规定在字符串的何处开始。
//length	可选。定义字符串的长度。

//strlen()返回字符串的长度
//echo strlen('yull');

//substr_count();函数计算子串在字符串中出现的次数
//string	必需。规定要检查的字符串。
//substring	必需。规定要检索的字符串。
//start	可选。规定在字符串中何处开始搜索。
//length	可选。规定搜索的长度。
//echo substr_count('aaaccc', 'a');

//strstr()函数第一个参数填字符串，第二个传目标字符串
//第三个参数默认false返回目标字符串以后的字符串(包含目标字符串)；
//第三个参数true返回目标字符串以前的字符串(目标不包含字符串)
//echo strstr('yc60.com@gmail.com','com',true);

echo strrpos('yc60.com@gmail.com','c');
?>