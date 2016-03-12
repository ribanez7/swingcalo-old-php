<?php session_start(); ?>
<?php

include_once '../../config.php';
include_once '../../model/Posts.php'; 

if(!isset($_SESSION['user']['login']))
{
    header('Location: http://' . BASE_URL . 'content/login.php');
    exit;
} 

$postObj = new Posts();

if($_POST)
{    
    $result = $postObj->update($_POST);
    
    header('Location: http://' . BASE_URL . 'admin/post/index.php');
    exit;
} 


$post = mysqli_fetch_assoc($postObj->get($_GET['id']));

include_once '../../layouts/admin/header.php'; ?>

<div class="container" style="min-height:500px;">
    <form method="post" style="margin-top:3em;">
        <label for="title">Título</label>
        <input type="text" name="title" value="<?php echo $post['title']; ?>" required style="width:70%;"/>
        <label for="seo_title">URL</label>
        <input type="text" name="seo_title" value="<?php echo $post['seo_title']; ?>" required style="width:70%;"/>
        <label for="content">Texto</label>
        <textarea name="post"><?php echo $post['post']; ?></textarea>
        <input type="hidden" name="id" value="<?php echo $post['id_post']; ?>" />
        <input type="submit" formnovalidate="true" value="Publicar" />
    </form>
</div>

<?php include_once '../../layouts/common/footer.php';