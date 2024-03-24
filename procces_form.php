<?php

// // $pdo = new PDO('mysql:host=localhost;dbname=u67307', 'пользователь', 'пароль');
// $user = 'u67307';
// $pass = '2532509';
// $db = new PDO(
//     'mysql:host=localhost;dbname=u67307',
//     $user,
//     $pass,
//     [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
// );

// $user_id = $_POST['user_id'];
// $lang_id = $_POST['lang_id'];


// $sql = "INSERT INTO user_languages (user_id, lang_id) VALUES (:user_id, :lang_id)";



// $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
// $stmt->bindParam(':lang_id', $lang_id, PDO::PARAM_INT);
// $stmt->execute();






// Подключение к базе данных
$user = 'u67307';
$pass = '2532509';
$db = new PDO(
    'mysql:host=localhost;dbname=u67307',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);




$sql = "INSERT INTO user_languages (user_id, lang_id) 
        SELECT u.id AS user_id, p.id AS programming_languages 
        FROM users u
        JOIN users upl ON u.id = id_name 
        JOIN programming_languages p ON p.id = id_names";

$stmt = $db->prepare($sql);
$stmt->execute();

echo "Данные успешно записаны в таблицу user_languages.";



?>