<?php
$a[0] = "A";
$a[1] = "B";
$a[2] = "F";
$a[3] = "D";

rsort($a);
$count  = count($a);
$i = 0;
while ($i!=$count){

    $rec = each($a);
    echo "$rec[key]  $rec[value]";
    echo "<br>";
    $i++;
}
?>
