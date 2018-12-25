<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 12/25/2018
 * Time: 1:49 AM
 */
require_once ('../config.php');
require_once("configration.php");

class Brand
{
    private $name;

    /**
     * Brand constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    public function save(){
        $conn=new configration();
        $sql="INSERT INTO brand (name) VALUES ('".$this->name."')";
        if ($conn->conn->query($sql))
            return true;
        else
            return false;
    }


}