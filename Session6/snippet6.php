<?php
function decrement(){
    static $int1 = 99;
    $int1--;
    echo "The decrement valua is $int1";

}
decrement();
?>