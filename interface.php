<?php

/**
 * php error display
 */
ini_set('display_errors', 1);

interface Demo{
    public function abc();
    public function xyz();
}


class Example implements demo{
    /**
     * @return string
     */
    public function abc()
    {
        // TODO: Implement abc() method.
        return "abc function";
    }

    public function xyz()
   {
       // TODO: Implement xyz() method.
       return "xyz function";
   }

}

$obj_one = new Example();
echo $obj_one->abc();