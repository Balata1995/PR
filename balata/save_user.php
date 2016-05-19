<?php 
if(isset($_POST['login'])){$login = $_POST['login'];
if($login == ""){
	unset($login);
}
}
if(isset($_POST['password'])){$password = $_POST['password'];
if($password == ""){
	unset($password);
}
}
if(empty($login) or empty($password))
{
	exit("Ви некоректно ввели інформацію");
}
$login = trim($login);
$login = stripcslashes($login);
$login = htmlspecialchars($login);
$password = trim($password);
include("bd.php");
$result = mysqli_query($db, "SELECT id FROM users WHERE login= $login");

$myrow = mysqli_fetch_array($result);
if(!empty($myrow['id'])){
	exit("Такий користувач вже зареєстрований");
} 
$result2 = mysqli_query($db,"INSERT INTO users (login,password) VALUES('$login','$password')");
if($result2 == 'TRUE'){
	echo "Ви успішно зареєстровані! Тепер ми можемо зайти на сайт. <a href ='index.php'>Головна сторінка</a>";
} else {
	echo "Помилка реєстрації";
}