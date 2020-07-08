<?php
$country = array(
    "USA" => array(
        "capital" => "US Dollar"),
    "England" => array(
        "Capital" => "London",
        "Currency" => "Pound Sterling"),
    "Australia" => array(
        "Capital" => "Canberra",
        "Currency" => "Australian Dollar"),
    "New Zealand" => array(
        "Capital" => "Wellington",
        "Currency" => "NZ Dollar"));
echo $country['Australia']['Capital'];

?>