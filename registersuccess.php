<?php 
include("connection.php"); 
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];
    
    // echo $username;
    // echo $password;
    // echo $usertype;
    $login = 'true';
    $datetime = date("Y-m-d");
    
    $registerQuery = "INSERT INTO `salesusers` (`date`,`username`, `password`, `type`, `login`) VALUES ('$datetime','$username', '$password', '$usertype','$login')";
    echo $registerQuery;
    $queryExe = mysqli_query($con,$registerQuery);
    if($queryExe){
        echo '<script>';
          echo "window.location.href = 'userList.php'";
        echo '</script>';
    } else {
        echo '<script>';
          echo "window.location.href = 'registerNewUser.php'";
        echo '</script>';
    }

    
}




?>
