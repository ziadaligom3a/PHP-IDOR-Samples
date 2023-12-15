<?php
require 'database.php';


function getId($username){
    global $conn;
    $statement = $conn->prepare("SELECT ID FROM users where username = ?");
    $statement->bind_param('s',$username);
    $statement->execute();
    $statement->bind_result($id);
    $statement->fetch();
    $statement->close();
    if($id){
        return $id;
    }else{
        return false;
        
    }
}

?>