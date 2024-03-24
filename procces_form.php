<?php


$user = 'u67307';
$pass = '2532509';
$db = new PDO(
    'mysql:host=localhost;dbname=u67307',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);





$sql = "INSERT INTO user_languages (user_id) 
        SELECT u.id_name AS user_id 
        FROM users u 
        JOIN user_languages upl ON u.id_name = upl.user_id ";
$stmt = $db->prepare($sql);


?>