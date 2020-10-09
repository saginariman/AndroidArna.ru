<!DOCTYPE html>
<html>
<head>
	<?php 
		require_once "functions/functions.php";
		$title="AndroidArna";
		require_once "blocks/head.php";
		$last=getLast(5);
		$news=getNew(5);
		$top=getTop(5);
		$how=getHow(5);
	?>
	<meta name="description" content="Все об андроид новостях, топ андроид приложениях, андроид подсказках и многое интересное!">
	<meta property="og:url" content="http://androidarna.ru">
    <meta property="og:description" content="Все об андроид новостях, топ андроид приложениях, андроид подсказках и многое интересное!">
    <script data-ad-client="ca-pub-3734579553414325" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
	
		
		<?php require_once "blocks/header.php"?>
	<header>
		<div id="mainimg"></div>
	</header>
	<div id="wrapper">
		<div id="leftCol">
			<div class="blockwithnews">
				<span class="h1title"><h1 style="text-align: start;">Обновления</h1><hr></span>
				<?php
					for($i=0;$i<count($last);$i++){
						if($i==0)
							echo '<div id="articleBig"><a href="/article.php?id='.$last[$i]["id"].'"><div id="beforeb">'.$last[$i]["title"].'</div><div id="lastb"><span><img src="'.$last[$i]["img"].'" width="100%" height="200px"></span><p id="textp">'.$last[$i]["intro_text"].'</p></div></a></div>';
						else if($i==1)
								echo '<div class="article article1" >';
						else if($i==2)
								echo '<div class="article article2">';
						else if($i==3)
								echo '<div class="article article3">';
						else if($i==4)
								echo '<div class="article article4">';
						if($i>0)	
							echo '<a href="/article.php?id='.$last[$i]["id"].'"><div id="firstb"><img src="'.$last[$i]["img"].'" width="100%" height="100%"></div><div id="secondb"><h2>'.$last[$i]["title"].'</h2></div></a></div>';

					}
				?><a id="morelink" href="/updates.php"><button id="more">еще...</button></a>
			</div><br><br>
			<div class="blockwithnews">
				<span class="h1title"><h1 style="text-align: start;">Новости</h1><hr></span>
				<?php
					for($i=0;$i<count($news);$i++){
						if($i==0)
							echo '<div id="articleBig"><a href="/article.php?id='.$news[$i]["id"].'"><div id="beforeb">'.$news[$i]["title"].'</div><div id="lastb"><span><img src="'.$news[$i]["img"].'" width="100%" height="200px"></span><p id="textp">'.$news[$i]["intro_text"].'</p></div></a></div>';
						else if($i==1)
								echo '<div class="article article1" >';
						else if($i==2)
								echo '<div class="article article2">';
						else if($i==3)
								echo '<div class="article article3">';
						else if($i==4)
								echo '<div class="article article4">';
						if($i>0)	
							echo '<a href="/article.php?id='.$news[$i]["id"].'"><div id="firstb"><img src="'.$news[$i]["img"].'" width="100%" height="100%"></div><div id="secondb"><h2>'.$news[$i]["title"].'</h2></div></a></div>';

					}
				?><a id="morelink" href="/news.php"><button id="more">еще...</button></a>
			</div><br><br>
			<div class="blockwithnews">
				<span class="h1title"><h1 style="text-align: start;">Топ приложения</h1><hr></span>
				<?php
					for($i=0;$i<count($top);$i++){
						if($i==0)
							echo '<div id="articleBig"><a href="/article.php?id='.$top[$i]["id"].'"><div id="beforeb">'.$top[$i]["title"].'</div><div id="lastb"><span><img src="'.$top[$i]["img"].'" width="100%" height="200px"></span><p id="textp">'.$top[$i]["intro_text"].'</p></div></a></div>';
						else if($i==1)
								echo '<div class="article article1" >';
						else if($i==2)
								echo '<div class="article article2">';
						else if($i==3)
								echo '<div class="article article3">';
						else if($i==4)
								echo '<div class="article article4">';
						if($i>0)	
							echo '<a href="/article.php?id='.$top[$i]["id"].'"><div id="firstb"><img src="'.$top[$i]["img"].'" width="100%" height="100%"></div><div id="secondb"><h2>'.$top[$i]["title"].'</h2></div></a></div>';

					}
				?><a id="morelink" href="/top.php"><button id="more">еще...</button></a>
			</div><br><br>
			<div class="blockwithnews">
				<span class="h1title"><h1 style="text-align: start;">Как...</h1><hr></span>
				<?php
					for($i=0;$i<count($how);$i++){
						if($i==0)
							echo '<div id="articleBig"><a href="/article.php?id='.$how[$i]["id"].'"><div id="beforeb">'.$how[$i]["title"].'</div><div id="lastb"><span><img src="'.$how[$i]["img"].'" width="100%" height="200px"></span><p id="textp">'.$how[$i]["intro_text"].'</p></div></a></div>';
						else if($i==1)
								echo '<div class="article article1" >';
						else if($i==2)
								echo '<div class="article article2">';
						else if($i==3)
								echo '<div class="article article3">';
						else if($i==4)
								echo '<div class="article article4">';
						if($i>0)	
							echo '<a href="/article.php?id='.$how[$i]["id"].'"><div id="firstb"><img src="'.$how[$i]["img"].'" width="100%" height="100%"></div><div id="secondb"><h2>'.$how[$i]["title"].'</h2></div></a></div>';

					}
				?><a id="morelink" href="/how.php"><button id="more">еще...</button></a>
			</div>
			
		</div>
		<?php require_once "blocks/rightcol.php"?>
	</div>
	<?php require_once "blocks/footer.php"  ?>

	<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/7.21.1/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/7.21.1/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>
	
</body>
</html>