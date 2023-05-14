<?php

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $img = $_POST['img'];

    $table = $_POST['table'];

    include('../../../assets/php/connect.php');

    $sql = "UPDATE $table SET title='$title', description='$description', date='$date', img='$img' WHERE id=$id";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    
?>