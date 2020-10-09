<!DOCTYPE html>
<html>
<head>
	<?php 
		$title="Вход в аккаунт";
		require_once "blocks/head.php";
		require_once "functions/conect.php";
		global $mysqli;
		if(isset($_POST['do_login'])){
			
			$email=filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
			$password=filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
			
			$errors=array();
			
			if($email=="")
				$errors[]="Введите email!";
			if($password=="")
				$errors[]="Введите пароль!";
			
			
			
    		
			if(empty($errors)){
				connectDB();

				$el=$mysqli->query("SELECT * FROM `userstable` WHERE `email` = '$email'");
				closeDB();
				$user=$el->fetch_assoc();
				if(count($user)!=0){
					$pass=md5($password);
					if($user['password']==$pass){
						$errors[]="Вы успешно авторизованы!.Можете перейти на главную!";
						$_SESSION['user']=$user;
						
					}
					else $errors[]="Пароль неверный!";;
				}
				else $errors[]="Логин не существует!";;		
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
			<form id="loginform" method="POST" action="/login.php">
				<h1>Вход в личный аккаунт</h1><br>
				<input type="text" name="email" placeholder="Введите email " value="<?= @$_POST['email']?>"><br><br>
				<input type="text" name="password" placeholder="Введите пароль "><br><span>
				<span><?php echo array_shift($errors);?></span><br>
				<a href="sighnup.php">зарегистрироваться?</a></span><br>
				<button type="submit" name="do_login">Войти</button>
			</form>
		</div>
		<?php require_once "blocks/rightcol.php"?>
	</div>
	<?php require_once "blocks/footer.php"  ?>

</body>
</html>