<?php
$int1 = 68;
$int2 = 2;
function division(){
    global $int1, $int2;
    $int3 = $int1/$int2;
    echo $int3;

}
division();
?>