<?php
$lang = array(1=>"VB", 2=>"Java", 3=>"PHP", 4=>"Delphi");
$total = count($lang);
echo "Original array:";
echo "<br>";
for ($i = 0; $i< $total; $i++){
    $rec = each($lang);
    echo "$rec[key] $rec[value]";
    echo "<br>";
}
echo "<br>";
sort($lang);
$total = count($lang);
echo "Original array:";
echo "<br>";
for ($i = 0; $i< $total; $i++){
    $rec = each($lang);
    echo "$rec[key] $rec[value]";
    echo "<br>";
}
?>