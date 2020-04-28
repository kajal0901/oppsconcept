<?php

/**
 * static method directe related to class
 */

/**
 * Class StaticDemo
 */
class StaticDemo
{
    /**
     * @var int
     */
    public static $objectCount = 0;

    /**
     * demo constructor.
     */
    public function __construct()
    {
        self::$objectCount++;
    }

    /**
     * @return int
     */
    public static function getCount()
    {
        return self::$objectCount;
    }
}

$obj_one = new StaticDemo();
$obj_two = new StaticDemo();
$obj_three = new StaticDemo();

echo StaticDemo::getCount();