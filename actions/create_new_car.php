
<?php
require_once("../classes/Car.php");


if (isset($_GET['delete'])) {
    $car = new Car();
    if ($car->delete($_GET['delete'])) {
        header('Location: ' . '../ui-images.php');
        die();
    } else {
        echo 'something wrong';
    }
}

$car=new Car();
/************************************UPLOAD******************************************************/
$name = $_FILES['file']['name'];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
if( in_array($imageFileType,$extensions_arr) ){
    // Upload file
    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
}
/************************************UPLOAD******************************************************/

$car->create($_POST['model'],$_POST['desc'],$name,$_POST['brand'],$_POST['price']);
if ($car->save()){
    header('Location: '.'../index.php');
    die();
}
else
    echo "something wrong";
?>