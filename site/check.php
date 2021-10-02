<?php 

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING); // Удаляет все лишнее и записываем значение в переменную //$login
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING); 
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

$pass = md5($pass."thisisforhabr"); // Создаем хэш из пароля

$mysql = new mysqli('localhost', 'root', '', 'hakaton');

$mysql->query("INSERT INTO `users` (`login`, `pass`, `email`)
	VALUES('$login', '$pass', '$email')");
$mysql->close();

header('Location: kabinet.php');
?>


