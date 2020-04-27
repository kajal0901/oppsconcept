<?php
/**
 * Opps concept
 *
 */
class tv{

    public $model;
    public $volume;

    public function VolumeUp(){
          $this->volume++;
    }

    public function VolumeDown(){
         $this->volume--;
    }

    /**
     * tv constructor.
     *
     * @param $m
     * @param $v
     */
    public function __construct($m,$v)
    {
        $this->model=$m;
        $this->volume=$v;
    }
}

/**
 * create a object of class
 */
$obj_one = new tv('abc',1);
$obj_one->VolumeUp();

$obj_two = new tv('xyz',2);
$obj_two->model;
$obj_two->VolumeDown();
