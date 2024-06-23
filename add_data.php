<?php 
include("connection.php"); 
$username = $_SESSION['username'];
if(isset($_POST['submit'])){

$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];

$address = $_POST['address'];
$shippingaddress = $_POST['shippingaddress'];
$city = $_POST['city'];

$state = $_POST['state'];
$postalcode = $_POST['postalcode'];
$country = $_POST['country'];

$phoneNumber = $_POST['phoneNumber'];
$productname = $_POST['productname'];


$productprice = $_POST['price'];
$productqty = $_POST['qty'];

$userid = strtoupper(mb_substr($username, 0, 5)).date('dmy');
$datetime = date('d M Y h:i A');

foreach($_POST['val'] as $value) {
  // do what you want with the $value
  
  echo $value;  
  $insertQuery = "insert into moreorder('orderid','productname','price','	quantity')values($value)";
  echo $insertQuery;
  $con->query($insertQuery);
}

//print_r($moredata);

    
    $agentQuery = "INSERT INTO `agent` (`datetime`,`userid`, `username`,`firstname`,`lastname`, `address`, `shippingaddress`,`city`,`state`,`pincode`,`country`,`phone`,`productname`,`price`,`quantity`)
    VALUES ('$datetime','$userid','$username','$firstname','$lastname', '$address', '$shippingaddress','$city','$state','$postalcode','$country','$phoneNumber','$productname','$productprice','$productqty')";
    echo $agentQuery;
    

    $agentQueryExe = $con->query($agentQuery);   
    //$agentQueryExe = mysqli_query($con,$agentQuery);
    if($agentQueryExe){
        echo '<script>';
          //echo "window.location.href = 'dashboard.php'";
        echo '</script>';
    } else {
        echo '<script>';
          //echo "window.location.href = 'dashboard.php'";
        echo '</script>';
    }

    
}


?>
