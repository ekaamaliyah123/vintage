 

  <?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:login1.php'); }
   require_once("koneksi.php");
?>

 