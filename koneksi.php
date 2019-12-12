<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "vintage";
   $conn = mysqli_connect($email, $hostname, $username, $password, $dbname);
   if(!$conn){
   	echo "gagal";
   }
?>
