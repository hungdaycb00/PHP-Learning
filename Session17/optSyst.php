<?php
$ITdept = array(0 => "Testing", 1 => "Training");
$Salesdept = array(0 => "Advertising", 1=> "Marketing");
$no_ofelement = count($ITdept);
$no_ofelement1 = count($Salesdept);
for ($i = 0; $i < $no_ofelement; $i++){
    $rec = each($ITdept);
    $rec1 = each($Salesdept);
    echo "$rec[key] $rec[value] ";
    echo "<br> ";
    echo "$rec1[key] $rec1[value]";
    echo "<br> ";
}
$Admindept = array_merge($ITdept, $Salesdept);
$no_ofelement1 = count($Admindept);
for ($i = 0; $i < $no_ofelement1; $i++){
    $rec = each($Admindept);

    echo "$rec[key] $rec[value] ";
    echo "<br> ";

}
?>