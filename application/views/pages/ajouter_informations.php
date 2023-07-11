<form action="<?php echo site_url('Utilisateur/insert') ?>" method="post">
    <select name="idgenre" id="">
        <?php for($i=0; $i<count($result); $i++){ ?>
            <option value="<?php echo $result['idgenre'] ?>"><?php echo $result['intitule'] ?></option>
        <?php } ?>
    </select>
    <p>Votre taille:<input type="number" name="taille" id=""></p>
    <p>Votre poids:<input type="number" name="poids" id=""></p>
    <p>Objectifs :
        <select name="choix" id="">
            <option value="1"> Perdre du poids</option>
            <option value="2"> Gagner du poids</option>
        </select>
    </p>
    <input type="submit" value="Ajouter">
</form>
<form action="<?php echo site_url('Utilisateur/get_proposition') ?>" method="post">

<input type="submit" value="generer">
</form>