<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de Régime</title>
</head>
<body>
    <h1>Ajout de Régime</h1>
    <form method="POST" action="<?php echo base_url('admin/insert_regime'); ?>">
        <label for="nomregime">Nom du Régime :</label>
        <input type="text" id="nomregime" name="nomregime" required>
        <br><br>
        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix" required>
        <br><br>
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html> 
