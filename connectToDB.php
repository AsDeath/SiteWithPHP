<?php
//mysqli_connect() - установка соединения
$host="localhost";
$user="root";
$password="root";
$dbname="myDB";

$connection=mysqli_connect($host, $user, $password, $dbname) or mysqli_connect_error();

if(!$connection) {
echo "Не возможно установить соединение с БД";
}

mysqli_set_charset($connection, 'utf-8');

$query='CREATE TABLE IF NOT EXISTS `users`(`id` INT UNSIGNED NOT NULL AUTO_INCREMENT, `login` TEXT NOT NULL, `password` TEXT NOT NULL, `email` TEXT NOT NULL, `hash` TEXT NOT NULL, `email_confirmed` BIT NOT NULL, `time` TEXT NOT NULL, `date` TEXT NOT NULL, PRIMARY KEY(`id`))';
$result=mysqli_query($connection, $query);

if ($result===FALSE) {
    echo "Error Create Table 'users'";
    return;
};

$query='CREATE TABLE IF NOT EXISTS `cars` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT, `NumberCar` TEXT NOT NULL, `date` TEXT NOT NULL, `brand` TEXT NOT NULL, `color` TEXT NOT NULL, `state` TEXT NOT NULL, `login` TEXT NOT NULL, `name` TEXT NOT NULL, `address` TEXT NOT NULL, `NumberPhone` TEXT NOT NULL, `image` TEXT NOT NULL, PRIMARY KEY(id))';
$result=mysqli_query($connection,$query);

if ($result===FALSE) {
    echo "Error Create Table 'cars'";
    return;
};

//mysqli_close($connection);
?>