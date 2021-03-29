<?php
    session_start();
    require $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."connectToDB.php";

    function reject($entry) {
        $_SESSION['message'] = "<p id='err'>Nedopustimoe znachenie $entry</p>".
        "<p id='err'>Please, sign-up again...</p>";
        header('Location: registration.php');
        exit();
    }

    function noLen($entry) {
        $_SESSION['message'] = "<p id='err'>Invalid $entry length</p>".
        "<p id='err'>Please, sign-up again...</p>";
        header('Location: registration.php');
        exit();
    }

    function alExist($entry) {
        $_SESSION['message'] = "<p id='err'>This $entry already exist</p>".
        "<p id='err'>Please, sign-up again...</p>";
        header('Location: registration.php');
        exit();
    }

    function notEqual() {
        $_SESSION['message'] = '<p id="err">Not Equal Passwords</p>
        <p id="err">Please, sign-up again...</p>';
        header('Location: registration.php');
        exit();
    }

    

    if(isset($_POST['login']) && $_POST['login']!="") {
        $login=trim($_POST['login']);
        if(!ctype_alnum($login)) {
            reject('Login');
        } else{
            if(strlen($login)<3 or strlen($login)>30){
                noLen('login');
            } else {
                //check login
                $query = "SELECT * FROM `users` WHERE `login`='$login'";
                $result=mysqli_query($connection, $query);
                $num=mysqli_num_rows($result);
                if($num>0) {
                    alExist('login');
                } else {
                    if(isset($_POST['password1'])) {
                        $passw1=trim($_POST['password1']);
                        if(!ctype_alnum($passw1)) {
                            reject('Password');
                        } else {
                            if(strlen($passw1)<3 or strlen($passw1)>30){
                                noLen('password');
                            } else {
                                if(isset($_POST['password2'])){
                                    $passw2=trim($_POST['password2']);
                                    if(!ctype_alnum($passw2)) {
                                        reject('Password Confirmation');
                                    } else {
                                        if($passw1!=$passw2){
                                            notEqual();
                                        } else {
                                            if(isset($_POST['email'])){
                                                $email=strip_tags(trim($_POST['email']));
                                                if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                                                    reject('Email');
                                                } else {
                                                    $query = "SELECT * FROM `users` WHERE `email`='$email'";
                                                    $result=mysqli_query($connection, $query);
                                                    $num=mysqli_num_rows($result);
                            
                                                    if($num == 0){
                                                        $pass = password_hash($passw1, PASSWORD_DEFAULT);
                                                        $hash = md5($email);
                                                        $time = date("h:i:s");
                                                        $date = date("D/M/Y");
                                                        //$parse_url = parse_url(strip_tags($_SERVER['REQUEST_URI']) , PHP_URL_PATH);
                            
                                                        $headers  = "MIME-Version: 1.0\r\n";
                                                        $headers .= "Content-type: text/html; charset=utf-8\r\n";
                                                        $headers .= "To: <$email>\r\n";
                                                        $headers .= "From: <skaragachan@mail.ru>\r\n";
                            
                                                        $message = '
                                                            <html>
                                                            <head>
                                                            <title>Подтвердите Email</title>
                                                            </head>
                                                            <body>
                                                            <p>Что бы подтвердить Email, перейдите по <a href="/navigation/confirmedEmail.php?hash=' . $hash . '">ссылкe</a></p>
                                                            </body>
                                                            </html>
                                                        ';
                                                        mysqli_query($connection, "INSERT INTO `users` (`id`, `login`, `password`, `email`, `hash`, `email_confirmed`,`time`,`date`) VALUES (NULL,'$login','$pass','$email', '$hash', 1, '$time','$date')");
                                                        $sendMail = mail($email, "Подтвердите Email на сайте", $message,$headers);
                                                        if ($sendMail) {
                                                            // Если да, то выводит сообщение
                                                            $_SESSION['message'] = '
                                                            <div align ="center" class="con">
                                                                    <div class="head-form">
                                                                        <h2>Congratulations!</h2>
                                                                    </div>
                                                                    <div class="field-set">
                                                                        <p>Registration completed successfully!</p>
                                                                        <p>Please confirm your email :)</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            ';
                                                            header('Location: registration.php');
                                                        } else {
                                                            $_SESSION['message'] = '
                                                            <p id="err">Mail dont send!</p>
                                                            ';
                                                            header('Location: registration.php');
                                                        }
                                                    }else{
                                                        alExist('email');
                                                    }
                                                }
                                            } else {
                                                reject('email');
                                            }
                                        }
                                    }
                                } else {
                                    reject('Confirm password');
                                }
                            }
                        }
                    } else {
                        reject('password');
                    }
                }
            }
        }
    } else {
        header('Location: registration.php');
    };      
?>