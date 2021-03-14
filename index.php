<?php
// Obfuscamento de Erros para evitar falhas como por exemplo: path disclosure 
ini_set('error_reporting', E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE);
ini_set('display_errors', 0);
ini_set('log_errors', 0);

require_once 'dbfuncs.php';

// Removido o $_REQUEST para um método único reduzindo a superfície de ataque
$getUser = $_GET["username"];
// como é ID, forçado ser sempre int
$getId  = intval( $_GET["id"] );

$results = false;

if(!empty($getUser)) {
	
	//bind param para evitar SQL INJECTION
	$query  = $dbConnection->prepare('SELECT * FROM users WHERE username = ?');
	
	$query->bind_param('s', $getUser);
	$results = getSelect($query);
}
elseif(!empty($getId)) {
	
	//bind param para evitar SQL INJECTION
	$query  = $dbConnection->prepare('SELECT * FROM users WHERE id = ?');
	$query->bind_param('i', $getId);

	$results = getSelect($query);
}


if(!$results) {
	//Saída tratar XSS
	printf("Unable to find users: %s", htmlspecialchars($getUser, ENT_QUOTES, 'UTF-8') );
}
else {
	foreach($results as $row) {
		echo "User found: <br>";
		echo "<b>Id:</b> " . $row[0] . "<br>";
		echo "<b>Username: </b>" . $row[1] . "<br>";
		echo "<b>Password: </b>" . $row[2] . "<br>";
		echo "<b>Firstname: </b>" . $row[3] . "<br>";
		echo "<b>Lastname: </b>" . $row[4] . "<br>";
		echo "<b>Email: </b>" . $row[5] . "<br>";
	}
}
