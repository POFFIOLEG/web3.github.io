<?php
$host = 'localhost'; // Хост базы данных (в данном случае localhost через SSH-туннель)
$port = 3306; // Порт базы данных (может отличаться в зависимости от настроек SSH-туннеля)
$dbname = 'users'; // Имя вашей базы данных
$username = 'u67307'; // Имя пользователя базы данных
$password = '2532509'; // Пароль пользователя базы данных

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Соединение с базой данных установлено успешно";
} catch (PDOException $e) {
    echo "Ошибка подключения к базе данных: " . $e->getMessage();
}
?>