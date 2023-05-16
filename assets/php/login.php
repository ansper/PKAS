<?php

    include('connect.php');

    $login = $_POST['login'];
    $password = $_POST['password'];

    if (empty($login) || empty($password)) {
        echo "Заполните все поля";
    } else {
        $result = $conn -> query("select * from admins where email='$login' and password='$password'");
        if($result -> num_rows > 0) {
            session_start();
            $res = $result -> fetch_assoc();
            $_SESSION['login_status'] = true;
            $_SESSION['user_name'] = $res['login'];
            header('Location: ../../admin/admin.php');
        } else {
            header('Location: /');
        }
    }

?>