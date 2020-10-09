<?php
		require_once "functions/functions.php";
		$news=getAllLast();
			$num=$_POST["num"];
			$amount=$_POST["amount"];
			if($amount<=$news){
					echo '<div id="box"><img src="img/'.$news[$num]["id"].'.jpg" ><a href="/article.php?id='.$news[$num]["id"].'"><div id="titlep"><h1>'.$news[$num]["title"].'</h1><p>'.$news[$num]["intro_text"].'</p></a></div></div>';
			}
			else echo 'end';
?>