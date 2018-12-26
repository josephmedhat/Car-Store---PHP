<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 12/25/2018
 * Time: 1:49 AM
 */
require_once("configration.php");

class Brand
{
    private $name;
    public $brands;

    /**
     * Brand constructor.
     * @param $name
     */

    public function __construct()
    {

    }


    public function create($name){
        $this->name=$name;
        $conn=new configration();
        $sql="INSERT INTO brand (name) VALUES ('".$this->name."')";
        if ($conn->conn->query($sql))
            return true;
        else
            return false;
    }

    public function read(){
        $conn = new configration();
        $sql = "SELECT * FROM brand";
        $this->brands=$conn->conn->query($sql);


    }




}