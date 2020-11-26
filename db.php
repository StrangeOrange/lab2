<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "users_lb"; //повинна бути створена в субд

// Встановлення з'єднання 
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn,'utf8');
// Перевірка з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

