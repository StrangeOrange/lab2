<?php
session_start();
require_once 'db.php'; //підключення скрипту
$e=$_POST['Email'];
$p=$_POST['Password'];
    if (count($_POST)>0) {
        //potential sql injection, 
        $res = mysqli_query ($conn, "SELECT * FROM `users` WHERE email = '$e' AND password = '$p' ");
        $row = mysqli_fetch_array($res);
        if (is_array($row)){
            $_SESSION['id']=$row['id'];
            $_SESSION['role_id'] = $row['role_id'];
            $_SESSION['email'] = $row['email'];
            if($_SESSION['role_id'] == 1){
                header('Location: acc_admin.php');
            }
            else{
                header('Location: acc.php');
            }
} 
else {
    header('Location: error_login.php');
   }
}
?>