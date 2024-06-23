<?php

include 'connection.php';
// if(isset($_POST['pin'])==1) {
$productname = $_POST['productname'];
$index = $_POST['index'];
$productId = "productdetails";

if (!empty($index)){
    $productId = "productdetails" . $index . $index;
}

if(!empty($productname)) {
    $productNames = array();
    $sql1 = "SELECT * FROM agent_products where productname like '%$productname%' ORDER BY productname ASC";
    $result1 = mysqli_query($db, $sql1);
    $pi=0;
    while($row1=mysqli_fetch_array($result1)) {
        $pi=$pi + 1;
        echo $data = "<span id='$productId$pi' onclick='selectProduct($pi,$index)'>".$row1['productname']."</span><br><br>";
    }
}
// }
?>