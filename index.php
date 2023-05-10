<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '':
    case '/':
        require __DIR__ . '/pages/main.php';
        break;
    
    case '/news':
        require __DIR__ . '/pages/news.php';
        break;

    case '/info':
        require __DIR__ . '/pages/information/info.html';
        break;

    case '/admin':
        require __DIR__ . '/admin/admin.php';
        break;

    default:
        require __DIR__ . '/pages/404.html';
        break;
}

?>