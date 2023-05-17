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

        case '/administtration':
            require __DIR__ . '/pages/information/administtration.html';
            break;

        case '/agreement':
            require __DIR__ . '/pages/information/agreement.html';
            break;

        case '/availenvir':
            require __DIR__ . '/pages/information/availenvir.html';
            break;

        case '/distant':
            require __DIR__ . '/pages/information/distant.html';
            break;

        case '/documents':
            require __DIR__ . '/pages/information/documents.html';
            break;

        case '/dormitories':
            require __DIR__ . '/pages/information/dormitories.html';
            break;

        case '/education':
            require __DIR__ . '/pages/information/education.html';
            break;

        case '/employement':
            require __DIR__ . '/pages/information/employement.html';
            break;

        case '/finance':
            require __DIR__ . '/pages/information/finance.html';
            break;

        case '/inspection':
            require __DIR__ . '/pages/information/inspection.html';
            break;

        case '/internrules':
            require __DIR__ . '/pages/information/internrules.html';
            break;

        case '/mattech':
            require __DIR__ . '/pages/information/mattech.html';
            break;

        case '/memos':
            require __DIR__ . '/pages/information/memos.html';
            break;

        case '/navigator':
            require __DIR__ . '/pages/information/navigator.html';
            break;

        case '/ordenroll':
            require __DIR__ . '/pages/information/ordenroll.html';
            break;

        case '/paidservices':
            require __DIR__ . '/pages/information/paidservices.html';
            break;

        case '/reception':
            require __DIR__ . '/pages/information/reception.html';
            break;

        case '/receptrans':
            require __DIR__ . '/pages/information/receptrans.html';
            break;

        case '/recommendations':
            require __DIR__ . '/pages/information/recommendations.html';
            break;

        case '/schedule':
            require __DIR__ . '/pages/information/schedule.html';
            break;

        case '/scholarship':
            require __DIR__ . '/pages/information/scholarship.html';
            break;

        case '/socialpartn':
            require __DIR__ . '/pages/information/socialpartn.html';
            break;

        case '/structure':
            require __DIR__ . '/pages/information/structure.html';
            break;

        case '/support':
            require __DIR__ . '/pages/information/support.html';
            break;

        case '/teachers':
            require __DIR__ . '/pages/information/teachers.html';
            break;
    
        default:
            require __DIR__ . '/pages/404.html';
            break;
    }
}


?>