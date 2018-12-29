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
    private $id;

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDes()
    {
        return $this->des;
    }

    /**
     * @return mixed
     */
    public function getImgPath()
    {
        return $this->img_path;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
    private  $des;
    private  $img_path;
    private  $price;
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


    public function create($model, $des, $img_path, $brand_id,$price)
    {
        $this->model = $model;
        $this->des = $des;
        $this->img_path = $img_path;
        $this->brand_id = $brand_id;
        $this->price = $price;
    }
    public function save(){
        $conn=new configration();
        $sql="INSERT INTO cars (model, des, img_path, brand_id,price) VALUES ('".$this->model."','".$this->des."', '".$this->img_path."', '".$this->brand_id."', '".$this->price."')";
        if ($conn->conn->query($sql))
            return true;
        else
            return false;
    }

    public function delete($id){
        $this->id=$id;
        $conn=new configration();
        $sql="DELETE FROM cars WHERE id = '".$this->id."'";
        if ($conn->conn->query($sql))
            return true;
        else
            return false;
    }

    public function read_by_id($id){
        $this->id=$id;
        $conn = new configration();
        $sql = "SELECT * FROM cars where id = '".$id."' limit 1";
        $query=$conn->conn->query($sql);
        $fetch=mysqli_fetch_array($query);
        $this->model=$fetch['model'];
        $this->img_path=$fetch['img_path'];
        $this->price=$fetch['price'];
        $this->brand_id=$fetch['brand_id'];
        $this->des=$fetch['des'];

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

    public static function numOfrows(){
        $conn = new configration();
        $sql="SELECT * FROM cars";
        $result=$conn->conn->query($sql);
        return mysqli_num_rows($result);
    }

}