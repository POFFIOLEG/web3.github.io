<?php
// Подключение к базе данных
// $pdo = new PDO('mysql:host=localhost;dbname=u67307', 'пользователь', 'пароль');
$user = 'u67307';
$pass = '2532509';
$db = new PDO(
    'mysql:host=localhost;dbname=u67307',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
// Получение данных из формы
$user_id = $_POST['user_id'];
$lang_id = $_POST['lang_id'];

// Подготовка SQL запроса для вставки данных
$sql = "INSERT INTO user_languages (user_id, lang_id) VALUES (:user_id, :lang_id)";


// Привязка параметров и выполнение запроса
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindParam(':lang_id', $lang_id, PDO::PARAM_INT);
$stmt->execute();

?>