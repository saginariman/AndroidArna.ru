<?php
	require_once "functions/conect.php";
	unset($_SESSION['user']);
	header('Location: /');

?>