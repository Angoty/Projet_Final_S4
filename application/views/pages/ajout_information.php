<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo site_url('Utilisateur/insert')?>" method="post">
        <p>Votre genre: <select name="genre" id="">
            <?php for($i=0; $i<count($genre); $i++){?>
                <option value="<?php echo $genre[$i]['idgenre'] ?>"><?php echo $genre[$i]['intitule'] ?></option>
            <?php } ?>
        </select></p>
        <p>Votre taille:<input type="number" name="taille" id=""></p>
        <p>Votre poids:<input type="number" name="poids" id=""></p>
    </form>
</body>
</html>