<?PHP


$user = 'u67307'; // Заменить на ваш логин uXXXXX
$pass = '2532509'; // Заменить на пароль, такой же, как от SSH
$db = new PDO(
    'mysql:host=localhost;dbname=u67307',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
); // Заменить test на имя БД, совпадает с логином uXXXXX


// try {
//     $stmt = $db->prepare("INSERT INTO forms SET (name,email) = ?");
//     $stmt->execute([$_POST['login']]);
//     $stmt->execute([$_POST['email']]);
// } catch (PDOException $e) {
//     print ('Error : ' . $e->getMessage());
//     exit();
// }
// try {
//     $stmt = $db->prepare("INSERT INTO users (name, email,message) VALUES (:login, :email,:message)");

//     $login = $_POST['login'];
//     $email = $_POST['email'];
//     $tel = $_POST['tel'];
//     $stmt->bindParam(':login', $login);
//     $stmt->bindParam(':email', $email);
//     $stmt->bindParam(':message', $tel);
//     $stmt->execute();
// } catch (PDOException $e) {
//     print ('Error : ' . $e->getMessage());
//     exit();
// }



// Подключение к базе данных

// Добавление полей к таблице users
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение значений из формы
    $login = $_POST['login'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $someGroupName = $_POST['someGroupName'];
    $ipl = $_POST['ipl'];
    $bio = $_POST['bio'];
    $checkt = isset ($_POST['checkt']) ? 1 : 0;

    // Добавление значений к полям в таблице users
    $insertUserQuery = "INSERT INTO users (login, tel, email, date, someGroupName, ipl, bio, checkt) 
                        VALUES (:login, :tel, :email, :date, :someGroupName, :ipl, :bio, :checkt)";

    $stmtUser = $pdo->prepare($insertUserQuery);
    $stmtUser->execute([
        'login' => $login,
        'tel' => $tel,
        'email' => $email,
        'date' => $date,
        'someGroupName' => $someGroupName,
        'ipl' => $ipl,
        'bio' => $bio,
        'checkt' => $checkt
    ]);

    echo "Значения успешно добавлены к полям в таблице users.";
}


?>