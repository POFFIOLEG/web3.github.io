<?PHP

$user = 'u67307';
$pass = '2532509';
$db = new PDO(
    'mysql:host=localhost;dbname=u67307',
    $user,
    $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

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
    $user_id = $db->lastInsertId();
    $stmt = $db->prepare("INSERT INTO user_languages (user_id, language) VALUES (:user_id,:language)");
    $stmt->bindParam(':user_id', $user_id);
    $Languages = $_POST['lange'];
    foreach ($Languages as $language) {
        $kl = implode($Languages);
        $stmt->bindParam(':language', $kl);
        $stmt->execute();
    }
} catch (PDOException $e) {
    print ('Error : ' . $e->getMessage());
    exit();
}

$Languages = $_POST['lange'];
foreach ($Languages as $lange) {
    $stmt = $db->prepare("INSERT INTO programming_languages (lang_id, lang_name) VALUES (:lang_id, :lang_name)");
    $stmt->bindParam(':lang_name', $kl);
}

?>