<?php
session_start();
$id=$_SESSION['id'];
require_once 'db.php';
$sql = "DELETE FROM users WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    header('Location: out.php');
}
else{
    echo "error!";
} 
mysqli_close($conn);

?>