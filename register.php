<?php
require_once ('db.php');
$login = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$date = $_POST['date'];
$someGroupName = $_POST['someGroupName'];
$languages = $_POST['languages'];
$bio = $_POST['bio'];
$checkt = $_POST['checkt'];

$stmt->bindParam(':name', $login);
$stmt->bindParam(':tel', $tel);
$stmt->bindParam(':massage', $email);


// $sql = "INSERT INTO forms (login, tel, email) VALUES ('$login', '$tel', '$email')";
// if ($conn->query($sql) === TRUE) {
//     $form_id = $conn->insert_id; // Получаем ID новой записи
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// Сохранение выбранных ЯП в таблице "form_languages"
// foreach ($languages as $language) {
//     $language = $conn->real_escape_string($language);
//     $sql = "INSERT INTO languages (language_name) VALUES ('$language')";
//     if ($conn->query($sql) === TRUE) {
//         $language_id = $conn->insert_id; // Получаем ID новой записи
//         $sql = "INSERT INTO form_languages (form_id, language_id) VALUES ('$form_id', '$language_id')";
//         $conn->query($sql);
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }

// // Закрытие соединения с базой данных
// $conn->close();
?>