<?php
 session_start();


 unset($_SESSION['users']);


header('location: ../index.php');
 


?>