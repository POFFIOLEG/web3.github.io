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
// try {
//$stmt = $db->prepare("INSERT INTO forms SET name,email = ?");
$stmt = $db->prepare("INSERT INTO forms (name, email, massage) VALUES ('$login','$emadil','$massage'");
// $stmt->execute([$_POST['login']], );
// $stmt->execute([$_POST['tel']], );
// $stmt->execute([$_POST['email']], );
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// } catch (PDOException $e) {
//     print ('Error : ' . $e->getMessage());
//     exit();
// }

?>