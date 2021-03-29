<?php
    session_start();
    require $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."connectToDB.php";
    
    if(empty($_GET['id'])) exit();

    $id = $_GET['id'];

    $query = "SELECT `image` FROM `cars` WHERE `cars`.`id`=$id";
    $result = mysqli_query($connection,$query);
    if($result){
        $num = mysqli_num_rows($result);
        if($num>0){
            $pathImage = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $path = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.$pathImage['image'];
            if(file_exists($path)){
                unlink($path);
            }else{
                $_SESSION['message'] = '<p id="err">Image saved</p>';
            }
        }else {
            $_SESSION['message'] = '<p id="err">No num</p>';
        }
    } else {
        $_SESSION['message'] = '<p id="err">Error result sql</p>';
    }

    $query = "DELETE FROM `cars` WHERE `cars`.`id`=$id";
    $result = mysqli_query($connection,$query);

    if($result){
        if(isset($_SESSION['message'])) {
            $_SESSION['message'] = $_SESSION['message'].'<p id="err">You have successfully deleted post! :)</p>';
        } else {
            $_SESSION['message'] = '<p id="err">You have successfully deleted post! :)</p>';
        }
    }else{
        if(isset($_SESSION['message'])) {
            $_SESSION['message'] = $_SESSION['message'].'<p id="err">Error: post did not deleted :(</p>';
        } else {
            $_SESSION['message'] = '<p id="err">Error: post did not deleted :(</p>';
        }
    }
    header("Location: /navigation/user/profile.php");
    exit();

?>