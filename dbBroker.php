<?php
$host = "127.0.0.1"; // UMESTO 'localhost'
$user = "root";
$pass = "";
$db = "kolokvijumi";

$conn = new mysqli($host, $user, $pass, $db,3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "<script>console.log('Connesction successful')</script>";
}
?>