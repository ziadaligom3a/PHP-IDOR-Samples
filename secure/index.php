<?php
session_start();
require './get_secret.php';
require './get_id.php';
if(!$_SESSION['username']){
    header('Location: ./login.php');
}
if($_SERVER['REQUEST_METHOD'] == "GET" || $_GET['id']){
   $id = $_GET['id'];
    $getId = getId($_SESSION['username']);
    if($getId == $id){
        print_r(getSecret($id));
    }else{
        echo "You're not allowed to see this one dude!";
    }
}
else{
    echo "the Secret should be printed here!";

}
?>