<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
      <h1> Tongasoa ajout Sport</h1>
      <form method="POST" action="<?php echo base_url('Regime/insert_sport'); ?>">
        <label for="nomsport">Nom du Sport:</label>
        <input type="text" id="nomsport" name="nomsport" required>
        <br><br>
        <label for="idchoix">Role du Sport:</label>
    
        <select id="idchoix" name="idchoix" required>
    <option value="">Sélectionnez un choix</option>
    <option value="1">Réduit le poids</option>
    <option value="2">Augmenter le poids</option>

<br><br>

        <input type="submit" value="Ajouter">
    </form>
</body>
</html>