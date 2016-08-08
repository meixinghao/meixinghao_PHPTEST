<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/28
 * Time: 17:22
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
$id = 4;
$name = "梅兴昊";
$query = "INSERT INTO userinfo (id, name) VALUES (:id, :name)";
$query1 = "INSERT INTO userinfo (id, name) VALUES (?, ?)";
$query2 = "delete from userinfo WHERE  id = ?";
$query3 = "update userinfo set name = ? where id = ?";
$stmt1 = $dbconn->prepare($query1);
$stmt = $dbconn->prepare($query);
$stmt2 = $dbconn->prepare($query2);
$stmt3 = $dbconn->prepare($query3);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':name', $name);
$stmt1->bindParam(1, $id, PDO::PARAM_INT);
$stmt1->bindParam(2, $name, PDO::PARAM_STR);
$stmt1->execute();
$stmt->execute();
$stmt->execute(array(":id" => 5, ":name" => "梅兴昊"));
$stmt1->execute(array(6, "中国"));
$stmt2->execute(array(2));
$stmt3->execute(array("路飞", 4));

