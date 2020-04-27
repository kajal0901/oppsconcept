<?php
/**
 * static method directe related to class
 */
class demo{
    /**
     * @var int
     */
    public  static $objectCount = 0;

    /**
     * @return int
     */
    public static function getCount()
    {
       return  self::$objectCount;
    }

    /**
     * demo constructor.
     */
    public function __construct()
    {
        self::$objectCount++;
    }
}

$obj_one = new demo();
$obj_two = new demo();
$obj_three = new demo();

echo demo::getCount();