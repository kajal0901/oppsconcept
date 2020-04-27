<?php
/**
 * php error display
 */
ini_set('display_errors', 1);
abstract class demo{
    public abstract function test();
}

class Example extends demo{
    public function test()
    {
        // TODO: Implement test() method.
        echo "hello world";
    }
}


$obj_example = new Example();
$obj_example->test();