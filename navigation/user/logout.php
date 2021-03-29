<?php
    session_start();
    if(isset($_SESSION['login'])){
        unset($_SESSION['login']);
        unset($_SESSION['password']);
        session_destroy();
    }
    header('Location: /Index.php');
?>