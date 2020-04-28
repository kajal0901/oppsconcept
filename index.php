<?php

/**
 * php error display
 */
ini_set('display_errors', 1);

class TvDemo
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
     * tv constructor.
     *
     * @param $m
     * @param $v
     */
    public function __construct(string $m, int $v)
    {
        $this->model = $m;
        $this->volume = $v;
    }

    /*
     *
     */
    public function volumeUp()
    {
        $this->volume++;
    }

    /**
     *
     */
    public function volumeDown()
    {
        $this->volume--;
    }
}

/**
 * create a object of class
 */
$obj_one = new TvDemo('abc', 1);
$obj_one->volumeUp();

$obj_two = new TvDemo('xyz', 2);
$obj_two->model;
$obj_two->volumeDown();
