<?php
//https://www.jb51.net/article/101179.htm

//www.jb51.net/article/101179.htm 
ob_start();
function ecb($p){
	static $txt = "";
	ob_clean();
	if(is_array($p) || is_bool($p)){
		var_dump($p);
	}else{
		echo $p;
	}
	echo "<br>";
	
}

//绝对值
ecb(abs(-3.3));
 
//进一取整
ecb(ceil(2.1));

//舍去法取整
ecb(floor(2.9));
 
//浮点数取余
ecb(fmod(5,3));

//返回数的n次方
ecb(pow(3,2));
 
//四舍五入
ecb(round(3.567));

//求平方根
ecb(sqrt(2));

//求最大值
ecb(max(3,5,2,66,33,2,12));
 
//求最小值
ecb(min(3,3,2,23,23,22));

//更好的随机数
ecb(mt_rand(1,100)); 

//随机数
ecb(rand(1,100));

//圆周率 
ecb(pi());

//删除两端空格或预定义字符
ecb(trim("/r/ncccc   ","/r "));

//删除右端空格或预定义字符
ecb(rtrim("/r/nccc/r/n","/r/n "));

//删除左端空格或预定义字符
ecb(ltrim("/r/nccc /r/n","/r/n "));

//返回路径中的目录部分
ecb(dirname("/c/c/d/html/index.php"));

//把字符串填充为指定的长度
ecb(str_pad("cccc",20,"-"));

//重复使用指定的字符串
ecb(str_repeat("-",20));

//把字符串分割到数组中
print_r(str_split("abcdefff"));
//print_r(str_split(",","ab,cd,efff"));
print_r(str_split("abcedfdfdf,sdfsa,dd",3));

//反转字符串
ecb(strrev("abcdef"));

//折行
ecb(wordwrap("An example on a long word is:Super ccdd ee ff gg mm kk",10));

 
//随机打乱字符串
ecb(str_shuffle("123456"));
 
//将字符串解析成变量
parse_str("a=3&b=4&c=mm");
ecb($a);
ecb($b);
ecb($c);
 
//格式化数字 
ecb(number_format(239111.23));
ecb(number_format(2323221.1,4));
ecb(number_format(19200101.20,3,"-","*"));


//字符串转为小写
ecb(strtolower("ABCddd"));

//字符串转为大写 
ecb(strtoupper("abcdAA"));

//字符串首字符大写
ecb(ucfirst("abdedd"));

//字符串全部大写
ecb(ucwords("wwcc ddee mm"));

//把字符转为html实体字符
ecb(htmlentities(htmlentities("a=2&b=3"))); 

//预定义字符转html编码
ecb(htmlspecialchars("abcd'ddm/m > \& ka"));

// \n转义为
ecb(nl2br("asdfasd\nsdfasd \nasdf"));

//剥去HTML,XML,以及PHP标签 
ecb(strip_tags("<b>dd</b><?php>echo 'asdf';<?>"));

$str = "Hello, my name is John Adams."; 
//echo $str; 
ob_flush();

//在指定的字符前添加反作斜线转义字符串 
ecb(addcslashes($str, 'm'));

///删除由addcslashes()添加的反斜线
ecb(stripcslashes("Hello, tm\m,ti\m"));

//在预定义字符前添加反斜线
ecb(addslashes("the i's Tom"));

//删除由addslashes()添加的反斜线
ecb(stripslashes("the i\'s Tom"));

//在字符串中某些预定义的字符前添加反斜线
ecb(quotemeta("aa[ccd]bb"));

//从指定的ASII值返回字符
ecb(chr(44));

//返回字符串第一个字符的ASII值
ecb(ord("abc"));

//不区分大小比较两个字符串 str case cmp
ecb(strcasecmp("abcD","abcd"));

//区分大小比较两字符串
ecb(strcmp("abcD","abcd"));
 
//比较前n个字符串，区分大小写
ecb(strncmp("ab1cd","abcdef",3));
 
//比较前n个字符串，不区分大小写
ecb(strncasecmp("Abcd","abcdff",2)); 

//自然顺序法比较字符串，区分大小写
ecb(strnatcmp("200bbb","1255"));

//自然顺序法比较字符串，不区分大小写
ecb(strnatcasecmp("200Ab","200ab"));

//将字符串分成小块
ecb(chunk_split("abcdefg",2,"-"));

//切开字符串
var_dump(strtok("ab ce fe fg"," "));
echo strtok(" ");
echo strtok("e");
echo strtok("e");
echo strtok("e");
echo strtok("e");
echo strtok(" ");
echo strtok("ab ce fe fg"," ");

//使用一个字符串为标志分割另一个字符串
print_r(explode(",","a,b,c,d"));

//将数组用一个预定字符连接成字符串，同join
ecb(implode(",",array(1,"a","c",2,4)));

//截取字符串
ecb(substr("abcd",2,2));

//字符串替换，区分大小写
ecb(str_replace("aa","bb","aa000000"));

//字符串替换，不区分大小写
ecb(str_ireplace("Aa","dd","aa1111"));

//统计一个字符串在另一个字符串中出现的次数
ecb(substr_count("00abcd00bcd00abd00ab","ab"));

//替换字符串中某串为另一个字答串
ecb(substr_replace("aaaabbbaab-ab-ab-ab","00",10,24));


//返回两字符串相同字符的数量
ecb(similar_text("abcdefddd","ddd"));
 
//返回一个字符串在另一个字符串中最后一次出现的位置开始到末尾的字符串 
ecb(strrchr("aabcdabca--.php","p"));//echo strrchr("haystack","needle"));

//返回一个字符串在另一个字符串中首次出现的位置开始到末尾的字符串 
ecb(strchr("abcdefabcdef","cd"));

//strchr(); strstr()的别名 

//返回一个字符串在另一个字符串中开始位置到结束的字符串，不区分大小写 
ecb(stristr("abCefgabcegabc","ce"));

//替换字符串中的某些字符
ecb(strtr("abceefgabceffg--","bceef","8980"));
 
//寻找字符串中某字符最先出现的位置
ecb(strpos("abcdef","a"));
 
//寻找字符串中某字符最先出现的位置，不区分大小写
ecb(stripos("abceefga","A"));
//寻找字符串中某字符最后出现的位置
ecb(strrpos("abceefga","a"));
 
//寻找字符串中某字符串最后出现的位置，不区分大小写
ecb(strripos("abcdefgaa","A"));

//返回字符串中首次符合mask的子字符长度 
ecb(strspn("Hello0000","0lloHe")); 
//统计字符串含有的单词数
ecb(str_word_count("ss dd mm mm cc"));
//统计字符串长度
ecb(strlen("aabbdd"));

//统计字符串中所有字母出现的次数
ecb(count_chars("1234567890abcdefghjlkqwertyuiopasdfghjkl;zxcvnm,."));
ecb(md5("ssss"));

//数组函数 
//生成一个数组
ecb(array(12,34,"abc"));

//生成一个数组，用一个数组的值作为键名，另一个数组作为值 
$a1 = array("cat",'dog','horse'); 
$a2 = array(1,2,3); 
ecb(array_combine($a1,$a2));

//返回一个包含指定范围的元素的数组
ecb(range(10,50,3));

//创建一个由参数所带变量组成的数组
$a = 1;
$b = 2;
$c = "dd";
ecb(compact("a","b","c"));

//用给定值填充数组
$a = array_fill(1,3,"dd");
ecb($a);

//把一个数组分割为新的数组块 
ecb(array_chunk(array(1,2,3,4,5),3));

//把两个或多个数组合并为一个数组
$a = array("a"=>12,"b"=>33,"c"=>33);
$b = array("c" => 55,"d"=>88,"e"=>33);
ecb(array_merge($a,$b));

$a = array(0=>"Dog",1=>"Cat",2=>"Horse",3=>"Bird"); 
//根据条件取出数组的一部分
ecb(array_slice($a,2,2));

 
//返回两个数组的差集数组
$a1 = array("a"=>1,"b"=>2,"c"=>3,"m"=>22);
$a2 = array("b"=>34,"e"=>22,"c"=>3);
ecb(array_diff($a1,$a2));

//返回两个或多个数组的交集
ecb(array_intersect($a1,$a2));

//在数组中查找一个值，返回一个键，没有返回假
ecb(array_search("aa",array("bb","dd","aa","cc")));
ob_end_flush();

 
//把数组中的一部分删除由其他值代替 
$ac = array(1,2,3,4,5,6);
$dd = array_splice($ac,2,2,array("aa","bb"));
ecb($dd);
ecb($ac);

//返回数组中所有值的总和
ecb(array_sum(array(1,2,3,4,"a","2b")));

//在数组中搜索给定的值，区分大小写 
$f = (in_array("s",array(1,20,3,4,3,2,"sdf","s")));
ecb($f);

//判断数组中是否存在某个键名
ecb(array_key_exists("a",array("b"=>"dd","a9"=>"dd")));

$a = array("a"=>1,"b"=>2,"c"=>3);
next($a);
ecb(key($a));
foreach($a as $key=>$val){
	echo $key . '--' . $val . "<br>";
}
prev($a);
prev($a);
reset($a);
ecb(current($a));
ecb(key($a));

/*
返回数组内部指针当前指向的键名 
返回数组中的当前元素 
内部指针移动下一元素，并返回当前元素 
内部指针移动到上一元素，并返回当前元素 
指针指向最后一个元素，并返回该元素 
指针指向第一个元素，并返回这个元素 
*/

//用数组中的元素为一组变量赋值 
$a = array("dog","cat","horse"); 
list($m,$b) = $a; 
ecb($m . $b );

//删除数组中的第一个元素，并返回此删除的元素
ecb(array_shift($a));

//在数组开头插入一个或多个元素
ecb(array_unshift($a,"cc","mm"));
 
//向数组末尾压入一个或多个元素
ecb(array_push($a,"dd","ee"));

//取得（删除）数组中的最后一个元素
ecb(array_pop($a));

//将数组打乱，保留键名
ecb(shuffle($a));
ecb($a);

//计算数组中单元数目或对象中的属性个数
ecb(count($a));

//返回一个键值反转后的数组
ecb(array_flip($a));
 
//返回所有数组的键组成一个数组 
ecb(array_keys($a));

//返回所有数组的值组成一个数组
ecb(array_values($a));

//返回一个元素顺序相反的数组，键名键值依然匹配
ecb(array_reverse($a));

//统计数组中所有的值出现的次数
ecb(array_count_values($a));

//从数组中随机抽取一个或多个元素，注意是键名
ecb(array_rand($a,2));

//返回数组中当前的键/值对并向前移动数组指针
//each();

//删除重复值，返回剩余数组
ecb(array_unique($a));

$a = array("a"=>1,"b"=>33,"c"=>3,"d"=>23);
//按升序对数组进行排序不保留键名
ecb(sort($a));
ecb($a);

$a = array("a"=>1,"b"=>33,"c"=>3,"d"=>23);
//对数组逆向排序，不保留键名
ecb(rsort($a));
ecb($a);

$a = array("a"=>1,"b"=>33,"c"=>3,"d"=>23);
//对数组排序，保持索引关系
asort($a);
ecb($a);

$a = array("a"=>1,"b"=>33,"c"=>3,"d"=>23);
//对数组逆向排序，保持索引关系
ecb(arsort($a));
ecb($a);

//按键名对数组排序
$a = array("ma"=>1,"b"=>33,"ac"=>3,"d"=>23);
ksort($a);
ecb($a);

//按键名逆向排序
$a = array("ma"=>1,"b"=>33,"ac"=>3,"d"=>23);
krsort($a);
ecb($a);

//用自然顺序算法对数组中的元素排序
$a = array("ma"=>1,"b"=>33,"ac"=>3,"d"=>230);
natsort($a);
ecb($a);

//自然排序，不区分大小写
$a = array("ma"=>1,"b"=>33,"ac"=>3,"d"=>230);
natcasesort($a);
ecb($a);

//文件系统函数
//打开文件或者URL
$hd = fopen("http://www.wzmcjt.com/");
ecb($hd);

//关闭一个已打开的文件指针
$hd = fopen("a.txt","w+");
if($hd){
	fclose($hd);
	ecb("ok");
}

//检查文件是否存在
if(file_exists("a.txt")){
	ecb("a.txt ok");
}else{
	ecb("a.txt not");
}

//取得文件大小
ecb(filesize("a.txt"));
$hd = fopen("a.txt","w+");
ecb(filesize($hd));

//判断给定文件是否可读
if(is_readable("a.txt")){
	ecb("a.txt read ok");
}else{
	ecb("a.txt read not");
}

//判断给定文件是否可写
if(is_writeable("a.txt")){
	ecb("a.txt write ok");
}else{
	ecb("a.txt write not");
}

//判断给定文件是否可执行
if(is_executable("a.txt")){
	ecb("a.txt execut ok");
}else{
	ecb("a.txt execut not");
}


//获取文件创建时间
ecb(filectime("a.txt"));

//获取文件修改时间
ecb(filemtime("a.txt"));

//获取文件的上次访问时间
ecb(fileatime("a.txt"));

//获取文件大部分属性
ecb(stat("a.txt"));

//写入文件
$hd = fopen("a.txt","w+");
$r = fwrite($hd,"ddddddd");
ecb($r);
fclose($hd);


//读取文件
//$f1 = "f.txt"; 
//$hdl = fopen($f1,"r"); 
//$txt = fread($hdl,filesize($f1)); 
$fname = "b.txt";
$hd = fopen($fname,"r");
if($hd){
	$txt = fread($hd,filesize($fname));
	$f = filesize($fname);
	ecb("ss" . $f);
	//ecb($txt);
}else{
	ecb("nnn");
}
fclose($hd);
//从文件指针中读取字符
$hd = fopen("b.txt","r");
$a = 0;
while(! feof($hd)){
	echo fgetc($hd);
	$a++;
	//if($a > 100)
		//break;
}
fclose($hd);

//把整个文件读入一个数组中 
//www.baidu.com'); 
//foreach($lines as $line_num => $line) { 
//echo "line $line_num "; 
//echo htmlspecialchars($line) . "
//\n"; 
//} 
$arr = file("http://www.baidu.com");
//ecb($arr);

//输出一个文件
$c = readfile("b.txt");

//file_get_contents(); //将整个文件读入到一个字符串
$a = file_get_contents("a.txt");
ecb($a);
ecb(filesize("a.txt"));


$fname = "a.txt";
$hd = fopen($fname,"r");
if($hd){
	$txt = fread($hd,filesize($fname));
	$f = filesize($fname);
	ecb("ss" . $f);
	ecb($txt);
}else{
	ecb("nnn");
}
fclose($hd);
$hd = fopen("a.txt","r");
while(!feof($hd)){
	echo fgetc($hd);
}

//返回文件指针读/写的位置 
//在文件指针中定位
ecb(ftell($hd));
fseek($hd,2);
ecb(ftell($hd));
rewind($hd);
ecb(ftell($hd));
fread($hd,3);
ecb(ftell($hd));
//倒回指针位置

//轻便的执行文件锁定
//flock

//目录 
//返回路径中文件名部分
$fname = basename("/dd/mm/ee/a.php");
ecb($fname);
ecb(basename("/dd/cc/ee/abe.php",".php"));

//返回路径中的目录部分
ecb(dirname("/dc/mm/ee/p.php"));

//返回文件路径信息
ecb(pathinfo("/dc/mm/dd/a.txt"));

//打开目录句柄
//从目录读取条目
//倒回目录句柄
$fp = opendir("E:/");
echo readdir($fp) ."<br>";
echo readdir($fp) ."<br>";
echo readdir($fp) ."<br>";
rewinddir($fp);
echo "-------------<br>";
echo readdir($fp) . "<br>";
closedir($fp);

//新建目录
//删除目录
if(file_exists("dd")){
	echo "dd 已存在";
	rmdir("dd");
}else{
	$r = mkdir("dd");
	if($r){
		echo "dd 创建成功";
	}
}

//删除文件
$ff = fopen("cc.c","w");
fclose($ff);
unlink("cc.c");
if(!file_exists("cc.c")){
	echo "cc.c文件已删除ok";
}

//拷贝文件 
copy("a.txt","dd.c");
if(file_exists("dd.c")){
	echo "拷贝成功";
	//unlink("dd.c");
}

//重命名一个文件或目录
$f = rename("dd.c","ee.c");

if($f && file_exists("ee.c")){
	echo "重命名成功";
}else{
	echo "重命名不成功";
}


//判断文件是否是通过HTTPPOST上传的
if(is_uploaded_file("ee.c")){
	echo "ok,是上传的文件";
}else{
	echo "不是上传的文件";
}
//将上传文件移动到新位置
//move_uploaded_file();

//时间函数 
//返回当前unix时间截
ecb(time());
//取得一个日期的unix时间截
ecb(mktime("2001-01-01"));

//取得日期/时间信息
ecb(getdate("2010-01-01"));

//验证一个格里高日期
ecb(checkdate(2,2,1980));

//设定用于一个脚本中所有日期时间函数的默认时区
//date_default_timezone_set();
//date_default_timezone_set();
//date_default_timezone_set();
//date_default_timezone_set();
ecb(date_default_timezone_get());
//将任何英文文本的日期时间描述解析为unix时间截 
ecb(strtotime("2010-02-02"));

//返回当前unix时间戳 戳和微秒数
ecb(microtime());

//其他常用 
//获取变量整数值
ecb(intval("a22329"));

//PDO相关函数prepare() execute() fetch()

/*
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
*/

/*
正则表达式  
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


?>
