<?php
require_once ('db.php');
$login = $_POST['login'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$date = $_POST['date'];
$someGroupName = $_POST['someGroupName'];
$languages = $_POST['languages'];
$bio = $_POST['bio'];
$checkt = $_POST['checkt'];



// $sql = "INSERT INTO forms (login, tel, email) VALUES ('$login', '$tel', '$email')";
// if ($conn->query($sql) === TRUE) {
//     $form_id = $conn->insert_id; // Получаем ID новой записи
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// Сохранение выбранных ЯП в таблице "form_languages"
foreach ($language as $language) {
    $language = $conn->real_escape_string($languages);
    $sql = "INSERT INTO languages (language_name) VALUES ('$languages')";
    if ($conn->query($sql) === TRUE) {
        $language_id = $conn->insert_id; // Получаем ID новой записи
        $sql = "INSERT INTO form_languages (form_id, language_id) VALUES ('$form_id', '$language_id')";
        $conn->query($sql);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Закрытие соединения с базой данных


?>