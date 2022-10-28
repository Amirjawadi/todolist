<?php
function gettasks(){
    return [1,2,3,4,5];
}

function getfolders(){

    global $pdo;
    $sql = "select * from folders";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll();
    return $records;

}