<?PHP


$user = 'u67307'; // Заменить на ваш логин uXXXXX
$pass = '2532509'; // Заменить на пароль, такой же, как от SSH
$db = new PDO(
    'mysql:host=localhost;dbname=u67307',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
); // Заменить test на имя БД, совпадает с логином uXXXXX

//Подготовленный запрос. Не именованные метки.
try {
    //$stmt = $db->prepare("INSERT INTO forms SET name,email = ?");
    $stmt = $db->prepare("INSERT INTO forms (name, email) VALUES ('login', 'email')");
    $stmt->execute([$_POST['login']]);
    $stmt->execute([$_POST['tel']]);

} catch (PDOException $e) {
    print ('Error : ' . $e->getMessage());
    exit();
}


?>