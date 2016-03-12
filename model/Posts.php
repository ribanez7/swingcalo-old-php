<?php
include 'Model.php';

class Posts extends Model 
{  
    private $_table;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->_table = 'posts';
    }
    public function getAll()
    {
        $sql = "SELECT 
                p.id as id_post, p.title, p.seo_title, p.post, p.date_creation, 
                u.id as id_user, u.login   
                FROM {$this->_table} as p
                JOIN users as u 
                ON p.id_user = u.id 
                ORDER BY id_post DESC";
                
        return $this->query($sql);
    }
    
    public function delete($id)
    {
        $sql = "DELETE FROM {$this->_table} WHERE id=$id";

        return $this->query($sql);
    }
    
    public function create($data)
    {                
        $sql = "INSERT INTO {$this->_table} (title, seo_title, post, id_user) VALUES (
            '{$data['title']}', 
            '{$data['seo_title']}', 
            '{$data['post']}', 
            1)";

        return $this->query($sql);
    }
    
    public function update($data)
    {
        $sql = "UPDATE {$this->_table} SET 
                title='{$data['title']}',
                seo_title='{$data['seo_title']}', 
                post='{$data['post']}' 
                WHERE id={$data['id']}";
                
        return $this->query($sql);
    }
    
    public function get($id)
    {
        $sql = "SELECT 
            p.id as id_post, p.title, p.seo_title, p.post, p.date_creation, 
            u.id as id_user, u.login   
            FROM {$this->_table} as p
            JOIN users as u 
            ON p.id_user = u.id 
            WHERE u.id = $id 
            ORDER BY id_post DESC";
                
        return $this->query($sql);
    }
}