<?php
function test1(int $x){
    echo 'integer $x = ' . $x;
}
function test2(float $x){
    echo 'float $x = ' . $x;

}
function test3(bool $a){
    echo $a;
}
function test4(string $a){
    echo $a;
}

test1(12012.2); echo '<br>';
test2(true);echo '<br>';
test3(12.09);echo '<br>';
test4(12); echo '<br>';
test1(true);echo '<br>';
?>
