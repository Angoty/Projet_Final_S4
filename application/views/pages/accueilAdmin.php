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
                </tr>
            <?php } ?>
    </table>
</body>
</html>