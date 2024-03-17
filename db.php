<?PHP

$servername = "localhost";
$username = "u67307";
$password = "2532509";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die ("Connection Fialed" . mysqli_connect_error());
} else {
    echo "Good";
}
?>