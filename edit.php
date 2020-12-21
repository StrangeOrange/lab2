<?php
session_start();
$id=$_SESSION['id'];
$role=$_SESSION['role_id'];
$ind=$_SESSION['ind'];
require_once 'db.php'; //підключення скрипту

if($role == 1){
    $name=$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    
    move_uploaded_file($tmp_name,"public/images/".$name);
    $newname = '../lab2/public/images/'.$name;
    $p=$_POST['password'];
    $f=$_POST['first_name'];
    $last=$_POST['Last_name'];
    $e=$_POST['email'];
    $r=$_POST['role'];
    if (!isset($_FILES['image'])){
    $sql = "UPDATE users SET first_name = '$f', last_name ='$last', email ='$e' ,password ='$p',photo ='$newname', role_id = '$r' WHERE id = '$ind'";
    }
    else
    {
        $sql = "UPDATE users SET first_name = '$f', last_name ='$last', email ='$e' ,password ='$p', role_id = '$r' WHERE id = '$ind'"; 
    }
    if (mysqli_query($conn, $sql)) {
        if($role == 1){
        header('Location: admin.php');}
        else{
        header('Location: acc_login.php');
        }
    }
    else{
        echo "error!";
    } 
    mysqli_close($conn);
}
else{
$name=$_FILES['image']['name'];
$tmp_name=$_FILES['image']['tmp_name'];

move_uploaded_file($tmp_name,"public/images/".$name);
$newname = '../lab2/public/images/'.$name;
$p=$_POST['password'];
$f=$_POST['first_name'];
$last=$_POST['Last_name'];
$e=$_POST['email'];
if (!isset($_FILES['image'])){
    $sql = "UPDATE users SET first_name = '$f', last_name ='$last', email ='$e' ,password ='$p',photo ='$newname' WHERE id = '$ind'";
    }
    else
    {
        $sql = "UPDATE users SET first_name = '$f', last_name ='$last', email ='$e' ,password ='$p' WHERE id = '$ind'"; 
    }
if (mysqli_query($conn, $sql)) {
    header('Location: acc_login.php');
} 
mysqli_close($conn);
}
?>


