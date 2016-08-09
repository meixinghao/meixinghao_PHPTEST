<?php

//属性

class PropertyTest
{
    private $data = array();

    public $declared = 1;

    private $hidden = 2;

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.

        echo "Setting '$name' to '$value' \n";
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        echo "Getting '$name' \n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error('Undefined property via __get():' . $name . 'in' . $trace[0]['file'] .
            'in' . $trace[0]['line'], E_USER_NOTICE);
        return null;
    }

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
        echo "Is '$name' set?\n";
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        echo "Unsetting '$name'\n";
        unset($this->data[$name]);
    }

    public function getHidden()
    {
        return $this->hidden;
    }

}

echo "<pre>\n";

$obj = new PropertyTest;

$obj->a = 1;
echo $obj->a . "\n\n";

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo "\n";

echo $obj->declared . "\n\n";