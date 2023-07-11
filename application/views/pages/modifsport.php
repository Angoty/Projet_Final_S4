<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification du sport</title>
</head>
<body>
    <h1>Modification du sport</h1>
    
    <form action="<?php echo site_url('admin/update_sport/'.$sport['idsport']); ?>" method="post">
        <label for="nomsport">Nom du sport:</label>
        <input type="text" id="nomsport" name="nomsport" value="<?php echo $sport['nomsport']; ?>" required>
        <br><br>
        <label for="idchoix">Role du Sport:</label>
    
    <select id="idchoix" name="idchoix" required>
    <option value="">Sélectionnez un choix</option>
    <option value="1">Réduit le poids</option>
    <option value="2">Augmenter le poids</option>
        <!-- Ajoutez d'autres champs de formulaire selon vos besoins -->
        
        <input type="submit" value="Modifier">
    </form>
</body>
</html>
