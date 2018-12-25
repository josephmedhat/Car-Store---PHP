<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 12/25/2018
 * Time: 1:49 AM
 */
require_once ('../config.php');
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


}