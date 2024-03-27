<?php
// Подключение к базе данных
$user = 'u67307';
$pass = '2532509';
$db = new PDO(
    'mysql:host=localhost;dbname=u67307',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Добавление данных в таблицу users
$sql_users = "INSERT INTO users (full_name, phone, email, date_of_birth, gender, bio, informed) 
VALUES ('John Doe', '1234567890', 'john.doe@example.com', '1990-01-01', 'Male', 'Some bio', 1)";

if ($conn->query($sql_users) === TRUE) {
    echo "Данные успешно добавлены в таблицу users.";
    $user_id = $conn->insert_id; // Получаем ID последней добавленной записи в таблицу users

    // Добавление данных в таблицу user_languages
    $sql_user_languages = "INSERT INTO user_languages (user_id, language) 
    VALUES ('$user_id', 'Java'), ('$user_id', 'Python')";

    if ($conn->multi_query($sql_user_languages) === TRUE) {
        echo "Данные успешно добавлены в таблицу user_languages.";
    } else {
        echo "Ошибка: " . $sql_user_languages . "<br>" . $conn->error;
    }
} else {
    echo "Ошибка: " . $sql_users . "<br>" . $conn->error;
}

// Закрытие соединения с базой данных
$conn->close();
?>