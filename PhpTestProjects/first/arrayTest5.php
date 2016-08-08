

<html>
    <body>
        <?php
        //URL GET 变量： $_GET 获取到客户端通过url的get方式传来的参数
        //print_r($_GET);
            echo '参数action为：'.$_GET["action"].'<br>';
            echo '参数为user：'.$_GET["user"].'<br>';
            echo '参数为tid：'.$_GET["tid"].'<br>';
            echo '参数为page：'.$_GET["page"].'<br>';
            echo '<pre>';
            print_r($_GET);
            echo '</pre>';
        ?>
    </body>
</html>