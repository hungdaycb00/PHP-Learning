<?php

$lang[]= "VB";
    $lang[]= "Java";
    $lang[]= "Perl";
    $lang[]= "PHP";
    $lang[]="VC++";
    $lang[]=".NET";
$count = count($lang);
for ($item = 0; $item < $count; $item++){
    $row = each($lang);
    echo "$row[key] $row[value]";
    echo "<br>";
}
?>