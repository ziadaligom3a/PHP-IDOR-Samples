<?php

require 'database.php';

function validateUser($username, $password){
    global $conn;
    $statement = $conn->prepare("SELECT ID, username, password FROM users where username = ?");
    $statement->bind_param('s',$username);
    $statement->execute();
    $statement->bind_result($id, $dbUsername,$dbPassword);
    $statement->fetch();
    $statement->close();
    // print_r($password);
    if($dbUsername && password_verify($password, $dbPassword)){
        return $id;
    }else{
        return false;
        
    }
    
}
?>
