<?php
//https://www.jb51.net/article/101179.htm
$file = "phpfunc-2.php";
$hd = fopen($file,"r");
while(!feof($hd)){
	$linetxt = fgets($hd);
	//echo $linetxt . "<br>";
	$arr = explode("//",$linetxt);
	echo $arr[count($arr)-1] . "<br>";
}
fclose($hd);
echo "ok";

?>

www.jb51.net/article/101179.htm 
绝对值 abs();
进一取整 
舍去法取整 flood();
浮点数取余 mod();
返回数的n次方 pow(m,n);
四舍五入 round();
求平方根 sqr(9);
求最大值 max();
求最小值 min();
更好的随机数 mt_random();
随机数 random();
圆周率 pi();

删除两端空格或预定义字符 trim();
删除右端空格或预定义字符 rtrim();
删除左端空格或预定义字符 ltrim();
返回路径中的目录部分 basename();
把字符串填充为指定的长度 
重复使用指定的字符串 str_repeat();
把字符串分割到数组中 split(); explode();
反转字符串 strrev();
echo wordwrap("An example on a long word is:Supercalifragulistic",15); 
随机打乱字符串 
将字符串解析成变量 
print_r($my_Arr); 
格式化数字 
字符串转为小写 strtolower();
字符串转为大写 strtoupper();
字符串首字符大写 ucfirst();
字符串全部大写  

把字符转为html实体字符 
预定义字符转html编码 
\n转义为

剥去HTML,XML,以及PHP标签  

$str = "Hello, my name is John Adams."; 
echo $str; 
在指定的字符前添加反作斜线转义字符串 
删除由addcslashes()添加的反斜线 
在预定义字符前添加反斜线 
删除由addslashes()添加的反斜线 
在字符串中某些预定义的字符前添加反斜线 
从指定的ASII值返回字符 
返回字符串第一个字符的ASII值 
不区分大小比较两个字符串 
区分大小比较两字符串 
比较前n个字符串，区分大小写 
比较前n个字符串，不区分大小写 
自然顺序法比较字符串，区分大小写 
自然顺序法比较字符串，不区分大小写 
将字符串分成小块 
切开字符串 
使用一个字符串为标志分割另一个字符串 

将数组用一个预定字符连接成字符串，同join 
截取字符串 
字符串替换，区分大小写 
字符串替换，不区分大小写 
统计一个字符串在另一个字符串中出现的次数 
替换字符串中某串为另一个字答串 
返回两字符串相同字符的数量 
返回一个字符串在另一个字符串中最后一次出现的位置开始到末尾的字符串 
返回一个字符串在另一个字符串中首次出现的位置开始到末尾的字符串 
strchr(); strstr()的别名 
返回一个字符串在另一个字符串中开始位置到结束的字符串，不区分大小写 
替换字符串中的某些字符 
寻找字符串中某字符最先出现的位置 
寻找字符串中某字符最先出现的位置，不区分大小写 
寻找字符串中某字符最后出现的位置， 
寻找字符串中某字符串最后出现的位置，不区分大小写 
返回字符串中首次符合mask的子字符长度 
统计字符串含有的单词数 
统计字符串长度 
统计字符串中所有字母出现的次数 
md5 

数组函数 
生成一个数组 array();
生成一个数组，用一个数组的值作为键名，另一个数组作为值 
$a1 = array("cat",'dog','horse'); 
$a2 = array(1,2,3); 
print_r(array_combine($a1,$a2); 
返回一个包含指定范围的元素的数组 
$number = range(0,50,10); 
print_r($number); 
创建一个由参数所带变量组成的数组 
$firstname = "peter"; 
$lastname = "griffin"; 
$age = "38"; 
$result = compact("firstname","lastname","age"); 
用给定值填充数组 
$a = array_fill(2,3,"dog"); 
把一个数组分割为新的数组块 
把两个或多个数组合并为一个数组 
$a1 = array("a" => "Horse","b" => "Dog"); 
$a2 = array("c" => "Cow", "b" => "Cat"); 
print_r(array_merge($a1, $a2)); 
$a = array(0=>"Dog",1=>"Cat",2=>"Horse",3=>"Bird"); 
根据条件取出数组的一部分 
返回两个数组的差集数组 
返回两个或多个数组的交集 
在数组中查找一个值，返回一个键，没有返回假 
把数组中的一部分删除由其他值代替 
返回数组中所有值的总和 
在数组中搜索给定的值，区分大小写 
判断数组中是否存在某个键名 
返回数组内部指针当前指向的键名 
返回数组中的当前元素 
内部指针移动下一元素，并返回当前元素 
内部指针移动到上一元素，并返回当前元素 
指针指向最后一个元素，并返回该元素 
指针指向第一个元素，并返回这个元素 
用数组中的元素为一组变量赋值 
$a = array("dog","cat","horse"); 
list($a,$b,$c) = $a; 
删除数组中的第一个元素，并返回此删除的元素 
在数组开头插入一个或多个元素 
向数组末尾压入一个或多个元素 
取得（删除）数组中的最后一个元素 
将数组打乱，保留键名 
计算数组中单元数目或对象中的属性个数 
返回一个键值反转后的数组 
返回所有数组的键组成一个数组 
返回所有数组的值组成一个数组 
返回一个元素顺序相反的数组，键名键值依然匹配 
统计数组中所有的值出现的次数 
从数组中随机抽取一个或多个元素，注意是键名 
返回数组中当前的键/值对并向前移动数组指针 
删除重复值，返回剩余数组 
按升序对数组进行排序不保留键名 
对数组逆向排序，不保留键名 
对数组排序，保持索引关系 
对数组逆向排序，保持索引关系 
按键名对数组排序 
按键名逆向排序 
用自然顺序算法对数组中的元素排序 
自然排序，不区分大小写 

文件系统函数 
打开文件或者URL 
user:password@example.com/somefile.txt","w"); 
关闭一个已打开的文件指针 
检查文件是否存在 
取得文件大小 
判断给定文件是否可读 
判断给定文件是否可写 
判断给定文件是否可执行 
获取文件创建时间 
获取文件修改时间 
获取文件的上次访问时间 
获取文件大部分属性 
写入文件 
$file = "f.txt"; 
$hdl = fopen($f1,"w"); 
fwrite($hdl,"ttttttt"); 
同fwrite(); 
读取文件 
$f1 = "f.txt"; 
$hdl = fopen($f1,"r"); 
$txt = fread($hdl,filesize($f1)); 
检测文件指针是否到了文件结束的位置 
从文件指针中读取字符 
把整个文件读入一个数组中 
www.baidu.com'); 
foreach($lines as $line_num => $line) { 
echo "line $line_num "; 
echo htmlspecialchars($line) . "
\n"; 
} 
输出一个文件， 
将整个文件读入到一个字符串 
返回文件指针读/写的位置 
在文件指针中定位 
$fp = fopen("txt.txt",'r'); 
fseek($fp,3); 
echo ftell($fp); 
fread($fp,4); 
echo ftell($fp); 
倒回指针位置 
轻便的执行文件锁定 

目录 
返回路径中文件名部分 
$path = "/home/httpd/html/index.php"; 
$file = basename($path); 
$file = basename($path,'.php'); 
返回路径中的目录部分 
返回文件路径信息 
打开目录句柄 
从目录读取条目 
倒回目录句柄 
$fp = opendir("E:/xampp/htdocs/php/study/19"); 
echo readdir($fp) . "
"; 
echo readdir($fp) . "
"; 
rewinddir($fp); 
echo readdir($fp) . "
"; 
closedir($fp); 
新建目录 
删除目录 
删除文件 
拷贝文件 
重命名一个文件或目录 
判断文件是否是通过HTTPPOST上传的 
将上传文件移动到新位置 

时间函数 
返回当前unix时间截 
取得一个日期的unix时间截 
取得日期/时间信息 
验证一个格里高日期 
设定用于一个脚本中所有日期时间函数的默认时区 
将任何英文文本的日期时间描述解析为unix时间截 
返回当前unix时间戳 戳和微秒数 

其他常用 
获取变量整数值 

PDO类相关函数prepare() execute() fetch() 
$driver = 'mysql'; 
$database = 'dbname=mydb'; 
$dsn = "$driver:host=localhost;unix_socket=/home/cg/mysql/mysql.sock;$database"; 

$username = 'root'; 
$password = 'root'; 

try{ 
$conn = new PDO($dsn, $username, $password); 
echo "
Database CODingground Connected
"; 
}catch($PDOException $e){ 
echo "
" . $e->getMessage() . "
"; 
} 

$sql = 'SELECT * FROM users'; 
$stmt = $conn->prepare($sql); 
$stmt->execute(); 
echo ""; 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ 
echo ""; 
foreach($row as $value) 
{ 
echo sprintf("", $value); 
} 
echo ""; 
} 
echo "
%s
"; 

正则表达式 
/* 
\d == [0-9] 
\D == [^0-9] 
\s == [\n\f\r\t\v] 
\S == [^\n\f\r\t\v] 
\w == [0-9a-zA-Z_] 
\W == [^0-9a-zA-Z_] 
[] 表示范围 
[] 匹配任意一个中括号中定义的原子 
[^] 中括号里的^(抑扬符)表示匹配任意一个除中括号里面定义的原子 

限定次数 
* 匹配0次，1次或多次 == {0，} 
+ 匹配1次或多次其前的原子 == {1，} 
？匹配0次或1次其前的原子 == {0，1} 
{n} 表示其前原子至少出现n次，最多不限制 
{n,m} 表示其前原子最少出现n次，最多出现m次 

其他 
. 匹配除换行符(\n)以外的任意字符,windows下不匹配\f\r 
| 两个或多个分支选择，优先级最低 
^ 匹配输入字符开始的位置 
$ 匹配输入字符结束的位置 
\b 匹配词边界 
\B 匹配非词边界 
() 模式单元，把多个小原子组成一个大原子 
() 可以改变优先级 
*/ 

ok