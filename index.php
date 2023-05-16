<?php

$request = $_SERVER['REQUEST_URI'];

if(preg_match('/^\/news\/([0-9]+)/', $request, $matches)) {
    require __DIR__ . '/pages/newspage.php';
} else {
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
    
        case '/apply':
            require __DIR__ . '/pages/enrollee/apply.html';
            break;

        case '/login':
            require __DIR__ . '/pages/login.html';
            break;
    
        default:
            require __DIR__ . '/pages/404.html';
            break;
    }
}


?>