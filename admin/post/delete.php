<?php session_start(); ?>
<?php

include_once '../../config.php';
include_once '../../model/Posts.php'; 

if(!isset($_SESSION['user']['login']))
{
    header('Location: http://' . BASE_URL . 'content/login.php');
    exit;
} 

$postsObj = new Posts();
$result = $postsObj->delete($_GET['id']);

header('Location: http://' . BASE_URL . 'admin/post/index.php'); 
exit;