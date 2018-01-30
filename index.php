<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="SmartStewardGlobalInfo.css">
            <title>SMART STEWARD</title>
        <link rel="icon" type="image/png" href="15058540_1151471951595870_452330315_n.jpg" />
    </head>
    <body>
        <?php
	           session_start();
        if (isset($_SESSION['log'])){
                }
                else{
                    $_SESSION['log'] = false ;
                }
        ?>
        <h1></h1>
		<div id="conteneur">
		    <div class="element">
		    	<h1>SMART STEWARD</h1>
                <h3>Web Administration System</h3> 

            </div>
            <?php
                if($_SESSION['log'] != true) {
		    	echo('<div class="element"> <img id="id-photo" src = "https://paiement-web.com/images/profil-logo.png"  WIDTH=140 HEIGHT=140/>');
                    }
            else{
              echo('<div class="element"> <img id="id-photo" src = "https://scontent-cdg2-1.xx.fbcdn.net/v/t31.0-8/11950176_10153520063027416_4261972761855255562_o.jpg?oh=6b81e827a86729eb00285ded800b1709&oe=58AFDA09"  WIDTH=140 HEIGHT=140/>');  
            }
            ?>
		    
            </div>
	    	<div class="element">
               <?php

                if($_SESSION['log'] != true) {

	           echo('<form action="login.php" method="post">
                    <p>Login :<br />
                        <input type="text" name="login" /></p>
                    <p>Password :<br />
                        <input type="text" name="pass" />
                        <input type="submit" value="Valider" /></p>');
                
                        }
                else{
                    
                    echo('<h1>Welcom Home</h1>');
                    echo('<a href="logout.php">Log out</a>');
                    
                    
                }
                 ?>
            </div>
		</div>
       
		<br>
		<div id = "conteneur1">
			<div class="element1">
				<ol id = "list">   
					<a href = "./SmartStewardGlobalInfo.html"><div id = "liste3"><li classe="liste_2">Global Info</li></div></a>
                    <a href = "./SSTemperature.html"><div id = "liste3"><li classe="liste_2">Temperature</li></div></a>
                    <a href = "./SSHumidity.html"><div id = "liste3"><li classe="liste_2">Humidity</li></div></a>
                    <a href = "./SSLight.html"><div id = "liste3"><li classe="liste_2">Light</li></div></a>
                    <a href = "./SSEnergy.html"><div id = "liste3"><li classe="liste_2">Energy</li></div></a>
                    <a href = "./SSInfo.html"><div id = "liste3"><li classe="liste_2">Sys Information</li></div></a>
				</ol>
			</div>
			<div class="element1">
				<div id = "global-conteneur"><br><h3>Global Info</h3>
				</div>
				<div id = "sous-conteneur1">
					<div class="element-sous-conteneur"><img class = "maison" src = "smart home.jpg"/></div>
					<div class="element-sous-conteneur"><img class = "maison" src = "smart home.jpg"/></div>
					<div class="element-sous-conteneur"><img class = "maison" src = "smart home.jpg"/></div>
				</div>
				<br>
				<div id = "sous-conteneur2">
					<div class="element-sous-conteneur"><img class = "maison" src = "smart home.jpg"/></div>
					<div class="element-sous-conteneur"><img class = "maison" src = "smart home.jpg"/></div>
					<div class="element-sous-conteneur"><img class = "maison" src = "smart home.jpg"/></div>
				</div>	
			</div>
		</div>
		<footer>
            <p>Copyright - Tous droits réservés<br />

            <a href="#">Contact US</a></p>

        </footer>
	</body>
</html>