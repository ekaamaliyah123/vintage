 <?php
  session_start();
  if(!isset($_SESSION['username'])){
  header("location:login.php");
}else{
?>




 <!DOCTYPE>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>admin</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="navbar-header">
          <a href="">add</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                
              </li>
            </ul>
        </div>
        </div>
      </nav>
      <aside class="sidebar">
        <menu>
          <ul class="menu-content">
             <p href="#"><img class="img-circle"src="gambar/<?php echo $_SESSION['gambar'];?>"  alt="User Image" width= '50' height= '50' style="margin-left: 30px;"><font color="white"> <b><?php echo $_SESSION['nama'];?></b></font></p>
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li>
              <li><a href="tambahdata.php"><i class="fa fa-cube"></i> Upload Items</a></li>
            <li>
            </li>
            <li><a href="read.php"><i class="fa fa-shopping-basket"></i> <span>List Items</span></a></li>
            <li><a href="https://wa.me/+6289601966684"><i class="fa fa-phone-square"></i> <span> Call </span> </a></li>
            <li><a href="editprof.php"><i class="fa fa-image"></i> <span> Edit Profile </span> </a></li>
            <li><a href="logout_admin.php"><i class="fa fa-sign-out"></i> <span> Logout </span> </a></li>
            <li>
          </ul>
        </menu>
      </aside>
      <section class="content">
        <div class="inner">
  
        
    
    




  <table border ="1">
<table border="1" width="500px">

    <thead>
      <th>Id</th>
      <th>Nama Barang</th>
      <th>Harga</th>
      <th>Gambar</th>
      <th colspan="5">Edit</th>
    </thead>
    <tbody>

      <?php
        include "koneksi1.php";

        // query sql
        $sql = "SELECT * FROM stock ORDER BY id DESC";
        $query = mysqli_query($koneksi, $sql) or die (mysqli_error());

        $no = 1; // no. urut

        while($data = mysqli_fetch_array($query)){

          $id = $data["id"];
          $namabarang = $data["namabarang"];
          $harga = $data["harga"];
          $gambar = $data["gambar"];
          
          echo "<tr>";
          echo "<td>".$id."</td>";
          echo "<td>".$namabarang."</td>";
          echo "<td>".$harga."</td>";
          echo "<td><img src = 'images/$gambar' width= '100' height= '100'></td>
              <td>
                <a href='rubahdata.php?rubahdata=$id'><button> Edit </button> </a>
                <a href='hapus.php?hapus=$id'><button> Delete </button></a>
              </td>
              </tr>";
          $no++;
        }
      ?>

      
    </tbody>
  </table>


</div>
      </section>
    </div>
</body>
</html>
</body>
</html>


</body>

</html>

<?php }?>