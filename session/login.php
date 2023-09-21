<?php 
session_start();

if($_SESSION['login'] == true) {
    header('Location: /session/member.php');
    exit();
}

$error = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST['username'] == 'balqis' && $_POST['password'] == 'balqis') {
        $_SESSION['login'] = true;
        $_SESSION['username_login'] = 'balqis';
        header('Location: /session/member.php');
        exit();
    } else {
        $error = "Login Gagal!";
    }
}

?>

<html>
    <body>
        <?php if($error != "") { ?>
            <h2> <?= $error ?></h2>
        <?php } ?>
        <h1>Login</h1>
        <form action="" method="post">
        <label for="username">Username : 
            <input type="text" name="username" id="username">
        </label>
        <br>
        <label for="password">Password : 
            <input type="password" name="password" id="password">
        </label>
        <br>
        <input type="submit" value="Login">
    </form>
    </body>
</html>