<?php

$servername = "localhost";
$username = "zix";
$password = "whoamizix";
$dbname = "idor";

$conn = new mysqli($servername, $username,$password, $dbname);

if($conn->connect_error){
     die("Connection error" . $conn->connect_error);
}

?>