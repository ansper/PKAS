<?php
    $name = $_FILES['src']['name'];
    $tmp = $_FILES['src']['tmp_name'];
    move_uploaded_file($tmp, '../../../assets/img/news/'.$name);

    include('../../../assets/php/connect.php');
    $conn -> query("insert into `news` (`title`, `description`, `date`, `img`) VALUE ('$_POST[title]', '$_POST[description]', '$_POST[date]', '$name')");
    $_POST = array();
    header('Location: ../../admin.php?table=news');
?>