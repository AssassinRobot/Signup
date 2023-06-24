<?php 
$servername ="localhost";
$username = "root";
$password = "";
try {
    $connect = new PDO("mysql:host=$servername",$username,$password);
    $connect->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    $CreateDtabase = "CREATE DATABASE users";
    $connect->exec($CreateDtabase);
    echo"دیتابیس ساخته شد";
} catch (PDOException $value) {
    echo $value->getMessage();
}
$connect= null;
?>