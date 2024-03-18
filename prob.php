<?PHP


$user = 'u67307'; // Заменить на ваш логин uXXXXX
$pass = '2532509'; // Заменить на пароль, такой же, как от SSH
$db = new PDO(
    'mysql:host=localhost;dbname=u67307',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
); // Заменить test на имя БД, совпадает с логином uXXXXX
try {
    $stmt = $db->prepare("INSERT INTO programming_languages (lang_name) VALUES (:lang_name)");
    $izuk = $_POST['izuk'];
    $stmt->bindParam(':lang_name', $izuk);
} catch (PDOException $e) {
    print ('Error : ' . $e->getMessage());
    exit();
}
?>