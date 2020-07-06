<?php
$counter = 0;
echo "The even numbers are: <br>";
do{
    echo "$counter<br>";
    $counter = $counter + 2;
}
while($number <= 10);
echo "<br>The loop ends because the condition is satisfied.";
?>