<?php
$object = new User();
print_r($object); echo "<br>";
$object ->name = "Hung";
$object ->password = "12356";
print_r($object);
echo '<br>';
$object->save_user();
class User{
    public $name, $password;
    function save_user(){
        echo "Save user code goes here";
    }
}
?>