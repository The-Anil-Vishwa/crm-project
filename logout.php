<?php   

session_start();
session_destroy();

header("location:/crm/index.php");
exit();

?>
