<?php

if( isset($_GET['key']) && $_GET['key'] == 'rahasia') {
    header('Content-Disposition: attachment; filename="header.png"');
    header('Content-Type: image/png');
    readfile(__DIR__ . '/assets/img/header.png');
    exit();
} else {
    echo "invalid Key";
    exit();
}