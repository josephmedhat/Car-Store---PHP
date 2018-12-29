<?php
/**
 * Created by PhpStorm.
 * User: bavlyadel
 * Date: 2018-12-25
 * Time: 08:22
 */

require_once ("../classes/Brand.php");
if (isset($_POST['create'])){
    $brand = new Brand();
    $brand->setName($_POST['brand']);
    if ($brand->create()){
        header('Location: '.'../view_brand.php');
        die();
    }else{
        echo 'something wrong';
    }
}elseif (isset($_POST['update'])){
    $brand = new Brand();
    $brand->setId($_POST['id']);
    $brand->setName($_POST['brand']);
    if ($brand->update()){
        Brand::$edit_state=false;
        header('Location: '.'../view_brand.php');
        die();
    }else{
        echo 'something wrong';
    }
}elseif (isset($_GET['delete'])) {
    $brand = new Brand();
    if ($brand->delete($_GET['delete'])) {
        header('Location: ' . '../view_brand.php');
        die();
    } else {
        echo 'something wrong';
    }
}