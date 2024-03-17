<?php
$servername = "kubsu-dev.ru";
$username = "u67307";
$password = "2532509";
$dbname = "forms";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die ("Connection Fialed" . mysqli_connect_error());
} else {
    echo "Good";
}
?>