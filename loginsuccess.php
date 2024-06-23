<?php

session_start();
include("connection.php");


if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $selectQuery = "SELECT * FROM salesusers WHERE username='$username' AND password='$password' and login='true'";
    $selectResult = mysqli_query($con, $selectQuery);
    
     if (mysqli_num_rows($selectResult) > 0) {
        
         $row = mysqli_fetch_assoc($selectResult);
        
        if($row['username'] == $username && $row['password'] == $password) {
         
                $_SESSION['username'] = $username;
                      
                header("Location: dashboard.php");
                      
        }
           
    } else {
      
         header("Location: index.php");
     
      }

    }
?>