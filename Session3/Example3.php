
<?php

 echo strrev("con hello");

 $names = fixName("willHHHHam", "hnrry", "gates");
 echo $names[0] . " " . $names[1] . " " . $names[2];
 function fixName($n1, $n2, $n3){
     $n1 = ucfirst(strtolower($n1));
     $n2 = ucfirst(strtolower($n2));
     $n3 = ucfirst(strtolower($n3));
     return array($n1, $n2, $n3);
 }

?>