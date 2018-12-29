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
    private $id;
    public $brands;

    public static $edit_state=false;

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
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





    /**
     * Brand constructor.
     * @param $name
     */

    public function __construct()
    {

    }


    public function create(){
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
    public function read_by_id($id){
        $this->id=$id;
        $conn = new configration();
        $sql = "SELECT name FROM brand where id = '".$id."' limit 1";
        $query=$conn->conn->query($sql);
        $fetch=mysqli_fetch_array($query);
        $this->name=$fetch['name'];

    }

    public static function numOfrows(){
        $conn = new configration();
        $sql="SELECT * FROM brand";
        $result=$conn->conn->query($sql);
        return mysqli_num_rows($result);
    }

    public function update(){
        $conn=new configration();
        $sql="UPDATE brand SET name = '".$this->name."' WHERE id = '".$this->id."'";
        if ($conn->conn->query($sql))
            return true;
        else
            return false;
    }

    public function delete($id){
        $this->id=$id;
        $conn=new configration();
        $sql="DELETE FROM brand WHERE id = '".$this->id."'";
        if ($conn->conn->query($sql))
            return true;
        else
            return false;
    }




}