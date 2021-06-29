<?php
    require_once "conect.php";
    global $mysqli;
    connectDB();
    	
    $result=$mysqli->query("SELECT * FROM `flutter_residents` ORDER BY `id`");
    	
    closeDB();

    echo $result;
?>