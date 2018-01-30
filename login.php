<?php
session_start();

/// CONFIGURATION DE LA BASE DE DONNEE ET DE LA REDIRECTION
define('SQL_SERVER','localhost');
define('SQL_USER','root');
define('SQL_PASS','');
define('SQL_BDD','domisep');
$private_zone = 'index.php' ;

$db_link = mysqli_connect(SQL_SERVER,SQL_USER,SQL_PASS,SQL_BDD);


$login = $_POST['login'] ;
$pass_nocrypt = $_POST['pass'];


if(isset($_GET['ajout']) and strlen($_GET['ajout']) and is_numeric($_GET['ajout'])) {
	if(isset($_POST['login']) and isset($_POST['pass'])) {
		$sql = "insert into users (USER_LASTNAME,USER_PASSWORD) values ('".$login."','".$pass_nocrypt."')";
		mysqli_query($db_link,$sql);
		header("location: ".$private_zone);
	}
	else {
		die('<b>Erreur</b>');
	}
}

if(isset($_GET['logout']) and strlen($_GET['logout']) and is_numeric($_GET['logout'])) {
	
    unset($_SESSION['log']);
    session_destroy();
	//header("location: index.php");
    echo("logout");
}


$sql = 'select count(*) from users where USER_LASTNAME = "'.$login.'" and USER_PASSWORD = "'.$pass_nocrypt.'" LIMIT 1' ;
$rc = mysqli_query($db_link,$sql);

if($rc == '0') {
	die('<b>Erreur</b><br><br>Login/pass Incorrect');
}

$_SESSION['log'] = true ;
$_SESSION['pseudo'] = $login ;
header("location: ".$private_zone);
echo 'Vous êtes connecté !';

?>