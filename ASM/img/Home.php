<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <style>
body{
    text-align: center;
        }
        li{
    margin: 10px;
            height: 300px;
            display: inline-table;
            text-align: center;
            background-color: #2a5d84;
        }
        img{
    width: 200px;
        }
    </style>
</head>
<body>
<h1>Apple Store</h1>
<h2>List Product</h2>

<ul>
    <?php
    $query = "select * from products;";
    $result = $conn->query($query);
    $rows = $result->num_rows;
    for ($i = 0; $i < $rows; $i++ ) {
        $row = $result->fetch_array(MYSQLI_NUM);
        $r0 = $row[0];
        $r1 = $row[1];
        $r2 = $row[2];
        $r3 = $row[3];
    }
    ?>
    <li><img src="img/iphoneX.png"><br><span>hello</span></li>
    <li><img src="img/iphoneX.png"></li>
    <li><img src="img/iphoneX.png"></li>
    <li><img src="img/iphoneX.png"></li>

</ul>
</body>
</html>
