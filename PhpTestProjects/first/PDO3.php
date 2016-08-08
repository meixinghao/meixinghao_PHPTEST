<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/29
 * Time: 09:45
 */
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

$stmt = $dbconn->query("select id, name from userinfo");


echo '<table border="1" align="center" width="90%">';
echo '<caption><h1>联系人信息</h1></caption>';
echo '<tr bgcolor="#ff7f50">';
echo '<th>ID</th><th>姓名</th></tr>';
while (list($id, $name) = $stmt->fetch(PDO::FETCH_NUM)) {
    echo '<tr>';
    echo '<td>' . $id . '</td>';
    echo '<td>' . $name . '</td>';
    echo '</tr>';
}
print_r($stmt->fetch(PDO::FETCH_ASSOC));
print_r($stmt->fetch(PDO::FETCH_NUM));
print_r($stmt->fetch(PDO::FETCH_BOTH));
print_r($stmt->fetch(PDO::FETCH_OBJ));
print_r($stmt->fetch(PDO::FETCH_BOUND));
print_r($stmt->fetch(PDO::FETCH_LAZY));
echo
'</table>';
