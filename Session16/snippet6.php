<?php
$employee = array(
    "Employee 1" => array(
        1 => "$100",
        2 => "$120",
        3 => "$130",
        4 => "$140",
        5 => "$150",
    ),
    "Employee 2" => array(
        1 => "$100",
        2 => "$220",
        3 => "$230",
        4 => "$240",
        5 => "$250",
    ),
    "Employee 3" => array(
    1 => "$300",
    2 => "$420",
    3 => "$330",
    4 => "$540",
    5 => "$650"));
echo "The commossion is: ";
echo $employee['Employee 2'][5];
?>