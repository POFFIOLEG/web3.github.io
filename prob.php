<?php
// Подключение к базе данных
$user = 'u67307'; // Заменить на ваш логин uXXXXX
$pass = '2532509'; // Заменить на пароль, такой же, как от SSH
$db = new PDO(
    'mysql:host=localhost;dbname=u67307',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);



$login = $_POST['login'];
$email = $_POST['email'];
$message = $_POST['tel'];

$stmt->bindParam(':login', $login);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':message', $message);

$stmt->execute();

?>