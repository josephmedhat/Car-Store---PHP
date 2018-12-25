<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 12/25/2018
 * Time: 2:12 AM
 */

class configration
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "it";


// Create connection
public $conn;

    /**
     * configration constructor.
     * @param mysqli $conn
     */
    public function __construct()
    {
        $this->conn = mysqli_connect($this ->servername, $this->username, $this->password, $this ->database);
    }

// Check connection
}