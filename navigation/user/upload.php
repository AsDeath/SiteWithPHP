<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."connectToDB.php";

define("REPOSITORY", $_SERVER['DOCUMENT_ROOT'].'/');

function reject($entry) {
	$_SESSION['message'] = "<p id='err'>Isset faile $entry</p>".
        "<p id='err'>Please, try again...</p>";
    header('Location: add_form.php');
    exit();
}

function noLen($entry) {
	$_SESSION['message'] = "<p id='err'>Invalid $entry length</p>".
        "<p id='err'>Please, try again...</p>";
    header('Location: add_form.php');
    exit();
}

/*
$NumberCar = $_POST['NumberCar'];
$date = $_POST['date'];
$brand = $_POST['brand'];
$color = $_POST['color'];
$state = $_POST['state'];
$name = $_POST['name'];
$address = $_POST['address'];
$NumberPhone = $_POST['NumberPhone'];
$path = 'images/' . time() . $_FILES['image']['name'];
*/

    if(isset($_POST['NumberCar'])){
        $NumberCar = htmlspecialchars(trim($_POST['NumberCar']));
        if(strlen($NumberCar)<3 or strlen($NumberCar)>10){
            noLen('Number car');
        }
    }else {
		reject("Car number");
	}
    if(isset($_POST['date'])){
        $date = htmlspecialchars(trim($_POST['date']));
        if($date<1980 || $date>date("Y")){
            reject("year");
        }
    }else {
		reject("date");
	}
    if(isset($_POST['brand'])){
        $brand = htmlspecialchars(trim($_POST['brand']));
        if(strlen($brand)<1 or strlen($brand)>30){
            noLen('brand');
        }
    }else {
		reject("brand");
	}
    if(isset($_POST['color'])){
        $color = htmlspecialchars(trim($_POST['color']));
        if(strlen($color)<3 or strlen($color)>20){
            reject('color');
        }
    }else {
		reject("color");
	}
    if(isset($_POST['state'])){
        $state = htmlspecialchars(trim($_POST['state']));
    }else {
		reject("state");
	}
    if(isset($_POST['name'])){
        $name = htmlspecialchars(trim($_POST['name']));
        if(strlen($color)<2 or strlen($color)>50){
            noLen('name');
        }
    } else {
		reject("name");
	}
    if(isset($_POST['address'])){
        $address = htmlspecialchars(trim($_POST['address']));
        if(strlen($address)<3 or strlen($address)>90){
            noLen('address');
        }
    } else {
		reject("address");
	}
	if(isset($_POST['NumberPhone'])){
        $NumberPhone = htmlspecialchars(trim($_POST['NumberPhone']));
        if(strlen($NumberPhone)<5 or strlen($NumberPhone)>30){
			noLen('Phone number');
        }
	} else {
		reject("Phone Number");
	}
    if(isset($_FILES['image'])){
        $filename = $_FILES['image']['name'];
        $filename = str_replace(" ","_",$filename);
        $path = 'images/' . time() . $filename;
        $fileTmpName = $_FILES['image']['tmp_name'];
    	$fi = finfo_open(FILEINFO_MIME_TYPE);
        $mime = (string) finfo_file($fi,$fileTmpName);
        if(strpos($mime,'image')===false) {
            $_SESSION['message'] = '<p id="err">You can upload only images!</p>'.
            '<p id="err">Please, try again...</p>';
			header('Location: add_form.php');
            exit();
        }else {
			if (!move_uploaded_file($_FILES['image']['tmp_name'], REPOSITORY . $path)) {
				$_SESSION['message'] = '<p id="err">Error upload image :( </p>
				<p id="err">Please, try again</p>';
				header('Location: add_form.php');
				exit();
			} else {
				if($_SESSION['login']) $login = $_SESSION['login'];
				$image = "/$path";
				$query = "INSERT INTO `cars`(`id`,`NumberCar`,`date`,`brand`,`color`,`state`,`login`,`name`,`address`,`NumberPhone`,`image`) VALUES (NULL, '$NumberCar','$date','$brand','$color','$state','$login','$name','$address','$NumberPhone','$image')";
    			$result = mysqli_query($connection, $query);
				if(!$result){
					$_SESSION['message'] = '<p id="err">Error upload in DB! :( </p>';
					header('Location: add_form.php');
					exit();
				} else {
					$_SESSION['message'] = '<p id="err">Data was loaded successfully! :) </p>';
					header('Location: add_form.php');
					exit();
				}
			}
		}
	} else {
		reject("image");
	}