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
try {
    $stmt = $db->prepare("INSERT INTO users (full_name, phone,email,birth_date,gender,bio,contract_agreed) VALUES (:full_name, :phone,:email,:birth_date,:gender,:bio,:contract_agreed)");
    $login = $_POST['login'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $date = $_POST['date'];
    $someGroupName = $_POST['someGroupName'];
    $bio = $_POST['bio'];
    $checkt = $_POST['checkt'];

    $stmt->bindParam(':full_name', $login);
    $stmt->bindParam(':phone', $tel);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':birth_date', $date);
    $stmt->bindParam(':gender', $someGroupName);
    $stmt->bindParam(':bio', $bio);
    $stmt->bindParam(':contract_agreed', $checkt);
    $stmt->execute();
} catch (PDOException $e) {
    print ('Error : ' . $e->getMessage());
    exit();
}
// Первоначальное подключение к базе данных (код остается тем же)
// ...

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение значения языка программирования из формы
    $langName = $_POST['langName'];

    // Добавление значения в таблицу programming_languages
    $insertLangQuery = "INSERT INTO programming_languages (lang_name) VALUES (:lang_name)";

    $stmtLang = $pdo->prepare($insertLangQuery);
    $stmtLang->execute(['lang_name' => $izuk]);

    echo "Значение успешно добавлено в таблицу programming_languages.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение значения пользователя и языка программирования из формы
    $userId = $_POST['userId']; // Предположим, что у вас есть переменная $userId с ID пользователя
    $langId = $_POST['langId']; // Предположим, что у вас есть переменная $langId с ID языка программирования

    // Добавление связи в таблицу user_languages
    $insertUserLangQuery = "INSERT INTO user_languages (user_id, lang_id) VALUES (:userId, :langId)";

    $stmtUserLang = $pdo->prepare($insertUserLangQuery);
    $stmtUserLang->execute(['userId' => $userId, 'langId' => $langId]);

    echo "Связь успешно добавлена в таблицу user_languages.";
}

?>