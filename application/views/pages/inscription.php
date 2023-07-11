<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <form action="<?php echo site_url('Inscription/save') ;?>" method="post" enctype="multipart/form-data">
            <p>Votre nom: <input type="text" class="form-control"name="nom"></p>
            <p>Votre prenom: <input type="text" class="form-control" name="prenom"></p>
            <p>Votre email: <input type="email" class="form-control" name="email"></p>
            <p>Votre mot de passe: <input type="password" class="form-control"name="mdp"></p>
            <input type="file" name="file" id="">
            <p><button type="submit" class="btn btn-outline-primary">S'inscrire</button></p>
        </form>
</body>
</html>

            



