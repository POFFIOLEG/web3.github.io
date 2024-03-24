<?php


$user = 'u67307';
$pass = '2532509';
$db = new PDO(
    'mysql:host=localhost;dbname=u67307',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);





$sql = "CREATE TRIGGER trg_insert_user_language
AFTER INSERT ON users
FOR EACH ROW
BEGIN
    INSERT INTO user_languages (user_id) VALUES (NEW.id_name);
END";
$stmt = $db->prepare($sql);


?>