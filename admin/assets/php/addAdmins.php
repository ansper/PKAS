<?php
    include('../../../assets/php/connect.php');
    $conn -> query("insert into `admins` (`fullName`, `email`, `password`) VALUE ('$_POST[fullName]', '$_POST[email]', '$_POST[password]')");
    $_POST = array();
    header('Location: ../../admin.php?table=admins');
?>