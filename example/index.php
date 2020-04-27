<?php


/**
 * @param $class
 */
function __autoload($class)
{
    include_once "classes/$class.php";
}

function getLogger($type)
{
    switch ($type)
    {
        case 'file':
        return new FileLogger();
        break;
        case 'database':
        return  new Logger();
    }
}

$logger = getLogger('database');

$profile = new UserProfile($logger);

$profile->createUser();
