<?php 

$servername = "localhost";
$username = "root";
$password = "";   // your MySQL password (empty if none)
$port = 3307;     // your new port

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=chat_app_db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed : " . $e->getMessage());
}
