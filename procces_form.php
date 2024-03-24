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


// Получение значения из table1
$stmt1 = $db->query("SELECT column1 FROM users");
$value1 = $stmt1->fetchColumn();

// Получение значения из table2
$stmt2 = $db->query("SELECT column2 FROM programming_languages");
$value2 = $stmt2->fetchColumn();

// Подготовка SQL запроса для вставки данных в table3
$sql = "INSERT INTO user_languages (user_id, lang_id) VALUES (:user_id, :lang_id)";
$stmt3 = $db->prepare($sql);

// Привязка параметров и выполнение запроса
$stmt3->bindParam(':user_id', $value1, PDO::PARAM_STR);
$stmt3->bindParam(':lang_id', $value2, PDO::PARAM_STR);
$stmt3->execute();

echo "Данные успешно добавлены в таблицу table3.";


?>