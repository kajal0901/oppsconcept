<?php

class Logger implements LoggerInterface {

    /**
     * @param $message
     *
     * @return mixed|void
     */
    public function log($message)
    {
        echo "Logging message DB: $message";
    }
}