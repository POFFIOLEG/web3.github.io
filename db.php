<?PHP

$user = 'u67307';
$pass = '2532509';
$db = new PDO(
    'mysql:host=localhost;dbname=u67307',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

// try {
//     $stmt = $db->prepare("INSERT INTO users (full_name, phone,email,birth_date,gender,bio,contract_agreed) VALUES (:full_name, :phone,:email,:birth_date,:gender,:bio,:contract_agreed)");
//     $login = $_POST['login'];
//     $email = $_POST['email'];
//     $tel = $_POST['tel'];
//     $date = $_POST['date'];
//     $someGroupName = $_POST['someGroupName'];
//     $bio = $_POST['bio'];
//     $checkt = $_POST['checkt'];

//     $stmt->bindParam(':full_name', $login);
//     $stmt->bindParam(':phone', $tel);
//     $stmt->bindParam(':email', $email);
//     $stmt->bindParam(':birth_date', $date);
//     $stmt->bindParam(':gender', $someGroupName);
//     $stmt->bindParam(':bio', $bio);
//     $stmt->bindParam(':contract_agreed', $checkt);
//     // $stmt = $db->prepare("INSERT INTO programming_languages (lang_name) VALUES (:lang_name)");
//     // $izuk = $_POST['izuk'];
//     // $stmt->bindParam(':lang_name', $izuk); Делать дальше через foreach
//     $stmt->execute();
// } catch (PDOException $e) {
//     print ('Error : ' . $e->getMessage());
//     exit();
// }

// Подключение к базе данных


// Создание таблиц

// Обработка данных из HTML формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = 1; // Здесь нужно получить ID пользователя, либо использовать текущего пользователя

    $favoriteLanguages = $_POST['izuk[]'];

    // Сохранение выбранных языков программирования в таблицу user_languages
    foreach ($favoriteLanguages as $langId) {
        $stmt = $pdo->prepare("INSERT INTO user_languages (user_id, lang_id) VALUES (:user_id, :lang_id)");
        $stmt->execute(['user_id' => $userId, 'lang_id' => $langId]);
    }

    echo "Data inserted successfully!";
}


?>