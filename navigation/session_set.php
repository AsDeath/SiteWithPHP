<?php
    session_start(); 
    require $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."connectToDB.php";

    function incorrect() {
        $_SESSION['message'] = '<p id="err">Incorrect login or password!</p>
        <p id="err">Please, sign-in again...</p>';
        header('Location: login.php');
        exit();
    }

    if(isset($_POST['login']) && $_POST['login']!=""){
        $login = trim($_POST['login']);
        if(!ctype_alnum($login) or strlen($login)<3 or strlen($login)>30 ){
            incorrect();
        } else{
            $query = "SELECT * FROM `users` WHERE `login`='$login'";
            $result=mysqli_query($connection, $query);
            $num=mysqli_num_rows($result);
            if($num>0) {
                if(isset($_POST['password'])){
                    $pass = trim($_POST['password']);
                    if(!ctype_alnum($pass) or strlen($pass)<3 or strlen($pass)>30){
                        incorrect();
                    }else{
                        $query = "SELECT `password` FROM `users` WHERE `login`='$login'";
                        $result=mysqli_query($connection, $query);
                        $num=mysqli_fetch_row($result);
                        if(password_verify($pass,$num[0])){
                            $_SESSION['login'] = $login;
                            //$_SESSION['password'] = $hashpass;
                            header('Location: /navigation/user/Index.php');
                        } else {
                            incorrect();
                        }
                    }
                }else {
                    incorrect();
                }
            } else {
                incorrect();
            }
        }
    } else {
        header('Location: login.php');
    }
?>