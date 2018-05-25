<?php
session_start()
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>page de connection</title>
		<link rel="stylesheet" href="style.css" />		
    </head>
 
    <body style="background-color: white;">
		
			<img src="data/img/header.png" class "conteneur"/>
		
        <p class = "blanc">
		<center>
		<img src="data/img/taper_mdp.png" class = "pc2" />
		</center>
		
        <form action="logger.php" method="post" class = "pic12">
     
			<center>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Valider" />
			</center>
            
        </form>
		</p>
        <?php
			$_SESSION['etat'] = "conecté";
		
		?>
    </body>
</html>