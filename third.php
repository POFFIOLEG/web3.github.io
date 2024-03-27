<?php
$user = 'u67307';
$pass = '2532509';
$db = new PDO(
    'mysql:host=localhost;dbname=u67307',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$user_id = $conn->insert_id; // Получаем ID последней добавленной записи в таблицу users

$sql_user_languages = "INSERT INTO user_languages (user_id, language) VALUES ('$user_id', 'Java'), ('$user_id', 'Python')";

$conn->close();
?>