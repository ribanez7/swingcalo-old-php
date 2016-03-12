<?php session_start(); ?>
<?php 

include_once '../config.php';
include_once '../model/Users.php';

if(!isset($_SESSION['user']['login']))
{
    header('Location: http://' . BASE_URL . 'content/login.php');
    exit;
}

$userObj = new Users();

if($userObj->logout())
{
    header('Location: http://' . BASE_URL);
}
else
{
    echo 'ERROR';
}
exit;