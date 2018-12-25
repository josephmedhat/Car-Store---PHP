<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 12/25/2018
 * Time: 1:16 AM
 */
require_once("../config.php");

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
        if ($conn->query($sql))
            return true;
        else
            return false;
    }

}