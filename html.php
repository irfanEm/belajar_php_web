<?php 
$title = "Hello PHP dan HTML";
$body = "Ini adalah Body";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $body ?></h1>
</body>
</html>