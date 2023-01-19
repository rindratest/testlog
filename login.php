<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$correct_username = "admin";
$correct_password = "password";

if($username == $correct_username && $password == $correct_password){
  $_SESSION['logged_in'] = true;
  header("Location: welcome.php");
}else{
  $_SESSION['logged_in'] = false;
  echo "Nom d'utilisateur ou mot de passe incorrect. Veuillez réessayer.";
}
?>
