<?php
$obj = new class{
    public $greetig = "hello";
    public $Id = 754;
    const SETT = 'some configuration';
    public function getValue(){
        return "some returned value";
    }
    public function getValueWithArg($str1){
        return 'Returned value is ' . $str1;
    }
};
echo '<br>';
echo $obj ->greetig;
echo '<br>';
echo $obj ->Id;
echo '<br>';
echo $obj::SETT;
echo '<br>';
echo $obj->getValue();
echo '<br>';
echo $obj->getValueWithArg('Aptech');
echo '<br>';
echo '<br>';
?>