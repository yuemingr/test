<?php
//https://www.jb51.net/article/101179.htm
echo abs(-2.3);
echo ceil(9.99); //进一取整 
echo floor(9.999); //舍去法取整
echo fmod(5.7,1.3); //浮点数取余
echo pow(3,2); //返回数的n次方
echo round(3.522);//四舍五入
echo sqrt(9); //求平方根
echo max(4,3,2,55,332,23); //求最大值
echo min(3,2,3,1); //求最小值
echo mt_rand(0,9); //更好的随机数
echo rand(0,9); //随机数
echo pi(); //圆周率

echo trim("  sadf  "); //删除两端空格或预定义字符
echo rtrim(" asdf "); //删除右端空格或预定义字符
echo ltrim(" sbc  "); //删除左端空格或预定义字符
echo dirname("c:/testweb/home.php"); //返回路径中的目录部分
echo str_pad("hello world",20,'.'); //把字符串填充为指定的长度
echo str_repeat(".", 13); //重复使用指定的字符串
print_r(str_split("hello")); //把字符串分割到数组中
echo strrev("aabbcc"); //反转字符串
echo wordwrap("An example on a long word is:Supercalifragulistic",15);
echo str_shuffle("Hello world"); //随机打乱字符串
parse_str("id=23&name=John%20Adams",$myArr); //将字符串解析成变量
print_r($my_Arr);
//number_format(); //格式化数字
echo strtolower("Hello World"); //字符串转为小写
echo strtoupper("Hello World"); //字符串转为大写
echo ucfirst("hello world"); //字符串首字符大写
echo ucwords("hello world"); //字符串全部大写

echo htmlentities("John & ’Admas'"); //把字符转为html实体字符
//htmlspecialchars(); //预定义字符转html编码
echo nl2br("One line.\nAnother line."); // \n转义为<br>
echo strip_tags("Hello <b>world</b>"); //剥去HTML,XML,以及PHP标签

$str = "Hello, my name is John Adams.";
echo $str;
echo addcslashes($str, 'm'); //在指定的字符前添加反作斜线转义字符串
echo stripcslashes("Hello, \my na\me is Kai ji\m"); //删除由addcslashes()添加的反斜线
echo addslashes("who's John Adams?"); //在预定义字符前添加反斜线
echo stripslashes("Who\'s John Adams?"); //删除由addslashes()添加的反斜线
echo quotemeta("Hello world. (can you hear me?)"); //在字符串中某些预定义的字符前添加反斜线
echo chr(052); //从指定的ASII值返回字符
echo ord("hello"); //返回字符串第一个字符的ASII值
echo strcasecmp("Hello world","HELLO WORLd"); //不区分大小比较两个字符串
//strcmp(); //区分大小比较两字符串
//strncmp(); //比较前n个字符串，区分大小写
//strncasecmp(); //比较前n个字符串，不区分大小写
//strnatcmp(); //自然顺序法比较字符串，区分大小写
//strnatcasecmp(); //自然顺序法比较字符串，不区分大小写
//chunk_split(); //将字符串分成小块
//strtok(); //切开字符串
//explode(); //使用一个字符串为标志分割另一个字符串

//implode(); //将数组用一个预定字符连接成字符串，同join
//substr(); //截取字符串
//str_replace(); //字符串替换，区分大小写
//str_ireplace(); //字符串替换，不区分大小写
//substr_count(); //统计一个字符串在另一个字符串中出现的次数
//substr_replace(); //替换字符串中某串为另一个字答串
//similar_text(); //返回两字符串相同字符的数量
//strrchr(); //返回一个字符串在另一个字符串中最后一次出现的位置开始到末尾的字符串
//strstr(); //返回一个字符串在另一个字符串中首次出现的位置开始到末尾的字符串
//strchr(); strstr()的别名
//stristr(); //返回一个字符串在另一个字符串中开始位置到结束的字符串，不区分大小写
//strtr(); //替换字符串中的某些字符
//strpos(); //寻找字符串中某字符最先出现的位置
//stripos(); //寻找字符串中某字符最先出现的位置，不区分大小写
//strrpos(); //寻找字符串中某字符最后出现的位置，
//strripos(); //寻找字符串中某字符串最后出现的位置，不区分大小写
//strspn(); //返回字符串中首次符合mask的子字符长度
//str_word_count(); //统计字符串含有的单词数
//strlen(); //统计字符串长度
//count_chars(); //统计字符串中所有字母出现的次数
echo md5("Hello"); //md5

//数组函数
$a = array("a","b","c"); //生成一个数组
//生成一个数组，用一个数组的值作为键名，另一个数组作为值
$a1 = array("cat",'dog','horse');
$a2 = array(1,2,3);
print_r(array_combine($a1,$a2);
//返回一个包含指定范围的元素的数组
$number = range(0,50,10);
print_r($number);
//compact(); 创建一个由参数所带变量组成的数组
$firstname = "peter";
$lastname = "griffin";
$age = "38";
$result = compact("firstname","lastname","age");
//array_fill(); 用给定值填充数组
$a = array_fill(2,3,"dog");
//array_chunk();把一个数组分割为新的数组块
//array_merge();把两个或多个数组合并为一个数组
$a1 = array("a" => "Horse","b" => "Dog");
$a2 = array("c" => "Cow", "b" => "Cat");
print_r(array_merge($a1, $a2));
$a = array(0=>"Dog",1=>"Cat",2=>"Horse",3=>"Bird");
print_r(array_slice($a1,1,2)); //根据条件取出数组的一部分
//array_diff(); 返回两个数组的差集数组
//array_intersect(); 返回两个或多个数组的交集
//array_search(); 在数组中查找一个值，返回一个键，没有返回假
//array_splice(); 把数组中的一部分删除由其他值代替
//array_sum(); //返回数组中所有值的总和
//in_array(); //在数组中搜索给定的值，区分大小写
//array_key_exists(); //判断数组中是否存在某个键名
//key(); 返回数组内部指针当前指向的键名
//current(); 返回数组中的当前元素
//next(); 内部指针移动下一元素，并返回当前元素
//prev(); 内部指针移动到上一元素，并返回当前元素
//end(); 指针指向最后一个元素，并返回该元素
//reset(); 指针指向第一个元素，并返回这个元素
//list(); 用数组中的元素为一组变量赋值
$a = array("dog","cat","horse");
list($a,$b,$c) = $a;
//array_shift(); 删除数组中的第一个元素，并返回此删除的元素
//array_unshift(); 在数组开头插入一个或多个元素
//array_push(); 向数组末尾压入一个或多个元素
//array_pop(); 取得（删除）数组中的最后一个元素
//shuffle(); 将数组打乱，保留键名
//count(); 计算数组中单元数目或对象中的属性个数
//array_flip(); 返回一个键值反转后的数组
//array_keys(); 返回所有数组的键组成一个数组
//array_values(); 返回所有数组的值组成一个数组
//array_reverse(); 返回一个元素顺序相反的数组，键名键值依然匹配
//array_count_values(); 统计数组中所有的值出现的次数
//array_rand(); 从数组中随机抽取一个或多个元素，注意是键名
//each(); 返回数组中当前的键/值对并向前移动数组指针
//array_unique(); 删除重复值，返回剩余数组
//sort(); 按升序对数组进行排序不保留键名
//rsort(); 对数组逆向排序，不保留键名
//asort(); 对数组排序，保持索引关系
//arsort(); 对数组逆向排序，保持索引关系
//ksort(); 按键名对数组排序
//krsort(); 按键名逆向排序
//natsort(); 用自然顺序算法对数组中的元素排序
//natcasesort(); 自然排序，不区分大小写

//文件系统函数
//fopen(); 打开文件或者URL
$handle = fopen("ftp://user:password@example.com/somefile.txt","w");
//fclose(); 关闭一个已打开的文件指针
//file_exists(); 检查文件是否存在
//filesize(); 取得文件大小
//is_readable(); 判断给定文件是否可读
//is_writable(); 判断给定文件是否可写
//is_executable(); 判断给定文件是否可执行
//filectime(); 获取文件创建时间
//filemtime(); 获取文件修改时间
//fileatime(); 获取文件的上次访问时间
//stat(); 获取文件大部分属性
//fwrite(); 写入文件
$file = "f.txt";
$hdl = fopen($f1,"w");
fwrite($hdl,"ttttttt");
//fputs(); 同fwrite();
//fread(); 读取文件
$f1 = "f.txt";
$hdl = fopen($f1,"r");
$txt = fread($hdl,filesize($f1));
//feof(); 检测文件指针是否到了文件结束的位置
//fgetc(); 从文件指针中读取字符
//file();把整个文件读入一个数组中
$lines = file('http://www.baidu.com');
foreach($lines as $line_num => $line) {
	echo "line <b> $line_num </b>";
	echo htmlspecialchars($line) . "<br/>\n";
}
//readfile(); 输出一个文件， 
//file_get_contents(); 将整个文件读入到一个字符串
//ftell(); 返回文件指针读/写的位置
//fseek(); 在文件指针中定位
$fp = fopen("txt.txt",'r');
fseek($fp,3);
echo ftell($fp);
fread($fp,4);
echo ftell($fp);
//rewind(); 倒回指针位置
//flock(); 轻便的执行文件锁定

//目录
//basename 返回路径中文件名部分
$path = "/home/httpd/html/index.php";
$file = basename($path);
$file = basename($path,'.php');
//dirname(); 返回路径中的目录部分
//pathinfo(); 返回文件路径信息
//opendir(); 打开目录句柄
//readdir(); 从目录读取条目
//rewinddir(); 倒回目录句柄
$fp = opendir("E:/xampp/htdocs/php/study/19");
echo readdir($fp) . "<br>";
echo readdir($fp) . "<br>";
rewinddir($fp);
echo readdir($fp) . "<br>";
closedir($fp);
//mkdir(); 新建目录
//rmdir(); 删除目录
//unlink(); 删除文件
//copy(); 拷贝文件
//rename(); 重命名一个文件或目录
//is_uploaded_file(); 判断文件是否是通过HTTPPOST上传的
//move_uploaded_file(); 将上传文件移动到新位置

//时间函数
//time();返回当前unix时间截
//mktime();取得一个日期的unix时间截
//getdate(); 取得日期/时间信息
//checkdate(); //验证一个格里高日期
//date_default_timezone_set(); 设定用于一个脚本中所有日期时间函数的默认时区
//strtotime(); 将任何英文文本的日期时间描述解析为unix时间截
//microtime(); 返回当前unix时间戳 戳和微秒数

//其他常用
//intval(); 获取变量整数值

//PDO类相关函数prepare() execute() fetch()
$driver = 'mysql';
$database = 'dbname=mydb';
$dsn = "$driver:host=localhost;unix_socket=/home/cg/mysql/mysql.sock;$database";

$username = 'root';
$password = 'root';

try{
	$conn = new PDO($dsn, $username, $password);
	echo "<h2>Database CODingground Connected</h2>";
}catch($PDOException $e){
	echo "<h1>" . $e->getMessage() . "</h1>";
}

$sql = 'SELECT * FROM users';
$stmt = $conn->prepare($sql);
$stmt->execute();
echo "<table style='width:100%'>";
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	echo "<tr>";
	foreach($row as $value)
	{
		echo sprintf("<td>%s</td>", $value);
	}
	echo "</tr>";
}
echo "</table>";

//正则表达式
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
