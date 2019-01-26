<?php

class class1 {
    function test($var) {
        $result = $var + 2;
        return $result;
    }
}

class class2{
    var $ref_to_class=''; # to be pointer to other class

    function class1(&$ref){ #constructor
        $this->ref_to_class=$ref; #save ref to other class as property of this class
    }

    function test2($var){
        $val = $this->ref_to_class->test2($var); #call other class using ref
        return $val;
    }
}

$obj1=new class1;
# obj1 is instantiated.
$obj2=new class2($obj1);
# pass ref to obj1 when instantiating obj2

$var=5;
$result=$obj2->test2($var);
# call method in obj2, which calls method in obj1
echo ($result);

?>