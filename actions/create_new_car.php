
<?php
require_once("../config.php");
require_once("../classes/Car.php");
$car=new Car($_POST['model'],$_POST['desc'],"test",1);
if ($car->save()){
    header('Location: '.'../index.php');
    die();
}
else
    echo "something wrong";
?>