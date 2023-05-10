<?php

    $page = $_GET['pages'];

    switch ($page) {
        case 'info':
            header('Location: pages/information/info.html');
            break;
        
        // fill
        case 'administration':
            header('Location: pages/information/');
            break;

        case 'document':
            header('Location: pages/information/');
            break;

        case 'education':
            header('Location: pages/information/');
            break;

        case 'management':
            header('Location: pages/information/');
            break;
        // fill

        case 'news':
            header('Location: pages/news.php');
            break;

        default:
            header('Location: pages/main.php');
            break;
    }

?>