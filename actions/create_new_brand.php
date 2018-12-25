<?php
/**
 * Created by PhpStorm.
 * User: bavlyadel
 * Date: 2018-12-25
 * Time: 08:22
 */

require_once ("../classes/Brand.php");
$brand = new Brand($_POST['brand']);
if ($brand->save()){
    header('Location: '.'../index.php');
    die();
}else{
    echo 'something wrong';
}


?>