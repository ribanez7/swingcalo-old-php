<?php session_start(); ?>
<?php

include_once '../config.php';
include_once '../model/Users.php';

if($_POST)
{    
    $userObj = new Users();
    
    $userExists = $userObj->authenticate($_POST['login'], md5($_POST['password']));
    
    if($userExists)
    {
        header('Location: http://' . BASE_URL . 'admin/post/index.php');
        exit;
    }
    else
    {
        $errorMsg = 'Datos incorrectos. Por favor, revisa tu login o contraseña.';
    }    
}

include_once '../layouts/content/header.php'; 

if(isset($errorMsg)) { ?>
    <h2 class="error container"><?php echo $errorMsg; ?></h2>
<?php
} ?>
    <div class="container" style="min-height: 300px;">
        <form name="login" action="login.php" method="post" class="five columns offset-by-six" style="padding-top:20px;">
            <input type="text" name="login" placeholder="Login" />
            <input type="password" name="password" placeholder="Contrasenya" />
            <input type="submit" value="Entrar">
        </form>
    </div>

<?php include_once '../layouts/common/footer.php'; ?>