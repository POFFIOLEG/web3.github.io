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
    $stmt = $db->prepare("INSERT INTO user_languages (user_id,lang_id) VALUES (:user_id,:lang_id)");
    $id_name = $_POST['id_name'];
    $id_names = $_POST['id_names'];
    $stmt->bindParam(':user_id', $id_name);
    $stmt->bindParam(':lang_id', $id_names);
    $stmt->execute();

} catch (PDOException $e) {
    print ('Error : ' . $e->getMessage());
    exit();
}


// $sql = "INSERT INTO user_languages (user_id) 
//         SELECT u.id_name AS user_id 
//         FROM users u 
//         JOIN user_languages upl ON u.id_name = upl.user_id ";
// $stmt = $db->prepare($sql);


?>