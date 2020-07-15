<?php
require_once 'conn.php';
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
            color: #ddf1f6;
            font-size: 16pt;
        }
        img{
            width: 200px;
            height:200px;
        }
        a{
            color: whitesmoke;
            font-size:22pt;
        }


    </style>
</head>
<body>
<h1>Mobile Store</h1>
<h2>List Product</h2>

<ul>
    <?php
    $query = "Select * from products;";
    $result = $conn->query($query);
    $rows = $result->num_rows;
    for($i = 0; $i< $rows; $i++){
        $row = $result->fetch_array(MYSQLI_NUM);
        echo "<li><img src='img/$row[4]'><br><a href='#'><span>$row[1]</span></a><br><span>Price $row[2]$$$</span><br><span>$row[3]</span></li>";
    }
    ?>

</ul>
</body>
</html>
