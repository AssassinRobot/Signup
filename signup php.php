<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$DatabaseName = "users";
$connect = mysqli_connect($servername,$username,$password,$DatabaseName);
if (!$connect) {
     die(mysqli_connect_error());
}
if (isset($_POST["register"])) {
    $data = $_POST['data'];
    if($data["username"] != "" or $data["phonenumber"] != "" or $data["email"] != "" or $data["password"] != "" or $data["repassword"] != ""){
        if (strlen(($data["username"])) > 15) {
            header("location:signup.php?username=15");
            exit;
        }
        else {
            if (strlen(($data["phonenumber"]))== 11) {
                if (strlen($data["email"])>50) {
                    header("location:signup.php?email=30");
                    exit;
                }
                else {
                    if (strlen($data["password"]) < 8) {
                    header("location:signup.php?pass=8");
                    exit;
                    }
                    elseif(strlen($data["password"]) > 22){
                    header("location:signup.php?much=30");
                    exit;
                    }
                    else {
                        if ($data["password"] == $data["repassword"]) {
                            $username = $data["username"];
                            $phonenumber = $data["phonenumber"];
                            $email = $data["email"];
                            $password = $data["password"];
                            $insert = "INSERT INTO `signup`(`username`, `phonenumber`, `email`, `password`) VALUES ('$username', '$phonenumber', '$email', '$password');";
                            mysqli_query($connect,$insert);
                            $select="SELECT id from `signup` WHERE `username`= $username";
                            $_SESSION["id"] = mysqli_query($connect,$select);
                            mysqli_close($connect);
                            header("location:Home after signup.php?");
                        }
                        else {
                            header("location:signup.php?uneqi=7");
                            exit;
                            
                        }
                    }
                }
            }
            else {
                header("location:signup.php?eleven=11");
                exit;
            }  
        }
        
    }
    else {
        header("location:signup.php?empty=0");
        exit;
    }
}
?>