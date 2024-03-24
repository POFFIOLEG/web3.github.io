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
    $stmt = $db->prepare("INSERT INTO users (id_name)  (SELECT sum(volume1), 1 AS status FROM user_languages)");
    // $lange = $_POST['lange'];

    // $kl = implode($Languages);
    // $stmt->bindParam(':lang_name', $kl);
    // $stmt->execute();
} catch (PDOException $e) {
    print ('Error : ' . $e->getMessage());
    exit();
}




// $sql = "INSERT INTO user_languages (user_id, lang_id)
//         SELECT u.id_name AS user_id, p.id_names AS lang_id
//         FROM users u
//         JOIN programming_languages p ON 1=1";

// if ($conn->query($db) === TRUE) {
//     echo "Связь успешно установлена!";
// } else {
//     echo "Ошибка: " . $sql . "<br>" . $conn->error;
// }

// $sql = "INSERT INTO user_languages (user_id, lang_id) 
//         SELECT u.id_name AS user_id, p.id_names AS lang_id 
//         FROM users u
//         JOIN users u ON u.id = upl.user_id 
//         JOIN programming_languages p ON p.id = upl.lang_id";
// $stmt = $db->prepare($sql);


?>