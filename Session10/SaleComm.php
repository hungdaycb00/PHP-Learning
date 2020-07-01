<?php
$a = $_GET['sal'];
echo "Total Sales: $";
echo $a;
echo "<br>";
if($a > 50000){
    $comm = $a * .10;
    echo "Commission: $$comm";
    echo "<br>";
}
else if($a >20000 and $a <= 50000){
    $comm = $a *.07;
    echo "Commission: $$comm";
    echo "<br>";
}
else if($a < 20000){
    $comm = $a * .05;
    echo "Commission $$comm" . "<br>";

}
?>