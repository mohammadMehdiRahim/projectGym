<?php
include "C:/xampp/htdocs/AirSport/bootstrap/init.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u_username = $_POST["username"];
    $u_password = $_POST["password"];
    $u_email = $_POST['email'];
    if (!empty($u_username) && !empty($u_password) && !empty($u_email)) {
        if(register($u_username,$u_password,$u_email)){
            redirect("auth-login.php");
        }else{
            dd("ثبت نام شما به مشکل برخورد کرد");
        }
    }
}
include ROOT_PATH . "tpl/tpl-signup.php";
?>