<?php
	$email=htmlspecialchars($_POST["email"]);
	$subject=htmlspecialchars($_POST["subject"]);
	$message=htmlspecialchars($_POST["message"]);
	if($email=="" || $subject=="" || $message==""){
		echo "Введите все поля!";
		exit;
	}
	$subject="=?utf-8?B?".base64_encode($subject)."?=";
	$headers="From: $email\r\nReply-to:$email\r\nContent-type:text/html;charset=utf-8\r\n";
	if(mail("sagiden8@gmail.com",$subject,$message,$headers))
		echo "Сообщение отправлено!";
	else
		echo "Сообщение не оправлено! Повторите попытку.";
?>