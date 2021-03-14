<?php

session_start();


$host = getenv("DB_HOST");
$dbname = getenv("DB_NAME");
$dbuser = getenv("DB_USER");
$dbpassword = getenv("MYSQL_ROOT_PASSWORD");

$dbConnection = new mysqli($host, $dbuser, $dbpassword, $dbname);

if ($dbConnection->connect_error) {
	
    // Removido o echo que exibia na tela o erro
    error_log("Error: Unable to connect to MySQL.", 0);
    error_log("Debugging errno: " . mysqli_connect_errno(), 0);
    error_log("Debugging error: " . mysqli_connect_error(), 0);
    exit;
}

function getSelect($sql){
	$sql->execute();
	$result = $sql->get_result();
	if( $result->num_rows ) {
		$rows = [];
		while($row = $result->fetch_array()){
			$rows[] = $row;
		}
		return $rows;
	}
	return false;
}
