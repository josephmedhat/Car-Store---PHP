<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 12/25/2018
 * Time: 1:44 AM
 */
require_once("configration.php");
require_once("Brand.php");

class Car
{
    private $model;
    private  $des;
    private  $img_path;
    public  $brand_id;
    public  $cars;

    /**
     * Car constructor.
     */
    public function __construct()
    {
    }

    /**
     * Car constructor.
     * @param $model
     * @param $des
     * @param $img_path
     * @param $brand_id
     */


    public function create($model, $des, $img_path, $brand_id)
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

    public function read(){
        $conn = new configration();
        $sql = "SELECT * FROM cars";
        $this->cars=$conn->conn->query($sql);

    }

    public function getBrand($brandID){
        $conn = new configration();
        $sql="SELECT * FROM brand WHERE id =".$brandID;
        $brandName = $conn->conn->query($sql);
        return $brandName;

    }


}