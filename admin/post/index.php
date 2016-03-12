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
$posts = $postsObj->getAll();

include_once '../../layouts/admin/header.php'; ?>

<div class="container" style="min-height: 400px;">
    <a href="create.php"><img src="../../public/img/newicon.png" width="32" height="32" alt="nuevo post" title="nuevo post" /> + Nuevo post</a>
<table>
   <caption>Contenidos</caption>
   <thead>
      <tr>
         <th>Título</th>
         <th>Post</th>
         <th>Acciones</th>
      </tr>
   </thead>
   <tbody>
       <?php
        while ($row = mysqli_fetch_assoc($posts)) 
        { ?>
            <tr>
                <td><?php echo $row["title"]; ?></td>
                <td><?php echo substr($row["post"],0,300) . '...'; ?></td> <!-- seleccionar sólo 300 caracteres -->
                <td><a href="update.php?id=<?php echo $row['id_post']; ?>"><img src="../../public/img/editicon.png" width="32" height="32" alt="editar" title="editar" /></a> | <a href="delete.php?id=<?php echo $row['id_post']; ?>"><img src="../../public/img/deleteicon.png" width="32" height="32" alt="eliminar" title="eliminar" /></a></td>
            </tr>
        <?php         
        } ?>
   </tbody>
</table>
</div>

<?php include_once '../../layouts/common/footer.php';