<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/29
 * Time: 11:02
 * Cookie使用示例
 */

function clear(){
    setcookie('username', '', time()-3600);
    setcookie('isLogin', '', time()-3600);
}

if($_GET["action"]=="login"){
    clear();
    if($_POST["username"]=="admin" && $_POST["password"]=="123456"){
        setcookie('username',$_POST["username"],time()+60*60*24*7);
        setcookie('isLogin','1',time()+60*60*24*7);
        header("Location:Cookie2.php");
    }else{
        echo("用户名密码错误");
    }
}elseif($_GET["action"]=="logout"){
    clear();
}
?>
<html>
<head><title>用户登录</title></head>
<body>
<h2>用户登录</h2>
<form action="Cookie1.php?action=login" method="post">
    用户名 <input type="text" name="username"/><br>
    密码 <input type="password" name="password"/><br>
    <input type="submit" value="登录"/>
</form>
</body>
</html>