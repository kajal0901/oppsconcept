<?php

interface LoggerInterface
{

    /**
     * @param $message
     *
     * @return mixed
     */
    public function log($message);
}