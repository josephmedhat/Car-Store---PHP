<?php
/**
 * Created by PhpStorm.
 * User: bavlyadel
 * Date: 2018-12-25<<<<<<< bavly
 * Time: 07:27
 */

require_once ("../classes/User.php");

$user = new User($_POST['username'],md5($_POST['password']),$_POST['email'],$_POST['phone'],0);

if ($user->save()){
    session_start();
    session_r
    header('Location: '.'../index.php');
    die();
}
else
    echo "something wrong";



?>

