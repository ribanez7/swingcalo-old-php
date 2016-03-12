<?php

include 'DBConnection.php';

class Model 
{ 
    protected $_mysqli;
    
     
    public function __construct() 
    {
 
        $this->_mysqli = DBConnection::getInstance()->getHandler();
 
    }
 
    public function query($sql) 
    { 
 
        return $this->_mysqli->query($sql); 
 
    }
 
    public function getMySQLi() 
    { 
 
        return $this->_mysqli; 
 
    }
 
}