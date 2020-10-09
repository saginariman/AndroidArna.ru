<!DOCTYPE html>
<html>
<head>
	<?php 
		$title="Обратная связь";
		require_once "blocks/head.php";
		require_once "functions/conect.php";

	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#done").click(function(){
				var email = $("#email").val();
				var subject = $("#subject").val();
				var message = $("#message").val();
				var fail="";
				if(email.split('@').length-1==0 || email.split('.').length-1==0) fail="Email введен неправильно!";
				else if(subject.length<5) fail="Введите тему сообщения не меньше 5 символов";
				else if(message.length<15) fail="Введите сообщение не меньше 15 символов";
				if(fail!="") {
					$("#mess").html(fail);
					
					return false;
					
				}
				$.ajax({
					url:'/ajax/feedback.php',
					type:'post',
					cache:false,
					data:{'email':email,'subject':subject,'message':message},
					dataType:'html',
					success:function(data){
						$("#mess").html(data);
					}
				});
			});	
		}); 
	</script>
</head>
<body>
	<header>
		<?php require_once "blocks/header.php"?>
		
	</header>
	<div id="wrapper">
		<div id="leftCol">
			<form id="loginform" method="POST">
				<h1>Обратная связь</h1><br>
				<input type="text" id="email" name="email" placeholder="Введите email " value="<?= @$_POST['email']?>"><br>
				<input type="text" id="subject" name="subject" placeholder="Введите тему сообщения"><br>
				<input type="text" id="message" name="message" placeholder="Введите сообщение"><br>
				<span id="mess"></span><br>
				<button type="button" name="done" id="done">Отправить</button>
			</form>
		</div>
		<?php require_once "blocks/rightcol.php"?>
	</div>
	<?php require_once "blocks/footer.php"  ?>

</body>
</html>