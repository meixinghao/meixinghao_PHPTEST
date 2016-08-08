<?php

class objectToArray
{
    public $a = 1;
    public $b = 2;
    public $c = 3;
    public $d = 4;
    public $e = 5;
    private $g = 6;

    public function test(){
        echo "hello world";
    }

    public function noneMethod($arg){
        print_r($arg);
    }

    public function __set($name, $value){
        $this->$name = $value;
    }

    public function __get($name){
        return $this->$name;
    }
}

$object_to_array = new objectToArray();

print_r($object_to_array);
print_r((array)$object_to_array);
var_dump($object_to_array);

//$str = serialize($object_to_array);
//echo $str;

//print_r(unserialize($str));

$a_to_object = (object)$object_to_array->a;
//echo serialize($a_to_object);
//echo $object_to_array->f;
$object_to_array->g = 100;
//echo $object_to_array->g;
//$object_to_array->h = 1000;
//echo $object_to_array->h;
//echo serialize($object_to_array);
$object_to_array->test1(1, 2, 3);