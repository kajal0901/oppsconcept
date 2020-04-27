<?php

class FileLogger implements LoggerInterface {

    /**
     * @param $message
     *
     * @return mixed|void
     */
    public function log($message)
    {
        echo "Logging message File: $message";
    }
}