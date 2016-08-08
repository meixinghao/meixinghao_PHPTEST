<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/17
 * Time: 15:14
 */


    class Person{
        var $name;
        function say($x){
            echo "Doing foo.";
            echo $x;
           // echo "$name";

        }
    }
    $p = new Person();
    $p->name = "Tom";
    $p->say(100);
?>