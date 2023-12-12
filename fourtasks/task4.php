<?php

class test {
    public function __construct()
    {
        $a=array(11, -2, 4, 35, 0, 8, -9);
        sort($a);
        print_r($a);
    }
}
$t=new test();

?>