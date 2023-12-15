<?php
session_start();
require './get_secret.php';
if(!$_SESSION['username']){
    header('Location: ./login.php');
}
if($_SERVER['REQUEST_METHOD'] == "GET" || $_GET['id']){
   $id = $_GET['id'];
    print_r(getSecret($id));
}else{
    echo "the Secret should be printed here!";

}
?>