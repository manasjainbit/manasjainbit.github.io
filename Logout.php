
<?php
session_start();
unset($_SESSION['user']);
session_destroy();
header("Location: http://localhost:8080/CBSMS/Login.php");
?>