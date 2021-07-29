<?php
		require_once "conect.php";
		global $mysqli;
    	connectDB();
		$startFrom=$_POST["startFrom"];
		$updates=$_POST["updates"];
		$top=$_POST["top"];
		$how=$_POST["how"];
		$news=$_POST["news"];
		if($updates){
			$result=$mysqli->query("SELECT * FROM `articles1` ORDER BY `id` DESC LIMIT {$startFrom}, 10");
		}
		else if($top){
			$result=$mysqli->query("SELECT * FROM `articles1` WHERE `category` = 'top' ORDER BY `id` DESC LIMIT {$startFrom}, 10");
		}
		else if($how){
			$result=$mysqli->query("SELECT * FROM `articles1` WHERE `category` = 'how' ORDER BY `id` DESC LIMIT {$startFrom}, 10");
		}
		else if($news){
			$result=$mysqli->query("SELECT * FROM `articles1` WHERE `category` = 'news' ORDER BY `id` DESC LIMIT {$startFrom}, 10");
		}
    	closeDB();
    	$articles=array();
    	while(($row=$result->fetch_assoc())!=false)
			$articles[]=$row;
		echo json_encode($articles);
			
?>