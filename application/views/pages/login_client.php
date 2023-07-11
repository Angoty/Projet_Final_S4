<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/login.css')?>">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="md-col-12">
                <form action="<?php echo site_url('Login/check_login') ;?>" method="get">
                    <p>Votre email: <input type="text" class="form-control" name="email" value="angoty@gmail.com"></p>
                    <p>Votre mot de passe: <input type="password" class="form-control" name="mdp" value="angoty"></p>
                    <p><button type="submit" class="btn btn-outline-primary">Se connecter</button></p>  

                </form>
                <a href="<?php echo site_url('Inscription/')?>"><button class="btn btn-danger" type="submit">S'inscrire</button></a>
                <a href="<?php echo site_url('Login/show_admin')?>"><button class="btn btn-danger" type="submit">Administrateur</button></a>
                </div>
        </div>
    </div>
</body>
</html>



