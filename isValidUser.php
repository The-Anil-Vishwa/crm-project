<?php
 session_start(); 
 //echo $_SESSION['username']; 
 if(isset($_SESSION['username'])){
 }else{
    header("Location: index.php"); 
 }