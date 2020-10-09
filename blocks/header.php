
<nav>
	<script src="https://kit.fontawesome.com/8ffd6ec205.js" crossorigin="anonymous"></script>
	<div id="menu"><i class="fas fa-bars"></i></div>
	<a href="/index.php"><h1>AndroidArna</h1></a>
		<div id="navlink">
			<a href="/news.php">Новости</a>
			<a href="/top.php">Приложения</a>
			<a href="/how.php">Как...</a>
			<?php if(isset($_SESSION['user'])):?>
				<h3>Привет, <?=$_SESSION['user']['name']?></h3>
				<a href="/logout.php">Выйти</a>
			<?php else:?>	
				<a href="/login.php">Войти</a>
				<a href="/sighnup.php">Регистрация</a>
			<?php endif;?>
		</div><br>
		
</nav>
<div id="menulink">
			<a href="/index.php">Главная</a>
			<a href="/news.php">Новости</a>
			<a href="/top.php">Топ Приложения</a>
			<a href="/how.php">Как...</a>
			<?php if(isset($_SESSION['user'])):?>
				<h3>Привет, <?=$_SESSION['user']['name']?></h3>
				<a href="/logout.php">Выйти</a>
			<?php else:?>	
				<a href="/login.php">Войти</a>
				<a href="/sighnup.php">Регистрация</a>
			<?php endif;?>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			if($("#menulink").is(":visible"))
				$("#menulink").hide();
			$("#menu").click(function(){
				if($("#menulink").is(":visible"))
					$("#menulink").slideUp();
				else
					$("#menulink").slideDown();
			});
		});

	</script>
