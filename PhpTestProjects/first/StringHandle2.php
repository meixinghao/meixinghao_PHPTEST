


<html>
    <body>
        <?php
        //htmlspecialchars()把一些预定义的字符串转换为html实体
            $str = "<B>WebServer:</B> & 'Linux' & 'Apache'";
            echo $str . "<br>";
            echo "<br>\n";
            echo htmlspecialchars($str) . "<br>";        //只转换双引号而保留单引号
            echo "<br>\n";
            echo htmlspecialchars($str, ENT_COMPAT) . "<br>";        //只转换双引号而保留单引号
            echo "<br>\n";
            echo htmlspecialchars($str, ENT_QUOTES) . "<br>";        //同时转换这两种引号
            echo "<br>\n";
            echo htmlspecialchars($str, ENT_NOQUOTES) . "<br>";        //不对引号进行转换

            $str1 = "一个 'quote' 是 <b>bold</b>";
            echo htmlentities($str1);
            echo htmlentities($str1, ENT_QUOTES, gb2312);
        ?>
    </body>
</html>