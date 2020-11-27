<?php
require_once 'db.php'; //підключення скрипту
$p=$_POST['Password'];
$f=$_POST['first_name'];
$last=$_POST['Last_name'];
$e=$_POST['Email'];
$role=$_POST['role'];
$sql = "INSERT INTO users (first_name, last_name, email,password,role_id) VALUES ('$f', '$last', '$e','$p','$role')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      header('Location: index.php');
} 
mysqli_close($conn);
?>