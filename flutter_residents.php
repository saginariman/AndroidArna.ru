<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" type="text/css"/>
</head>
<body>
    
</body>
</html>
<?php
    require_once "functions/conect.php";
    global $mysqli;
    connectDB();
    	
    $result=$mysqli->query("SELECT * FROM `flutter_residents` ORDER BY `id`");
    $result2=$mysqli->query("SELECT * FROM `flutter_residents` WHERE `address` = 'Lomova 60' ORDER BY `id`");
    $result3=$mysqli->query("SELECT * FROM `flutter_house` ORDER BY `id`");	
    

    echo 'Все жители города<br><br>';
    // $array=array();
	while(($row=$result->fetch_assoc())!=false){
		echo $row["name"].' '.$row["surname"].' '.$row["patronymic"].' '.$row["tel_number"].' '.$row["address"].' '.$row["zayavki"];
        echo '<br><br>';
        // echo $result;
    }

    echo '<br><br>';
    echo 'Все жители Ломова 60<br><br>';
    while(($row=$result2->fetch_assoc())!=false){
		echo $row["name"].' '.$row["surname"].' '.$row["patronymic"].' '.$row["tel_number"].' '.$row["address"].' '.$row["zayavki"];
        echo '<br><br>';
        // echo $result;
    }

    echo '<br><br>';
    echo 'Все дома города<br><br>';
    while(($row=$result3->fetch_assoc())!=false){
		echo $row["address"].' '.$row["ready"].' '.$row["year"].' '.$row["floors"].' '.$row["residentsCount"].' '.$row["square"];
        echo '<br><br>';
        // echo $result;
    }


    // Вход в аккаунт
    $tel_number = '+77051039218';
    $password = 'nariman';
    $el=$mysqli->query("SELECT * FROM `flutter_residents` WHERE `tel_number` = '$tel_number'");
	$user=$el->fetch_assoc();
	if(count($user)!=0){
		$pass=md5($password);
		if($user['password']==$pass){
			$errors[]="Вы успешно авторизованы!.Можете перейти на главную!";	
		}
		else $errors[]="Пароль неверный!";
	}
	else $errors[]="Логин не существует!";

    //Регистрация аккаунта
    $el=$mysqli->query("SELECT `tel_number` FROM `flutter_residents` WHERE `tel_number` = '$tel_number'");
					
	if($el->num_rows>0) $errors[]="Пользователь с таким email аддрессом уже существует!";
	else {
		$pass=md5($password);
		$mysqli->query("INSERT INTO `flutter_residents`(`name`, `surname`, `patronymic`, `password`, `tel_number`, `address`) VALUES ('$name', '$surname', '$patronymic', '$password', '$tel_number', '$address')");
			
		$errors[]="Вы успешно зарегистрированы!.Можете войти свой аккаунт!";
	}

    closeDB();
?>