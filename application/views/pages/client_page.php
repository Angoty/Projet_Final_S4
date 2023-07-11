<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <p>Bienvenue</p>
    <p><a href="<?php echo site_url('Utilisateur/')?>">Liste des codes</a></p>
    <p><a href="<?php echo site_url('Utilisateur/quit')?>" class="nav-item nav-link">Deconnexion</a></p>
    <p><a href="<?php echo site_url('Utilisateur/IMC')?>" class="nav-item nav-link">liens vers IMC</a></p>
    <p><a href="<?php echo site_url('Utilisateur/insert_informations')?>" class="nav-item nav-link">Ajout information</a></p>
</body>
</html>
