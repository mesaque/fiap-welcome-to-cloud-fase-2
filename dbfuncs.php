<?php

$host = getenv("DB_HOST");
$dbname = getenv("DB_NAME");
$dbuser = getenv("DB_USER");
$dbpassword = getenv("MYSQL_ROOT_PASSWORD");

$_SESSION['link'] = new mysqli($host, $dbuser, $dbpassword, $dbname);

if ($link->connect_error) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

function getSelect($sql){
	$result = $_SESSION['link']->query($sql);
	if( $result  ) {
		return array( $result->fetch_row() );
	}
	return false;
}
