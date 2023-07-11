<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Proposition</title>
</head>
<body>
    <h1>Detail Proposition</h1>

    <?php if (!empty($details)) { ?>
        <h2>Le nom du régime est : <?php echo $details[0]['nomregime']; ?></h2>
        <h2>Le choix de régime est : <?php echo $details[0]['intituleP']; ?></h2>
        <h2>Sport : <?php echo $details[0]['nomsport']; ?></h2>
        <br>

        <table border="1">
            <tr>
                <th>Jour</th>
                <th>Moment</th>
                <th>Plat</th>
            </tr>
            <?php foreach ($details as $detail) { ?>
                <tr>
                    <td><?php echo $detail['intituleJ']; ?></td>
                    <td><?php echo $detail['intituleM']; ?></td>
                    <td><?php echo $detail['nomplat']; ?></td>                   
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <p>Aucun détail de proposition trouvé.</p>
    <?php } ?>
        
        
        <br>  
    <form method="POST" action="<?php echo base_url('admin/update_propositionJ1'); ?>">
    <h1>Modifier Jour 1</h1>
    <br>
    <label for="idplat">Plat petit-dejeuner:</label>
    <select id="idplat" name="idplat" required>
        <option value="">Sélectionnez un plat</option>
        <?php foreach ($plats as $plat) { ?>
            <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
        <?php } ?>
    </select>
    <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
    <input type="submit" value="Enregistrer">
</form>
        <br>    
        <form method="POST" action="<?php echo base_url('admin/update_propositionJ1'); ?>">
        <label for="idplat">Plat du déjeuner:</label>
                        <select id="idplat" name="idplat" required>
                            <option value="">Sélectionnez un plat</option>
                            <?php foreach ($plats as $plat) { ?>
                                <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
                        <input type="submit" value="Enregistrer">
    </form>
        <br>    
        <form method="POST" action="<?php echo base_url('admin/update_propositionJ1'); ?>">
        <label for="idplat">Plat diner :</label>
                        <select id="idplat" name="idplat" required>
                            <option value="">Sélectionnez un plat</option>
                            <?php foreach ($plats as $plat) { ?>
                                <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
                        <input type="submit" value="Enregistrer">
    </form>
    <br>  
    <form method="POST" action="<?php echo base_url('admin/update_propositionJ2'); ?>">
    <h1>Modifier Jour 2</h1>
    <br>
    <label for="idplat">Plat petit-dejeuner:</label>
    <select id="idplat" name="idplat" required>
        <option value="">Sélectionnez un plat</option>
        <?php foreach ($plats as $plat) { ?>
            <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
        <?php } ?>
    </select>
    <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
    <input type="submit" value="Enregistrer">
</form>
        <br>    
        <form method="POST" action="<?php echo base_url('admin/update_propositionJ2'); ?>">
        <label for="idplat">Plat du déjeuner:</label>
                        <select id="idplat" name="idplat" required>
                            <option value="">Sélectionnez un plat</option>
                            <?php foreach ($plats as $plat) { ?>
                                <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
                        <input type="submit" value="Enregistrer">
    </form>
        <br>    
        <form method="POST" action="<?php echo base_url('admin/update_propositionJ2'); ?>">
        <label for="idplat">Plat diner :</label>
                        <select id="idplat" name="idplat" required>
                            <option value="">Sélectionnez un plat</option>
                            <?php foreach ($plats as $plat) { ?>
                                <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
                        <input type="submit" value="Enregistrer">
    </form>
    <br>  
    <form method="POST" action="<?php echo base_url('admin/update_propositionJ3'); ?>">
    <h1>Modifier Jour 3</h1>
    <br>
    <label for="idplat">Plat petit-dejeuner:</label>
    <select id="idplat" name="idplat" required>
        <option value="">Sélectionnez un plat</option>
        <?php foreach ($plats as $plat) { ?>
            <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
        <?php } ?>
    </select>
    <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
    <input type="submit" value="Enregistrer">
</form>
        <br>    
        <form method="POST" action="<?php echo base_url('admin/update_propositionJ3'); ?>">
        <label for="idplat">Plat du déjeuner:</label>
                        <select id="idplat" name="idplat" required>
                            <option value="">Sélectionnez un plat</option>
                            <?php foreach ($plats as $plat) { ?>
                                <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
                        <input type="submit" value="Enregistrer">
    </form>
        <br>    
        <form method="POST" action="<?php echo base_url('admin/update_propositionJ3'); ?>">
        <label for="idplat">Plat diner :</label>
                        <select id="idplat" name="idplat" required>
                            <option value="">Sélectionnez un plat</option>
                            <?php foreach ($plats as $plat) { ?>
                                <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
                        <input type="submit" value="Enregistrer">
    </form>
    <br>  
    <form method="POST" action="<?php echo base_url('admin/update_propositionJ4'); ?>">
    <h1>Modifier Jour 4</h1>
    <br>
    <label for="idplat">Plat petit-dejeuner:</label>
    <select id="idplat" name="idplat" required>
        <option value="">Sélectionnez un plat</option>
        <?php foreach ($plats as $plat) { ?>
            <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
        <?php } ?>
    </select>
    <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
    <input type="submit" value="Enregistrer">
</form>
        <br>    
        <form method="POST" action="<?php echo base_url('admin/update_propositionJ4'); ?>">
        <label for="idplat">Plat du déjeuner:</label>
                        <select id="idplat" name="idplat" required>
                            <option value="">Sélectionnez un plat</option>
                            <?php foreach ($plats as $plat) { ?>
                                <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
                        <input type="submit" value="Enregistrer">
    </form>
        <br>    
        <form method="POST" action="<?php echo base_url('admin/update_propositionJ4'); ?>">
        <label for="idplat">Plat diner :</label>
                        <select id="idplat" name="idplat" required>
                            <option value="">Sélectionnez un plat</option>
                            <?php foreach ($plats as $plat) { ?>
                                <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
                        <input type="submit" value="Enregistrer">
    </form>
    <br>  
    <form method="POST" action="<?php echo base_url('admin/update_propositionJ5'); ?>">
    <h1>Modifier Jour 5</h1>
    <br>
    <label for="idplat">Plat petit-dejeuner:</label>
    <select id="idplat" name="idplat" required>
        <option value="">Sélectionnez un plat</option>
        <?php foreach ($plats as $plat) { ?>
            <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
        <?php } ?>
    </select>
    <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
    <input type="submit" value="Enregistrer">
</form>
        <br>    
        <form method="POST" action="<?php echo base_url('admin/update_propositionJ5'); ?>">
        <label for="idplat">Plat du déjeuner:</label>
                        <select id="idplat" name="idplat" required>
                            <option value="">Sélectionnez un plat</option>
                            <?php foreach ($plats as $plat) { ?>
                                <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
                        <input type="submit" value="Enregistrer">
    </form>
        <br>    
        <form method="POST" action="<?php echo base_url('admin/update_propositionJ5'); ?>">
        <label for="idplat">Plat diner :</label>
                        <select id="idplat" name="idplat" required>
                            <option value="">Sélectionnez un plat</option>
                            <?php foreach ($plats as $plat) { ?>
                                <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
                        <input type="submit" value="Enregistrer">
    </form>
    <br>  
    <form method="POST" action="<?php echo base_url('admin/update_propositionJ6'); ?>">
    <h1>Modifier Jour 6</h1>
    <br>
    <label for="idplat">Plat petit-dejeuner:</label>
    <select id="idplat" name="idplat" required>
        <option value="">Sélectionnez un plat</option>
        <?php foreach ($plats as $plat) { ?>
            <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
        <?php } ?>
    </select>
    <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
    <input type="submit" value="Enregistrer">
</form>
        <br>    
        <form method="POST" action="<?php echo base_url('admin/update_propositionJ7'); ?>">
        <label for="idplat">Plat du déjeuner:</label>
                        <select id="idplat" name="idplat" required>
                            <option value="">Sélectionnez un plat</option>
                            <?php foreach ($plats as $plat) { ?>
                                <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
                        <input type="submit" value="Enregistrer">
    </form>
        <br>    
        <form method="POST" action="<?php echo base_url('admin/update_propositionJ6'); ?>">
        <label for="idplat">Plat diner :</label>
                        <select id="idplat" name="idplat" required>
                            <option value="">Sélectionnez un plat</option>
                            <?php foreach ($plats as $plat) { ?>
                                <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
                        <input type="submit" value="Enregistrer">
    </form>
    <br>  
    <form method="POST" action="<?php echo base_url('admin/update_propositionJ1'); ?>">
    <h1>Modifier Jour 7</h1>
    <br>
    <label for="idplat">Plat petit-dejeuner:</label>
    <select id="idplat" name="idplat" required>
        <option value="">Sélectionnez un plat</option>
        <?php foreach ($plats as $plat) { ?>
            <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
        <?php } ?>
    </select>
    <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
    <input type="submit" value="Enregistrer">
</form>
        <br>    
        <form method="POST" action="<?php echo base_url('admin/update_propositionJ7'); ?>">
        <label for="idplat">Plat du déjeuner:</label>
                        <select id="idplat" name="idplat" required>
                            <option value="">Sélectionnez un plat</option>
                            <?php foreach ($plats as $plat) { ?>
                                <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
                        <input type="submit" value="Enregistrer">
    </form>
        <br>    
        <form method="POST" action="<?php echo base_url('admin/update_propositionJ7'); ?>">
        <label for="idplat">Plat diner :</label>
                        <select id="idplat" name="idplat" required>
                            <option value="">Sélectionnez un plat</option>
                            <?php foreach ($plats as $plat) { ?>
                                <option value="<?php echo $plat['idplat']; ?>"><?php echo $plat['nomplat']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="idregime" value="<?php echo $idregime; ?>">
                        <input type="submit" value="Enregistrer">
    </form>       



</body>
</html>
