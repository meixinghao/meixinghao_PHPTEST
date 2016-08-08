<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/31
 * Time: 17:05
 */

class Person
{
    static $person_name;
    var $person_age;

    protected function say($work)
    {
        echo "我是一个$work\n";
        echo "我的名字是" . self::$person_name . "\n";
        echo "我的年龄是" . $this->person_age . "\n";
    }

}

class Student extends Person
{

    public function StudentSay()
    {
        parent::$person_name = '梅兴昊';
        $this->person_age = 11;
        $this->say('学生');
    }
}

$Student = new Student();
$Student->StudentSay();
echo person::$person_name . PHP_EOL;
$person = new Person();