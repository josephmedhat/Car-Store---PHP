<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 12/25/2018
 * Time: 1:16 AM
 */
require_once("../config.php");
require_once("configration.php");


class User
{

    private $name;
    private $password;
    private $email;
    private $phone;
    private $is_admin=0;

    /**
     * User constructor.
     * @param $name
     * @param $password
     * @param $email
     * @param $phone
     * @param $is_admin
     */
    public function __construct($name, $password, $email, $phone, $is_admin=0)
    {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->phone = $phone;
        $this->is_admin = $is_admin;
    }

    public function save(){
        $conn=new configration();

        $sql="INSERT INTO users (user_name, email, phone, password,is_admin) VALUES ('".$this->name."','".$this->email."', '".$this->phone."', '".$this->password."','".$this->is_admin."')";
        if ($conn->conn->query($sql))
            return true;
        else
            return false;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function login(){
        $conn = new configration();

        $sql = "SELECT * FROM users where email = '".$this->email."' AND password = '".$this->password."' limit 1";

        $result=$conn->conn->query($sql);

        if($result){
            if ($result->num_rows==1){

                return true;
            }else{
                return false;
            }

        }else{
            return false;
        }
    }

}