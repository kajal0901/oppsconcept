<?php
/**
 * Opps concept
 *
 */
ini_set('display_errors', 1);
class tv{

    /**
     * @var
     */
    public $model;
    /**
     * @var
     */
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

class TvWithTimer extends tv{
    /**
     * @var bool
     */
    public $timer = true;
}

/**
 * create a object of class
 */
$obj_one = new tv('abc',1);
$obj_one->VolumeUp();

$obj_two = new TvWithTimer('xyz',2);
echo $obj_two->timer;

