
<?php
    session_start();
    require './validate_user.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo password_hash('ziad',PASSWORD_DEFAULT);
        if(validateUser($username, $password)){

            $_SESSION['username'] = $username;
            $id = validateUser($username,$password);
            header("Location: ./index.php?id=$id");
        }else{
            echo "FALSE";
        }
    }   

?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
}  
button {   
          
       width: 100%;  
        color: black;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: grey;  
    }   
</style>   
</head>    
<body>    
    <center> <h1> IDOR Login </h1> </center>   
    <form method="POST">  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit">Login</button>   
          
        </div>   
    </form>     
</body>     
</html>  