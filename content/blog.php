<?php 

include_once '../model/Posts.php'; 

include_once '../layouts/content/header.php'; 

$postObj = new Posts();
$posts = $postObj->getAll(); ?>

<div class="container">
    <h2 id="bienvBlog">Bienvenido al blog de Swingcaló</h2>
    <div id="blog-content" class="twelve columns">
        <ul class="prepost">
         <?php 
         while ($row = mysqli_fetch_assoc($posts)) 
        { ?>            
            <li>
                <br/>
                <a href="http://<?php echo BASE_URL . $row['seo_title']; ?>/<?php echo $row['id_post']; ?>" class="title"><h3><?php echo $row["title"]; ?></h3></a>
                <p><?php echo substr($row["post"],0,500) . '...'; ?><a href="http://<?php echo BASE_URL . $row['seo_title']; ?>/<?php echo $row['id_post']; ?>" class="plus">+ leer más</a></p>
                <p>Escrito por <em><?php echo $row['login']; ?></em>, <?php echo date('d/m/Y',strtotime($row['date_creation'])); ?></p>
            </li>            
        <?php      
        } ?>

<?php include_once '../layouts/content/barra-lateral.php';?>   
<?php include_once '../layouts/common/footer.php'; ?>