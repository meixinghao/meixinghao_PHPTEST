<html>

<body>

<div align="center">

    test for postgres

    <br>

    <?php

    $opt = array(PDO::ATTR_PERSISTENT => true);
    var_dump($opt);

    //$dbconn = pg_connect("host=localhost port=5432 dbname=yipai_development user=postgres password=apple");

    try {
        $dbconn = new PDO('pgsql:host=localhost; dbname=yipai_development', 'meixinghao', 'apple');
    } catch (PDOException $exception) {
        echo "error:" . $exception->getMessage();
    }


    if ($dbconn) {

        echo "the database is connected";

    } else {

        echo "the databse isn't connected";

    }

    $query = "INSERT INTO userinfo (id, name) VALUES (2, '习近平')";
    //$result = pg_query($query) or die('Query failed:'.pg_last_error());
    //$stmt = $dbconn->prepare($query);
    $stmt1 = $dbconn->query("select id, name from userinfo");
    echo "一共" . $stmt1->rowCount();
    // $stmt->execute();
    echo $dbconn->exec($query) . "sssssssssssss";
    //$stmt1->execute();
    $allValues = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    print_r($allValues);
    echo "<br>PDO是否关闭自动提交功能：" . $dbconn->getAttribute(PDO::ATTR_AUTOCOMMIT);
    echo "<br>当前PDO的错误处理模式：" . $dbconn->getAttribute(PDO::ATTR_ERRMODE);
    echo "<br>表字段字符的大小写转换" . $dbconn->getAttribute(PDO::ATTR_CASE);
    echo "<br>与连接状态相关的特有信息：" . $dbconn->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    echo "<br>空字符串转换为sql的null" . $dbconn->getAttribute(PDO::ATTR_ORACLE_NULLS);
    echo "<br>应用程序提前获取数据大小：" . $dbconn->getAttribute(PDO::ATTR_PERSISTENT);
    echo "<br>与数据库特有的服务器信息：" . $dbconn->getAttribute(PDO::ATTR_SERVER_INFO);
    echo "<br>数据库服务器版本信息：" . $dbconn->getAttribute(PDO::ATTR_SERVER_VERSION);
    echo "<br>数据库客户端版本号信息" . $dbconn->getAttribute(PDO::ATTR_CLIENT_VERSION);
    /* while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)){
         foreach($line as $value){
             echo $value;
         }
     }

     pg_free_result($result); //释放结果集
     pg_close($dbconn);       //关闭连接*/
    ?>


</div>

</body>

<html>