<?php
$student = array(
    1 => array(
        "Name" => "Hung",
        "Email" => "Hung@ggggg",
        "Grade" => "A",
        "Gender" => "Male"
    ),
    2 => array(
        "Name" => "Manh",
        "Email" => "Manh@ggggg",
        "Grade" => "B",
        "Gender" => "Male"
    ),
    3 => array(
        "Name" => "Huan",
        "Email" => "Huan@ggggg",
        "Grade" => "E",
        "Gender" => "Female"
    ),
);
$total = count($student);
for($i = 0; $i < $total; $i++){
    $row = each($student);
    $val = $row['key'];
    echo "00$val";
    echo "<br>";
    $valcount = count($student[$val]);
    for($t = 0; $t < $valcount; $t++){
        $rec = each($student[$val]);
        echo "$rec[key] $rec[value]";
        echo "<br>";

    }
    echo "<br>";
}
?>