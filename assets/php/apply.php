<?php

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $patronymic = $_POST['patronymic'];
    $FIO = $name . " " . $surname . " " . $patronymic;

    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $citizenship = $_POST['citizenship'];
    $comment = $_POST['comment'];

    $fileNames = $_FILES['file']['name'];
    $fileTmp = $_FILES['file']['tmp_name'];

    $allFile = '';

    foreach($fileNames as $fileName) {
        $allFile .= $fileName.',';
    }
    for ($i=0; $i < count($fileTmp); $i++) { 
        move_uploaded_file($fileTmp[$i], '../img/apply/'.$fileNames[$i]);
    }
    
    include('./connect.php');

    $conn -> query("insert into `apply` (`fio`, `date`, `gender`, `citizenship`, `file`, `comment`) VALUE ('$FIO', '$date', '$gender', '$citizenship', '$allFile', '$comment')");
    $_POST = array();

    header('Location: /')
    
?>