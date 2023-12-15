<?php
require 'database.php';

function getSecret($userId){
    global $conn;
    $statement = $conn->prepare("SELECT secret FROM users where ID = ?");
    $statement->bind_param('i',$userId);
    $statement->execute();
    $statement->bind_result($secret);
    $statement->fetch();
    $statement->close();
    // print_r($password);
    if($secret){
        return $secret;
    }else{
        return false;
        
    }
}
?>