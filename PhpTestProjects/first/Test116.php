<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/8/3
 * Time: 15:25
 * 随机生成1万个0-9，计算每个数字出现的概率
 */

function RandomTest()
{
    $array = array();

    for ($i = 0; $i < 10000; $i++) {
        $num = rand(0, 9);
        $array[$i] = $num;
    }
    foreach (array_count_values($array) as $key => $value) {
        echo $key . "出现的概率：" . ($value / 10000) * 100 . "%" . PHP_EOL;
    }
}

//RandomTest();

function StringTest()
{
    $str = "Test String";
    $str1 = "Bill &amp; &#039;Steve&#039;";
    $str2 = "This is some <b>bold</b> text.";
    echo "返回在指定的字符串前添加反斜杠的字符串" . addcslashes($str, 'e') . PHP_EOL;
    echo "" . addslashes($str) . PHP_EOL;
    echo "bin2hex() 函数把 ASCII 字符的字符串转换为十六进制值。字符串可通过使用 pack() 函数再转换回去" . bin2hex($str) . PHP_EOL;
    //echo pack(bin2hex($str));
    echo "删除字符串右侧的空白字符或其他字符:" . chop($str, 'ng') . "\n";
    echo "chr() 函数从指定的 ASCII 值返回字符" . chr(0x61) . PHP_EOL;
    echo "chunk_split() 函数把字符串分割为一连串更小的部分。" . chunk_split($str, 2, ".") . PHP_EOL;
    echo "convert_cyr_string() 函数把字符串由一种 Cyrillic 字符集转换成另一种。" . convert_cyr_string($str, 'w', 'm');
    echo "convert_uuencode() 函数使用 uuencode 算法对字符串进行编码" . convert_uuencode($str);
    echo "convert_uudecode()解码 uuencode 编码字符串。" . convert_uudecode(convert_uuencode($str));
    echo "count_chars()返回有关字符串中所用字符的信息。" . print_r(count_chars($str));
    echo "crc32()计算字符串的 32 位 CRC。" . crc32($str) . PHP_EOL;
    echo " crypt()单向的字符串加密法（hashing）。" . crypt($str) . PHP_EOL;
    print_r(explode(" ", $str));
    $file = fopen("info.txt", "w");
    echo "fprintf() 函数把格式化的字符串写入指定的输出流" . fprintf($file, "我是 %u ", $str) . PHP_EOL;
    echo "get_html_translation_table() 函数返回 htmlentities() 和 htmlspecialchars() 函数使用的翻译表。" . print_r(get_html_translation_table());
    echo "hebrev() 函数把希伯来文本从右至左的流转换为左至右的流。" . hebrev("? ???? ?????") . PHP_EOL;
    echo "hebrevc()函数把希伯来文本从右至左的流转换为左至右的流。同时，把新行（\n）转换为" . hebrevc("? ???? ?????\n? ???? ?????") . PHP_EOL;
    echo "hex2bin()把十六进制值的字符串转换为 ASCII 字符。" . hex2bin(bin2hex($str)) . PHP_EOL;
    echo "html_entity_decode() 把 HTML 实体转换为字符。" . html_entity_decode($str1, ENT_COMPAT) . PHP_EOL;
    echo "htmlspecialchars() 函数把预定义的字符转换为 HTML 实体。" . htmlspecialchars($str2) . PHP_EOL;
    echo "implode() 函数返回由数组元素组合成的字符串。" . print_r(implode(" ", array('hello', 'world', 'I', 'love', 'shanghai')));
    echo "join() 函数是 implode() 函数的别名。\n";
    echo "lcfirst() 	把字符串的首字符转换为小写。" . lcfirst($str) . "\n";
    echo "levenshtein()返回两个字符串之间的 Levenshtein 距离。" . levenshtein("Hello World", "ello Word") . PHP_EOL;
    echo "localeconv() 	返回本地数字及货币格式信息。" . print_r(localeconv()) . PHP_EOL;
    echo "ltrim() 函数移除字符串左侧的空白字符或其他预定义字符。" . ltrim($str, 'Te') . PHP_EOL;
    echo "md5()计算字符串的 MD5 散列。" . md5($str) . PHP_EOL;
    echo "计算文件的 MD5 散列。" . md5_file("info.txt") . PHP_EOL;
    echo "nl2br()在字符串中的每个新行之前插入 HTML 换行符。" . "One line . \n Another line." . PHP_EOL;
    echo "number_format() 	以千位分组来格式化数字。" . number_format("5000000", 2) . PHP_EOL;
    echo "printf() 输出格式化的字符串。" . printf("%s 你好", $str) . PHP_EOL;
    echo "rtrim() 	移除字符串右侧的空白字符或其他字符。" . rtrim($str, 'g') . PHP_EOL;
    echo "sprintf()把格式化的字符串写入变量中。" . $txt = sprintf("There are %u million cars in %s.", 3, 'wo') . PHP_EOL;
    echo "sscanf() 	根据指定的格式解析来自字符串的输入。" . $format = sscanf($str, "%s %s %s %d %s %d %s %s %c") . PHP_EOL;
    echo "str_replace() 	替换字符串中的一些字符（对大小写敏感）。" . str_replace("world", "shanghai", "Hello world") . PHP_EOL;
    echo "str_shuffle() 	随机地打乱字符串中的所有字符。" . str_shuffle("hello");
    echo "str_split() 	把字符串分割到数组中。" . print_r(str_split('hello'));
    echo "str_word_count() 	计算字符串中的单词数。" . str_word_count("hello world") . PHP_EOL;
    echo "strip_tags() 	剥去字符串中的 HTML 和 PHP 标签。" . strip_tags($str);
    echo "strlen 字符串长度" . strlen($str) . PHP_EOL;
    echo "strrev() 	反转字符串。" . strrev($str) . PHP_EOL;
    echo "strtolower() 	把字符串转换为小写字母" . strtolower($str) . PHP_EOL;
    echo "strtoupper() 	把字符串转换为大写字母。" . strtoupper($str) . PHP_EOL;
    echo "strtr() 函数转换字符串中特定的字符。" . strtr("hello world", array("hello" => "hi", "world" => "earth")) . PHP_EOL;
    echo "substr() 	返回字符串的一部分。" . substr("hello world", 6, 2) . PHP_EOL;
    echo "substr_count() 	计算子串在字符串中出现的次数。" . substr_count("hhhh", "h") .PHP_EOL;
    echo "substr_replace() 	把字符串的一部分替换为另一个字符串" . substr_replace("hello world", "earth", 0, 3) . PHP_EOL;
    echo "trim() 	移除字符串两侧的空白字符和其他字符" . trim("hello world", "d") . PHP_EOL;
    echo "ucfirst() 	把字符串中的首字符转换为大写。" . ucfirst("hello world") . PHP_EOL;
    echo "ucwords() 	把字符串中每个单词的首字符转换为大写。" . ucwords("hello world") . PHP_EOL;
    echo "wordwrap() 	打断字符串为指定数量的字串" . wordwrap($str, 1) . PHP_EOL;
    echo "is_nan — 判断是否为合法数值" . var_dump(is_nan(acos(8)));
    echo "is_callable — 检测参数是否为合法的可调用结构 " . var_dump(is_callable($str));
    echo "is_writable — 判断给定的文件名是否可写" . var_dump(is_writable("info.txt"));
    echo "is_executable — 判断给定文件名是否可执行" . var_dump(is_executable("info.txt"));
    echo "is_file — 判断给定文件名是否为一个正常的文件" . var_dump(is_file("info.txt"));
    echo "is_array — 检测变量是否是数组" . var_dump(is_array($str));
    echo "is_integer — is_int() 的别名" . var_dump(is_integer(2));
    echo "is_string — 检测变量是否是字符串" . var_dump(is_string("hello"));
    echo "is_resource — 检测变量是否为资源类型 " . var_dump(is_resource("info.txt"));
    echo "is_real — is_float() 的别名" . var_dump(is_real(12.99));
    echo "is_scalar — 检测变量是否是一个标量 " . var_dump(is_scalar($str));
    echo "is_int — 检测变量是否是整数" . var_dump(is_int(23));
    echo "is_bool — 检测变量是否是布尔型 " . var_dump(is_bool(true));
    echo "is_double — is_float() 的别名\n";
    //echo "is_subclass_of — 如果此对象是该类的子类，则返回 TRUE" . is_subclass_of(object $object , string $class_name);
    echo "is_infinite — 判断是否为无限值" . var_dump(is_infinite(10/3));
    echo "is_null — 检测变量是否为 NULL" . var_dump(is_null(""));
    echo "is_readable — 判断给定文件名是否可读" . var_dump(is_readable("info.txt"));
    echo "is_writeable — is_writable() 的别名" . var_dump(is_writable("info.txt"));
    echo "is_long — is_int() 的别名" . var_dump(is_long(23));
    echo "is_uploaded_file — 判断文件是否是通过 HTTP POST 上传的" . var_dump(is_uploaded_file("info.txt"));
    echo "is_dir — 判断给定文件名是否是一个目录" . var_dump(is_dir("first"));
    echo "is_link — 判断给定文件名是否为一个符号连接" . var_dump(is_link($str));
    echo "is_numeric — 检测变量是否为数字或数字字符串 " . var_dump(is_numeric(23));
    echo "is_finite — 判断是否为有限值" . var_dump(is_finite(10/3));
    echo "is_float — 检测变量是否是浮点型" . var_dump(is_float(12.334));
    echo "is_object — 检测变量是否是一个对象" .var_dump(is_object($str));
    //echo "iis_get_server_rights — Gets server rights" .var_dump;
}

StringTest();