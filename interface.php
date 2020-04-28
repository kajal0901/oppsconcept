<?php

/**
 * php error display
 */
ini_set('display_errors', 1);

/**
 * Interface Demo
 */
interface InterfaceDemo
{
    public function abc();

    public function xyz();
}

/**
 * Class Example
 */
class Test implements InterfaceDemo
{
    /**
     * @return string
     */
    public function abc()
    {

        return "abc function";
    }

    /**
     * @return string
     */
    public function xyz()
    {
        return "xyz function";
    }

}

$obj_one = new Test();
echo $obj_one->abc();