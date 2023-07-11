<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
      <h1> Tongasoa List Sport</h1>
      <table border="1">
            <tr>
                <th>Nom Sport</th>
                <th>Role</th>
                <th> Modifier </th>
                <th>Supprimer</th>
            </tr>
            <?php foreach ($sports as $sports) { ?>
                <tr>
                    <td><?php echo $sports['nomsport']; ?></td>
                    <td><?php echo $sports['intituleP']; ?></td>                   
                    <td> <a href="<?php echo base_url('Regime/modif_sport/'.$sports['idsport']); ?>">
                        Modifier
                    </a>
                    </td>
                    <td>
            <a href="<?php echo base_url('Regime/delete_sport/'.$sports['idsport']); ?>">
                Supprimer
            </a>
        </td>
                </tr>
            <?php } ?>
        </table>
        <a href="<?php echo site_url('Regime/ajout_sport')?>" class="">liens vers Ajout</a>
</body>
</html>