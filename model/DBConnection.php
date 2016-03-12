<?php
 
class DBConnection 
{
 
    private static $instance;
 
    private $_mysqli;   
    
    private function __construct()
    {
 
        $this->_mysqli = new MySQLI(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
 
        $this->_mysqli->set_charset("utf8");
 
    } 
 
    public static function getInstance()
    {
        if (!self::$instance instanceof self) self::$instance = new self;
 
        return self::$instance;
    } 
 
    public function getHandler() 
    {
 
        return $this->_mysqli;
 
    }
 
}