<?php
session_start();
if(!$_SESSION['logged_in']){
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Page de bienvenue</title>
</head>
<body>
  <h1>Bienvenue !</h1>
  <p>Vous êtes maintenant connecté.</p>
</body>
</html>
