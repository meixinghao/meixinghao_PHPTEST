<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/29
 * Time: 11:44
 */

if (!(isset($_COOKIE['isLogin']) && $_COOKIE['isLogin'] == '1')) {
    header("Location:Cookie1.php");
    exit;
}
?>

<html>
<head><title>网站主页面</title></head>
<body>
<?php
echo '您好：' . $_COOKIE["username"];
?>

<a href="Cookie1.php?action=logout">退出</a>
</body>
</html>