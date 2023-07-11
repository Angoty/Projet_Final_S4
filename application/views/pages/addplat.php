<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h3>Ajouter plat</h3>
    <form method="POST" action="<?php echo base_url('admin/insert_plat'); ?>">
        <label for="nomplat">Nom du Plat:</label>
        <input type="text" id="nomplat" name="nomplat" required>
        <br><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea>
        <br><br>
        <label for="idchoix">Role du menu :</label>
    
        <select id="idchoix" name="idchoix" required>
    <option value="">Sélectionnez un choix</option>
    <option value="1">Réduit le poids</option>
    <option value="2">Augmenter le poids</option>
    <!-- Ajoutez d'autres options selon vos besoins -->
    </select>
<br><br>

    <label for="idmoment">Moment :</label>
    <select id="idmoment" name="idmoment" required>
    <option value="">Sélectionnez un moment</option>
    <option value="1">Petit Dejeuner</option>
    <option value="2">Déjeuner</option>
    <option value="3">Diner</option>
    
    
    <!-- Ajoutez d'autres options selon vos besoins -->
    </select>
<br><br>

        <input type="submit" value="Ajouter">
    </form>
</body>
</html>