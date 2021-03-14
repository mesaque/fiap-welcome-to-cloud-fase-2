<?php
require_once 'dbfuncs.php';


// removido aquele EVAL muito louco sem a menor necessidade

if($_SERVER['REQUEST_METHOD'] == "POST") {
	
	// Removido o $_REQUEST para um método único reduzindo a superfície de ataque
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!empty($username) && !empty($password)) {
		
		//bind param para evitar SQL INJECTION
		$authSQL  = $dbConnection->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
		$authSQL->bind_param('ss', $username, $password);
		$authed = getSelect($authSQL);

		if(!$authed) {
			echo 'Something Went Wrong.<br>';
			die;
		}
		else {
			echo 'Success, you authed! <br>';
			$_SESSION['authed'] = true;
			$_SESSION['userid'] = $authed[0][0];
			$_SESSION['username'] = $authed[0][1];
		}
	}
}
else {
	if( true !== $_SESSION['authed'] ){
?>
<form method="POST">
	<label for="username">username:</label>
	<input name="username" id="username" /> <br />
	<label for="password">password:</label>
	<input name="password" id="password" /> <br />
	<input type="submit" value="Login!">
</form>
<?
} else {
	//Saída tratada XSS
	printf("Welcome Back %s", htmlspecialchars($_SESSION['username'], ENT_QUOTES, 'UTF-8'));
}
}
