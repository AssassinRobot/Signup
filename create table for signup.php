<?php 
$servername = "localhost";
$username = "root";
$password = "";
$DatabaseName = "users";
try {
    $connect = new PDO("mysql:host=$servername;dbname=$DatabaseName",$username,$password);
    $connect->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $CreateTable = "CREATE TABLE SingUp(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(15),
    phonenumber VARCHAR(11),
    email VARCHAR(50),
    password VARCHAR(22))";
    $connect->exec($CreateTable);
    echo"جدول ساخته شد";
} catch (PDOException $value) {
    echo $value->getMessage();
}
$connect= null;





?>