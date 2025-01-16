<?php
function getProducts(){
    global $pdo;
    $sql = "SELECT * from products";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $results;
}
?>