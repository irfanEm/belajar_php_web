<?php 
session_start();

if($_SESSION['login'] != true) {
    header('Location: /session/login.php');
    exit();
}

$say = "Hay " . $_SESSION['username_login'];

?>

<html>
<body>
    <h1><?= $say ?></h1>
    <a href="/session/logout.php">Logout</a>
</body>
</html>