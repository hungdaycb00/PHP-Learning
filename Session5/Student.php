<?php
$object = new Student();
$object->name = "Manh";
$object->id = 123;
$object->email = "Concobay@gmail.com";
print_r($object); echo "<br>";
$object->save_user(); echo "<br>";
$object1 = clone $object;
$object1->name ="Hung";
echo $object1->name;
echo '<br>';
echo $object->name;
class Student{
    public $id, $name, $email;
    function save_user(){
        echo "Save user code goes here";
    }
}
?>
