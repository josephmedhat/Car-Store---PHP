<?php
/**
 * Created by PhpStorm.
 * User: bavlyadel
 * Date: 2018-12-25
 * Time: 10:44
 */
session_start();

require_once ("../classes/User.php");

if(isset($_SESSION['user_name'])){
    unset($_SESSION['user_name']);
    unset($_SESSION['is_admin']);
}

header('Location: '.'../index.php');
die();

?>