<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="<?php echo site_url('Login/check_login') ;?>" method="get">
        <p>Votre email: <input type="text" class="form-control" name="email"></p>
        <p>Votre mot de passe: <input type="password" class="form-control" name="mdp"></p>
        <p><button type="submit" class="btn btn-outline-primary">Se connecter</button></p>            
        </form>
        <a href="<?php echo site_url('Inscription')?>">S'inscrire</a>
        <a href="<?php echo site_url('Login/show_admin')?>">Se connecter en tant qu'admin</a>
</body>
</html>



