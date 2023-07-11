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
        <th>Numero de code</th>
        <th>Utilisateur</th>
        <th>Valeur</th>
        <tr>
            <?php for($i=0; $i<count($data); $i++){?>
                <td><?php echo $data['numero']?></td>    
                <td><?php echo $data['valeur']?></td>    
            <?php } ?>
        </tr>

    </table>
</body>
</html>