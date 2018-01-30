<?php
session_start();

if($_SESSION['log'] != true) {
	echo '<h1>Accès Interdit</h1>';
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
<title>Cap Private Zone - Capoune.net</title>
<style type="text/css">
body {
    margin: 0px;
    padding: 0px;
    font-family: Verdana;
    font-size:12px;
}
#zone {
    margin-left: 10px;
    width: 600px;
}
</style>
</head>
<body>
<div id="zone">
<h2>Zone privée !</h2>
Salut <?php print $_SESSION['pseudo']; ?>
<br /><br />
Rempli ce formulaire pour ajouter un compte :
<form action="login.php?ajout=1" method="post">
Login :<br />
<input type="text" name="login" /><br />
Pass :<br />
<input type="text" name="pass" />
<input type="submit" />
</form>
<br /><br />
<a href="login.php?logout=1">Log out</a>
</div>
</body>
</html>
<!-- Cap_private_zone v1.0 15/05/2004 - Capoune.net -->