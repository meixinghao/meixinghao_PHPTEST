<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/28
 * Time: 21:53
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

echo '<table border="1" align="center" width="90%">';
echo '<caption><h1>联系人信息</h1></caption>';
echo '<tr bgcolor="#ff7f50">';
echo '<th>ID</th><th>姓名</th></tr>';

$stmt = $dbconn->prepare("select id, name from userinfo");
$stmt->execute();
$allRows = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
print_r($stmt->fetchAll(PDO::FETCH_NUM));
print_r($stmt->fetchAll(PDO::FETCH_BOTH));
print_r($stmt->fetchAll(PDO::FETCH_OBJ));
print_r($stmt->fetchAll(PDO::FETCH_BOUND));
print_r($stmt->fetchAll(PDO::FETCH_LAZY));

foreach ($allRows as $row) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['name'] . '</td>';
    echo '</tr>';
}

echo '</table>';
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_COLUMN, 1);
echo '信息';
print_r($row);