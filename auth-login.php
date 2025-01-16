<?php
include "C:/xampp/htdocs/AirSport/bootstrap/init.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u_email = $_POST["email"];
    $u_password = $_POST["password"];
    if (!empty($u_email) && !empty($u_password)) {
        if(login($u_email,$u_password)){
            redirect(site_url());
        }else{
            dd("اطلاعات شما نادرست است!");
        }
    }
}

include ROOT_PATH . "tpl/tpl-login.php";
?>