<?php
/**
 * php error display
 */
ini_set('display_errors', 1);

/**
 * Class Demo
 */
abstract class Demo
{
    public abstract function test();
}

/**
 * Class Example
 */
class Example extends Demo
{
    /**
     * @return string
     */
    public function test()
    {
        return "hello world";
    }
}


$obj_example = new Example();
$obj_example->test();