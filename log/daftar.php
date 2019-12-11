<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:daftar1.php'); }
?>

