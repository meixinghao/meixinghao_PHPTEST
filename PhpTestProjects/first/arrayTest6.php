<html xmlns="http://www.w3.org/1999/html">
<?php
    //HTTP POST 变量 $_POST
?>
    <head><title>添加联系人</title></head>
    <body>
    <center>
        <form action="add.php" method="post">
            编号:<input type="text" name="id"/><br>
            姓名:<input type="text" name="name"/><br>
            公司:<input type="text" name="company"/><br>
            地址:<input type="text" name="address"/><br>
            电话:<input type="text" name="phone"/><br>
            EMAIL:<input type="text" name="email"/><br>
            <input type="submit" value="添加联系人"/>
        </form>
    </center>
    </body>
</html>