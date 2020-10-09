<!DOCTYPE html>
<html>
<head>
	<?php 
		require_once "functions/functions.php";
		$news=getArticle($_GET["id"]);
		$title=$news["title"];
		require_once "blocks/head.php";
		
	?>
	<meta name="description" content="<?=$news['intro_text']?>">
	<meta property="og:url" content="http://androidarna.ru/article.php?id=<?=$news['id']?>">
    <meta property="og:description" content="<?=$news['intro_text']?>">
</head>
<body>
		<?php require_once "blocks/header.php"?>
	
	<div id="wrapper">
		<div id="leftCol">
			<?php echo '<div id="articleBig"><img src="'.$news["img"].'" width="100%" height="360px"><br><br><h1>'.$news["title"].'</h1><br><p>'.$news["full_text"].'</p><br><br></div>';
			?>
		</div>
		<?php require_once "blocks/rightcol.php"?>
	</div>
	<?php require_once "blocks/footer.php"  ?>

</body>
</html>