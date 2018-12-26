<?php
/**
 * Created by PhpStorm.
 * User: bavlyadel
 * Date: 2018-12-25
 * Time: 08:22
 */

require_once ("../classes/Brand.php");
$brand = new Brand();
if ($brand->create($_POST['brand'])){
    header('Location: '.'../view_brand.php');
    die();
}else{
    echo 'something wrong';
}



?>