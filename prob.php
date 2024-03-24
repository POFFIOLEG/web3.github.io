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
    $stmt = $db->prepare("INSERT INTO programming_languages (lang_name) VALUES (:lang_name)");
    $lange = $_POST['lange'];

    $kl = implode($Languages);
    $stmt->bindParam(':lang_name', $kl);
    $stmt->execute();
    $sql = "INSERT INTO user_languages (user_id, lang_id) 
        SELECT u.id_name AS user_id, p.id_names AS lang_id 
        FROM users u
        JOIN user_languages upl ON u.id_name = upl.user_id
        JOIN programming_languages p ON p.id_names = upl.lang_id";
    $stmt = $db->prepare($sql);

} catch (PDOException $e) {
    print ('Error : ' . $e->getMessage());
    exit();
}

?>