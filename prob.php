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


    $stmt->bindParam(':lang_name', $lange);
    // $stmt->bindParam(':phone', $tel);
    // $stmt->bindParam(':email', $email);
    // $stmt->bindParam(':birth_date', $date);
    // $stmt->bindParam(':gender', $someGroupName);
    // $stmt->bindParam(':bio', $bio);
    // $stmt->bindParam(':contract_agreed', $checkt);
    // $stmt = $db->prepare("INSERT INTO programming_languages (lang_name) VALUES (:lang_name)");
    // $izuk = $_POST['izuk'];
    // $stmt->bindParam(':lang_name', $izuk); Делать дальше через foreach
    $stmt->execute();
} catch (PDOException $e) {
    print ('Error : ' . $e->getMessage());
    exit();
}
// $Languages = $_POST['lange'];
// foreach ($Languages as $lange) {
//     $stmt = $db->prepare("INSERT INTO programming_languages (lang_id, lang_name) VALUES (:lang_id, :lang_name)");
//     // $lange[] = $_POST['lange'];
//     // $kl = implode($Languages);
//     $stmt->bindParam(':lang_name', $kl);
//     // $stmt->execute(['user_id' => $userId, 'lang_id' => $langId]);
// }





?>