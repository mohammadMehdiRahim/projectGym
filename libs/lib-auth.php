<?php
function getUserByEmail($email){
    global $pdo;
    $sql = "SELECT * FROM users WHERE email = :email"; 
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["email"=>"$email"]);
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $result[0] ?? null;
}

function login($email,$password){
    $user = getUserByEmail($email);
    if (is_null($user)){
        return false;
    }
    if(password_verify($password,$user->password)){
        $_SESSION['login'] = $user;
        return true;
    }else{
        return false;
    }
}

function logOut(){
    unset($_SESSION['login']);
}

function isLoggedIn(){
    return isset($_SESSION['login']) ? true : false;
}

function register($username,$password,$email){
    global $pdo;
    $passhash = password_hash($password,PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (username,password,email) values(:username,:password,:email)"; 
    $stmt = $pdo->prepare($sql);
    $stmt->execute([":username"=>$username,":password"=>$passhash,":email"=>$email]);
    if($stmt->rowCount()>0){
        return true;
    }else{
        return false;
    }
}
?>