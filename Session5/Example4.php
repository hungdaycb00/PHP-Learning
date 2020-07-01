<?php
$object = new Dad();
$object->test();
$object1 = new Son();
$object1->test2();
class Dad{
    function test()
    {
        echo "[Class Dad] I am your Father<br>";
    }
    function Hello(){
        echo "Hello motherfk";
    }
}

class Son extends Dad{
    function test()
    {
        echo "[Class Son] I am Luke<br>";
    }
    function test2(){
        parent::test();
        parent::Hello();
    }
}
?>