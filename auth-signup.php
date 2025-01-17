<?php
include "C:/xampp/htdocs/AirSport/bootstrap/init.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u_username = $_POST["username"];
    $u_password = $_POST["password"];
    $u_email = $_POST['email'];
    if (!empty($u_username) && !empty($u_password) && !empty($u_email)) {
        if (!filter_var($u_email,FILTER_VALIDATE_EMAIL)) {
            diePage("ایمیل وارد شده صحیح نمی باشد");
        }
        if (doesUserExist($u_email)) {
            diePage("کاربر از قبل وجود دارد");
        }
        if(register($u_username,$u_password,$u_email)){
            redirect("auth-login.php");
        }else{
            diePage("ثبت نام شما به مشکل برخورد کرد");
        }
    }else{
        diePage("لطفا اطلاعات را بصورت کامل وارد کنید");
    }
}
include ROOT_PATH . "tpl/tpl-signup.php";
?>