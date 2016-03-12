<?php 
include_once '../model/Posts.php'; 
include_once '../layouts/content/header.php';

$postObj = new Posts();
$post = $postObj->get($_GET['id'])->fetch_array(MYSQLI_ASSOC);
?>

<div class="container">
    <h2 id="bienvBlog">Bienvenido al blog de Swingcaló</h2>
    <div id="blog-content" class="twelve columns">
        <ul class="prepost">
            <li>
                <br/>
                <a href="http://<?php echo BASE_URL . $post['seo_title']; ?>/<?php echo $post['id_post']; ?>" class="title"><h3><?php echo $post["title"]; ?></h3></a>
                <p><?php echo $post["post"]; ?></p>
                <p>Escrito por <em><?php echo $post['login']; ?></em>, <?php echo date('d/m/Y',strtotime($post['date_creation'])); ?></p>
            </li>

<?php include_once '../layouts/content/barra-lateral.php';?>
<?php include_once '../layouts/common/footer.php';?>
