<?php
include('isValidUser.php');
$host = 'localhost';
$db   = 'crm';  
$user = 'root';
$pass = '';
 
     $con = mysqli_connect($host,$user,$pass,$db);
      if($con->connect_error){
  die("Connection failed: ".$con->connect_error);
      }else{
         //echo "Connection Successfully";
     }


?>