<?php

if(!isset($_GET['name'])|| $_GET['name'] =="")
{
    http_response_code(400);
    echo "name required !";
    exit();
}
$say = "Haloo " . htmlspecialchars($_GET['name']);
?>

<html>
    <body>
        <h1><?= $say ?></h1>
    </body>
</html>