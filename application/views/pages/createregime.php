<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer Proposition</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Créer Proposition</h1>
    <form method="POST" action="<?php echo base_url('Admin/create_proposition'); ?>">
    <label for="idregime">Régime :</label>
    <select id="idregime" name="idregime" required>
        <option value="">Sélectionnez un régime</option>
        <?php foreach ($regimes as $regime) { ?>
            <script>alert(<?php $regime ?>)</script>
            <option value="<?php echo $regime['idregime']; ?>"><?php echo $regime['nomregime']; ?></option>
        <?php } ?>
    </select>
    <br><br>
    <label for="idplat">Plat :</label>
    <select id="idplat" name="idplat" required>
        <option value="">Sélectionnez un plat</option>
        <?php foreach ($plats as $plat) { ?>
            <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
        <?php } ?>
    </select>
    <br><br>
    <label for="idjour">Jour :</label>
    <select id="idjour" name="idjour" required>
        <option value="">Sélectionnez un jour</option>
        <?php foreach ($jours as $jour) { ?>
            <option value="<?php echo $jour['idjour']; ?>"><?php echo $jour['intituleJ']; ?></option>
        <?php } ?>
    </select>
    <br><br>
    <label for="idpoids">Poids :</label>
    <select id="idpoids" name="idpoids" required>
        <option value="">Sélectionnez un poids</option>
        <?php foreach ($poids as $poid) { ?>
            <option value="<?php echo $poid['idpoids']; ?>"><?php echo $poid['poidsFin']; ?></option>
        <?php } ?>
    </select>
    <br><br>
    <label for="idsport">Sport :</label>
    <select id="idsport" name="idsport" required>
        <option value="">Sélectionnez un sport</option>
        <?php foreach ($sports as $sport) { ?>
            <option value="<?php echo $sport['idsport']; ?>"><?php echo $sport['nomsport']; ?></option>
        <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Enregistrer">
</form>
</body>
</html>
