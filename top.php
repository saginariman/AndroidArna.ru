<!DOCTYPE html>
<html>
<head>
	<?php 
		require_once "functions/functions.php";
		$title="Топ приложения";
		require_once "blocks/head.php";
		$news=getAllTop();
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var inProgress=false;
			var startFrom=10;
			var top=true;
			/*var num1=num+1;*/
			$(window).scroll(function(){
				if( $(window).scrollTop()+$(window).height()>= $("#leftColbox").height() + 90 && !inProgress){
						$.ajax({
							url:'/functions/download.php',
							type:'POST',
							cache:false,
							data:{'startFrom':startFrom,'top':top},
							dataType:'html',
							beforeSend: function() {
								$("#leftColbox").append('<div id="floatingBarsG"><div class="blockG" id="rotateG_01"></div><div class="blockG" id="rotateG_02"></div><div class="blockG" id="rotateG_03"></div><div class="blockG" id="rotateG_04"></div><div class="blockG" id="rotateG_05"></div><div class="blockG" id="rotateG_06"></div><div class="blockG" id="rotateG_07"></div><div class="blockG" id="rotateG_08"></div></div>');
								inProgress=true;
							}
						}).done(function(data){
							data = jQuery.parseJSON(data);
							if(data.length>0){
								$.each(data,function(index,data){
									$("#leftColbox").append('<div id="box"><img src="'+data.img+'" ><a href="/article.php?id='+data.id+'"><div id="titlep"><h1>'+data.title+'</h1><p>'+data.intro_text+'</p></a></div>');
								});
								$("#floatingBarsG").remove();
								inProgress=false;
								startFrom+=10;
							}
							else{
								$("#floatingBarsG").remove();
							}
						});
				}
			});	
		}); 
	</script>
</head>
<body>
	
		
		<?php require_once "blocks/header.php"?>
	
	<div id="wrapper">
		<h1 style='text-align:center;font-family: Arial, sans serif'>Топ приложения</h1><hr><br>
		<div id="leftColbox">
			<?php
				for($i=0;$i<10;$i++){
					if($i==0)
						echo '<div id="box1" style="
							background-image: url('.$news[$i]["img"].');
							background-repeat: no-repeat;
							background-size: cover;
							background-position: center center;

							">';
					else if($i==1)
						echo '<div id="box2" style="
							background-image: url('.$news[$i]["img"].');
							background-repeat: no-repeat;
							background-size: cover;
							background-position: center center;

							">';
					else if($i==2)
						echo '<div id="box3" style="
							background-image: url('.$news[$i]["img"].');
							background-repeat: no-repeat;
							background-size: cover;
							background-position: center center;

							">';
					else
						echo '<div id="box">';
					if($i==0 || $i==1 || $i==2) 
						echo '<a href="/article.php?id='.$news[$i]["id"].'"><h1>'.$news[$i]["title"].'</h1></a></div>';
					else 
						echo '<img src="'.$news[$i]["img"].'" ><a href="/article.php?id='.$news[$i]["id"].'"><div id="titlep"><h1>'.$news[$i]["title"].'</h1><p>'.$news[$i]["intro_text"].'</p></a></div></div>';

				}
			?>
			
		</div>
		<?php require_once "blocks/rightcol.php"?>
	</div>
	<?php require_once "blocks/footer.php"  ?>
	
</body>
</html>