<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
      <h1> Proposition de régime </h1>
      <table class="" border="1">
        <tr>
            <?php for($i=0; $i<count($propositions); $i++){ ?>
                <td>
                <?php echo $propositions[$i]['nomregime']; ?>
                    
                </td>
                <td>
                    <a href="<?php echo base_url('Regime/detail_proposition/'.$propositions[$i]['idregime']); ?>">
                        Voir détails Régime
                    </a>
                </td>
                <td>
                    <a href="<?php echo base_url('Regime/delete_regime/'.$propositions[$i]['idregime']); ?>">
                     Supprimer
                    </a>
                </td>
            <?php } ?>
        </tr>
    </table>
<br>
<br>
<a href="<?php echo site_url('Regime/addregime')?>" class="">liens vers Ajout Nom régime</a>
</body>
</html>