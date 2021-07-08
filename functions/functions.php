<?php
	require_once "conect.php";
    /*Функция для выборки последних 5 добавлений */
	function getLast($limit){

    	global $mysqli;
    	connectDB();
    	
    	$result=$mysqli->query("SELECT * FROM `articles1` ORDER BY `id` DESC LIMIT $limit");
    	
    	closeDB();
    	return resultToArray($result);
	}
    /*Выборка всего контента*/
    function getAllLast(){

        global $mysqli;
        connectDB();
        
        $result=$mysqli->query("SELECT * FROM `articles1` ORDER BY `id` DESC LIMIT 10");
        
        closeDB();
        return resultToArray($result);
    }
    /*Выбор последних 5 от категории новости*/
    function getNew($limit){

        global $mysqli;
        connectDB();
        
        $result=$mysqli->query("SELECT * FROM `articles1` WHERE `category` = 'news' ORDER BY `id` DESC LIMIT $limit");
        
        closeDB();
        return resultToArray($result);
    }
    /*Выборка всех от категории новости*/
    function getAllNew(){
        global $mysqli;
        connectDB();
        
        $result=$mysqli->query("SELECT * FROM `articles1` WHERE `category` = 'news' ORDER BY `id` DESC LIMIT 10");
        
        closeDB();
        return resultToArray($result);
    }

    /*Выбор последних 5 от категории топ*/
    function getTop($limit){

        global $mysqli;
        connectDB();
        
        $result=$mysqli->query("SELECT * FROM `articles1` WHERE `category` = 'top' ORDER BY `id` DESC LIMIT $limit");
        
        closeDB();
        return resultToArray($result);
    }
    /*Выборка всех от категории топ*/
    function getAllTop(){
        global $mysqli;
        connectDB();
        
        $result=$mysqli->query("SELECT * FROM `articles1` WHERE `category` = 'top' ORDER BY `id` DESC LIMIT 10");
        closeDB();
        return resultToArray($result);
    }

    /*Выбор последних 5 от категории how*/
    function getHow($limit){

        global $mysqli;
        connectDB();
        
        $result=$mysqli->query("SELECT * FROM `articles1` WHERE `category` = 'how' ORDER BY `id` DESC LIMIT $limit");
        
        closeDB();
        return resultToArray($result);
    }
    /*Выборка всех от категории how*/
    function getAllHow(){
        global $mysqli;
        connectDB();
        
        $result=$mysqli->query("SELECT * FROM `articles1` WHERE `category` = 'how' ORDER BY `id` DESC LIMIT 10");
        closeDB();
        return resultToArray($result);
    }

    /*Выбор одного для article.php*/
	function getArticle($id){
    	global $mysqli;
    	connectDB();
    	
    	$result=$mysqli->query("SELECT * FROM `articles1` WHERE `id` =$id");
    	
    	closeDB();
    	return $result->fetch_assoc();
	}
    
    
    /*Функция для возвращения массива*/
	function resultToArray($result){
		$array=array();
		while(($row=$result->fetch_assoc())!=false)
			$array[]=$row;
		return $array;
    }
?>