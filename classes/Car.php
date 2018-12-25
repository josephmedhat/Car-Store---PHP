<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 12/25/2018
 * Time: 1:44 AM
 */
require_once("../config.php");
require_once("configration.php");

class Car
{
    private $model;
    private  $des;
    private  $img_path;
    private  $brand_id;

    /**
     * Car constructor.
     * @param $model
     * @param $des
     * @param $img_path
     * @param $brand_id
     */
    public function __construct($model, $des, $img_path, $brand_id)
    {
        $this->model = $model;
        $this->des = $des;
        $this->img_path = $img_path;
        $this->brand_id = $brand_id;
    }
    public function save(){
        $conn=new configration();
        $sql="INSERT INTO cars (model, des, img_path, brand_id) VALUES ('".$this->model."','".$this->des."', '".$this->img_path."', '".$this->brand_id."')";
        if ($conn->conn->query($sql))
            return true;
        else
            return false;
    }


}