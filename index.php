<?php
include "C:/xampp/htdocs/AirSport/bootstrap/init.php";

if (!isLoggedIn()){
    header("location: auth-login.php");
}
if (isset($_GET['logout'])) {
    logOut();
}
$products = getProducts();

include "tpl/tpl-main.php";
?>