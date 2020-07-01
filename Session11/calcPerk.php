
<?php
$myname = $_GET['myname'];
$mygarde = $_GET['mygrade'];
echo "<br>";
if($myname == ""){
    echo "Please enter your name";
}
else{
    switch ($mygarde){
        case "":
            echo $myname;
            echo ", you did not enter your Grade!";
            break;
        case "A":
            echo "Facilities for $myname (Grade A)";
            echo "<br> <br>";
            echo "Increment = 30% of basic salary";
            echo "<br>";
            echo "Bonus = 20% of basic salary";
            echo "<br>";
            echo "Traveling allowance = $500";
            echo "<br>";
            echo "Medical allowane = $500;";
            echo "<br>";
            break;
    }
}
?>
<a href="calcPerk.html">Back</a>
