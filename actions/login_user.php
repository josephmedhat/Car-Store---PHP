<?php
session_start();
/**
 * Created by PhpStorm.
 * User: bavlyadel
 * Date: 2018-12-25
 * Time: 10:44
 */


require_once ("../classes/User.php");

$user = new User("",md5($_POST['password']),$_POST['useremail'],"",0);
if($user->login()){
    header('Location: '.'../index.php');
    die();
}else{

    header('Location: '.'../pages-login.php');
$_SESSION['error']="Wrong Credentials";
    echo " something wrong";
}


?>