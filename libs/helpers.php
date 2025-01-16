<?php
function diePage($msg){
    echo "<div style = 'padding: 30px;
    background: #ff9696;
    color: #631414;
    border: 1px solid #ea8181;
    border-radius: 5px; margin: 30px; text-align:center;font-size:20px'>$msg</div>";
    die();
}

function message($msg){
    echo "<div style = 'padding: 30px;
    background:rgb(228, 247, 185);
    color:rgb(45, 72, 7);
    border: 1px solid rgb(237, 243, 195);
    border-radius: 5px; margin: 30px; text-align:center;font-size:20px'>$msg</div>";
}

function isAjaxRequest(){
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
        return true;
    }else{
        return false;
    }
}

function dd($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}

function site_url($uri = '') {
    return BASE_URL . $uri;
}

function redirect($url){
    header("location: $url");
    die();
}
?>