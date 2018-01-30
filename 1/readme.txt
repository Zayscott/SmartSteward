###################################################
############# Cap_private_zone v1.0 15/05/2004 ############
###################################################

INSTALLATION
----------------------------------------

1- Extraire le fichier .zip ou .tar.gz 
2- Executer le fichier sql.txt dans phpmyadmin ou en ligne de commande
3- Configurer le fichier login.php

4- Pour protéger une page ajouter tout en haut de la page :
	<?php
	session_start();
	
	if($_SESSION['log'] != true) {
		echo '<h1>Accès Interdit</h1>';
		exit;
	}
	?>
    
    
5- Pour se déconnecter le lien :
	<a href="login.php?logout=1">Log out</a>

NOTE
----------------------------------------
Les fichiers sont valid XHTML pour les développeurs en XHTML



CONTACT
----------------------------------------
En cas de soucis : k@capoune.net



http://www.capoune.net 2004-2005
