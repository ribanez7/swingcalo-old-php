<?php session_start(); ?>
<?php

include_once '../../config.php';
include_once '../../model/Posts.php';

if(!isset($_SESSION['user']['login']))
{
    header('Location: http://' . BASE_URL . 'content/login.php');
    exit;
} 

if($_POST)
{    
    $postObj = new Posts();
    $result = $postObj->create($_POST);
    
    header('Location: http://' . BASE_URL . 'admin/post/index.php');
    exit;
} 

include_once '../../layouts/admin/header.php'; ?>

<div class="container" style="min-height:500px;">
    <form method="post" style="margin-top:3em;">
        <label for="title">Título</label>
        <input type="text" name="title" required style="width:70%;"/>
        <label for="seo_title">URL</label>
        <input type="text" name="seo_title" required style="width:70%;"/>
        <label for="content">Texto</label>
        <textarea name="post"></textarea>
        <input type="submit" formnovalidate="true" value="Publicar" />
    </form>
</div>

<?php include_once '../../layouts/common/footer.php';