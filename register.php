<?php
// Подключение к базе данных
$servername = "localhost";
$username = "u67307";
$password = "2532509";
$dbname = "forms";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}

// Обработка данных из формы
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$languages = $_POST['languages']; // ЯП передаются в виде массива

// Сохранение данных из формы в таблице "forms"
$sql = "INSERT INTO forms (name, email, message) VALUES ('$name', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
    $form_id = $conn->insert_id; // Получаем ID новой записи
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Сохранение выбранных ЯП в таблице "form_languages"
foreach ($languages as $language) {
    $language = $conn->real_escape_string($language);
    $sql = "INSERT INTO languages (language_name) VALUES ('$language')";
    if ($conn->query($sql) === TRUE) {
        $language_id = $conn->insert_id; // Получаем ID новой записи
        $sql = "INSERT INTO form_languages (form_id, language_id) VALUES ('$form_id', '$language_id')";
        $conn->query($sql);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Закрытие соединения с базой данных
$conn->close();
?>