<?php 

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING); // Удаляет все лишнее и записываем значение в переменную //$login
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
	echo "Недопустимая длина логина";
	exit();
}
else if(mb_strlen($name) < 5){
	echo "Недопустимая длина имени.";
	exit();
} // Проверяем длину имени

$pass = md5($pass."thisisforhabr"); // Создаем хэш из пароля

$mysql = new mysqli('localhost', 'root', '', 'srv50908_users');
$result1 = $mysql->query("SELECT * FROM `usertbl` WHERE `login` = '$login'");
// $user1 = $result1->fetch_assoc(); // Конвертируем в массив


if(!empty($user1)){
	echo "Данный логин уже используется!";
	exit();


}


header('Location: /test');
exit();
 ?>