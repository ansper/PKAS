<?php
    include('../../../assets/php/connect.php');
    $conn -> query("insert into `teachers` (`fullName`, `post`, `education`, `direction`, `academic`, `training`, `allExp`, `exp`, `lesson`, `ugs`) VALUE ('$_POST[fullName]', '$_POST[post]', '$_POST[education]', '$_POST[direction]', '$_POST[academic]', '$_POST[training]', '$_POST[allExp]', '$_POST[exp]', '$_POST[lesson]', '$_POST[ugs]')");
    $_POST = array();
    header('Location: ../../admin.php?table=teachers');
?>