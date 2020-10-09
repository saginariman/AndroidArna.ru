<?php
	$mysqli=true;
	function connectDB(){
		global $mysqli;
		$mysqli=new mysqli("localhost","bhx20113","E7VEMJYLkK","bhx20113_nari");
		$mysqli->query("SET NAMES 'utf8'");
		$mysqli->query("SET CHARACTER SET 'utf8'");
	}
	function closeDB(){
		global $mysqli;
		$mysqli->close();

	}
	session_start();

?>