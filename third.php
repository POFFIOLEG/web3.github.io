<?php
$user = 'u67307';
$pass = '2532509';
$db = new PDO(
    'mysql:host=localhost;dbname=u67307',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

try {
    $stmt = $db->prepare("INSERT INTO user_languages (user_id, language) VALUES (:user_id,:language)");
    $user_id = $db->lastInsertId();
    $stmt->bindParam(':user_id', $user_id);
    $Languages = $_POST['lange'];
    foreach ($languages as $language) {

        $kl = implode($Languages);
        $stmt->bindParam(':language', $kl);
        $stmt->execute();
    }
    $stmt->execute();

} catch (PDOException $e) {
    print ('Error : ' . $e->getMessage());
    exit();
}
?>