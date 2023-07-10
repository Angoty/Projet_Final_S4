<!DOCTYPE html>
<html>
    <head>
        <title> Login</title>
        <meta charset="UTF-8"> 
	</head>
	<body>
        <form action="<?php echo site_url('Login/check_logAdmin') ;?>" method="get">
            <p>Votre email: <input type="text" class="form-control" name="email" value="<?php echo $admin['email']; ?>"></p>
            <p>Votre mot de passe: <input type="password" class="form-control" name="mdp" value="<?php echo $admin['mdp']; ?>"></p>
            <p><button type="submit" class="btn btn-outline-primary">Se connecter</button></p>                
         </form>
</body>
</html>



