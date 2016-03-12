<?php

include 'Model.php';

class Users extends Model 
{   
    private $_table;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->_table = 'users';
    }
    
    public function authenticate($login, $pwd)
    {        
        $sql = "SELECT * FROM {$this->_table} WHERE login = '$login' AND pwd = '$pwd'";        
        
        $resultSet = $this->query($sql);
        
        if((bool)$resultSet->num_rows)
        {
            $_SESSION['user']['login'] = $login;
            
            return true;
        }
        else
        {
            return false;
        }
            
    }
    
    public function getByLogin($login)
    {

    }
    
    public function logout()
    {
        return session_destroy();
    }
}
