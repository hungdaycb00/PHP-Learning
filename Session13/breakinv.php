<?php
$number = $_GET['num'];
if($number ==0){
    exit;
}
$ans = 1/$number;
echo "<br>1/$number";
echo "<br>$ans";
echo "<br><br><a href='break.html'>Go Back</a>";
?>