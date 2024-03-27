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
try {
    $stmt = $db->prepare("INSERT INTO user_languages (user_id, language) VALUES (:user_id,:language)");
    $user_id = $conn->insert_user_id;
    $lange = $_POST['lange'];

    $kl = implode($Languages);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':language', $kl);
    $stmt->execute();

} catch (PDOException $e) {
    print ('Error : ' . $e->getMessage());
    exit();
}
?>