<?php
/**
 * php error display
 */
ini_set('display_errors', 1);

/**
 * Class Tv
 */
class Tv
{

    /**
     * @var
     */
    public $model;
    /**
     * @var
     */
    public $volume;

    /**
     * Tv constructor.
     *
     * @param string $m
     * @param int    $v
     */
    public function __construct(string $m, int $v)
    {
        $this->model = $m;
        $this->volume = $v;
    }

    /**
     * @return int
     */
    public function volumeUp()
    {
        return $this->volume++;
    }

    /**
     * @return int
     */
    public function volumeDown()
    {
        return $this->volume--;
    }
}

class TvWithTimer extends Tv
{
    /**
     * @var bool
     */
    public $timer = true;
}

/**
 * create a object of class
 */
$obj_one = new Tv('abc', 1);
$obj_one->volumeUp();

$obj_two = new TvWithTimer('xyz', 2);
echo $obj_two->timer;

