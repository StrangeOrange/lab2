<?php
session_start();
$id=$_SESSION['id'];

require_once 'db.php'; //підключення скрипту
$name=$_FILES['image']['name'];
$tmp_name=$_FILES['image']['tmp_name'];

move_uploaded_file($tmp_name,"public/images/".$name);
$newname = '../lab2/public/images/'.$name;
 $p=$_POST['password'];
$f=$_POST['first_name'];
$last=$_POST['Last_name'];
$e=$_POST['email'];
$sql = "UPDATE users SET first_name = '$f', last_name ='$last', email ='$e' ,password ='$p',photo ='$newname' WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    header('Location: acc_login.php');
} 
mysqli_close($conn);

?>


