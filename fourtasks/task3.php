<?php


class factorial {
    
    public function __construct($number)
    {
        $factor=1;
        for($i=$number;$i>0;$i--)
        {
            $factor*=$i;
        }
        echo $factor;
    }
    
}
  $f=new factorial(5);
?>