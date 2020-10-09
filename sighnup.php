<!DOCTYPE html>
<html>
<head>
	<?php 
		$title="Регистрация аккаунта";
		require_once "blocks/head.php";
		require_once "functions/conect.php";
		global $mysqli;
		if(isset($_POST['sighnup'])){
			$name=filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
			$email=filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
			$password=filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
			$password_2=filter_var(trim($_POST['password_2']),FILTER_SANITIZE_STRING);
			$errors=array();
			if($name=="")
				$errors[]="Введите свое имя!";
			if($email=="")
				$errors[]="Введите email!";
			if($password=="")
				$errors[]="Введите пароль!";
			if($password_2!=$password)
				$errors[]="Повторный пароль введен не правильно!";
			
			
    		
			if(empty($errors)){
				connectDB();
				$el=$mysqli->query("SELECT `email` FROM `userstable` WHERE `email` = '$email'");
					
					if($el->num_rows>0) $errors[]="Пользователь с таким email аддрессом уже существует!";
					else {
						$pass=md5($password);
						$mysqli->query("INSERT INTO `userstable`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')");
						closeDB();
						$errors[]="Вы успешно зарегистрированы!.Можете войти свой аккаунт!";
						$name="";
						$email="";
						$password="";
						$password_2="";
					}		
			}
			
		}
	?>
</head>
<body>
	<header>
		<?php require_once "blocks/header.php"?>
	</header>
	<div id="wrapper">
		<div id="leftCol">
			<form id="loginform" action="/sighnup.php" method="POST">
				<h1>Регистрация</h1><br>
				<input type="text" name="name" placeholder="Введите имя " value="<?= @$_POST['name']?>"><br><br>
				<input type="text" name="email" placeholder="Введите email " value="<?= @$_POST['email']?>" ><br><br>
				<input type="text" name="password" placeholder="Введите пароль " value="<?= @$_POST['password']?>"><br>
				<input type="text" name="password_2" placeholder="Введите пароль еще раз " value="<?= @$_POST['password_2']?>"><br>
				<span><?php echo array_shift($errors);?></span><br>
				<span><a href="login.php">войти?</a></span><br>

				<button type="submit" name="sighnup">Регистрировать</button>
			</form>
		</div>
		<?php require_once "blocks/rightcol.php"?>
	</div>
	<?php require_once "blocks/footer.php"  ?>
</body>
</html>