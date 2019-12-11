<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop 90's</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Thrift Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cs.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login1.php">Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Baju Vintageku</h1>
        <div class="list-group">
      
        </div>

      </div>




        <?php
    include "koneksi1.php";

    $ide = $_GET["rubahdata"];

    $sql = "SELECT * FROM stock WHERE id='$ide'";
    $query = mysqli_query($koneksi, $sql) or die (mysqli_error());

    if(mysqli_num_rows($query) > 0){
      $data = mysqli_fetch_array($query);
    }
  ?>

  <form action="" method="POST">

    <input type="hidden" name="id" value="<?php echo $data["id"];?>">

    <table>
      <tr>
        <td>namabarang</td>
        <td>:</td>
        <td><input type="nama" name="nama" value="<?php echo $data["namabarang"];?>"></td>
      </tr>
      <tr>
        <td>harga</td>
        <td>:</td>
        <td><input type="harga" name="harga" value="<?php echo $data["harga"];?>"></td>
      </tr>

      <html>
<head>
    <title>Gambar</title>
</head>
<body>
<h1>Gambar</h1>
<form method="post" enctype="multipart/form-data" action="upload.php">
    <input type="file" name="gambar">
</form>
</body>
</html>


      <tr>
        <td></td>
        <td></td>
        <td>
          <input type="submit" name="edit" value="RUBAH">
        </td>
      </tr>
    </table>
  </form>

<?php
  include 'koneksi1.php';

  if(isset($_POST['edit'])){

  $namabarang = $_POST['nama']; 
  $harga = $_POST["harga"];
  $gambar = $_POST["gambar"];


  // query sql
  $query = mysqli_query($koneksi, "UPDATE stock SET namabarang = '$namabarang', harga = '$harga', gambar ='$gambar' WHERE id = '$ide'");  

  if (mysqli_affected_rows($koneksi) == 1){
    header('location:read.php');
    mysqli_error($koneksi);
  }else {
    echo "gagal";
  }
}

?>
</body>
</html>