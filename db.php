<?PHP

//$servername = "kubu-dev.ru";
//$username = "u67307";
//$password = "2532509";
//$dbname = "users";

//$conn = new mysqli($servername, $username, $password, $dbname);
//if (!$conn) {
//  die ("Connection Fialed" . mysqli_connect_error());
//} else {
//  echo "Good";
//}
// 
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
    $stmt = $db->prepare("INSERT INTO forms SET name = ?");
    $stmt->execute([$_POST['login']]);
} catch (PDOException $e) {
    print ('Error : ' . $e->getMessage());
    exit();
}
try {
    $stmt = $db->prepare("INSERT INTO forms SET email = ?");
    $stmt->execute([$_POST['email']]);
} catch (PDOException $e) {
    print ('Error : ' . $e->getMessage());
    exit();
}
?>