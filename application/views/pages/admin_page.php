<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h3>Administrateur</h3>
    <a href="<?php echo site_url('Admin/quit')?>" class="nav-item nav-link">Deconnexion</a>
    <table>
        <th></th>
        <th></th>
            <?php for($i=0; $i<count($codes); $i++){ ?>
                <tr>
                    <td><?php echo $codes[$i]['numero']?></td>
                    <td><?php echo $codes[$i]['valeur']?></td>
                </tr>
            <?php } ?>
    </table>
    <a href="<?php echo site_url('Admin/stat')?>">Statistique</a>
    <a href="<?php echo site_url('Admin/table')?>">Tableau de bord</a>
    <a href="<?php echo site_url('Regime/list_proposition')?>" class="">Liste des REGIMES</a><br>
    <a href="<?php echo site_url('Regime/add_plat')?>" class="">liens vers ajout PLAT</a><br>
    <a href="<?php echo site_url('Regime/list_sport')?>" class="">liens vers SPORT</a><br>

</body>
</html>