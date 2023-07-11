<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <th>Numero</th>
        <th>Valeur</th>
        <?php for($i=0; $i<count($data); $i++){?>
            <tr>
                <td><?php echo $data[$i]['numero'] ?></td>
                <td><?php echo $data[$i]['valeur'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <form action="<?php echo site_url('Code/PostValidation')?>" method="post">
        <p><input type="text" name="numero" id="" placeholder="Numero"></p>
        <p><a href="<?php echo site_url('Code/PostValidation')?>"><button type="submit">Valider</button></a></p>
    </form>
</body>
</html>