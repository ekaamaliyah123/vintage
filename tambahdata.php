<?php
  session_start();
  if(!isset($_SESSION['username'])){
  header("location:login.php");
}else{
?>


<!DOCTYPE html>
<html lang="en">

<head>

  </nav>

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


      </div>



    <form action="insert.php" method="POST">
        <table>



             <tr>
                <td>id</td>
                <td>:</td>
                <td><input type="id" name="id"></td>
            </tr>

            <tr>
                <td>namabarang</td>
                <td>:</td>
                <td><input type="namabarang" name="namabarang"></td>
            </tr>
            <tr>
                <td>harga</td>
                <td>:</td>
                <td><input type="harga" name="harga"></td>
            </tr>
<html>
<head>
    <title>Gambar</title>
</head>
<body>
<h1>        </h1>
<form method="post" enctype="multipart/form-data" action="insert.php">
    <input type="file" name="gambar">
</form>


</body>
</html>


            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="kirim" value="SIMPAN">
                    <input type="reset" name="clear" value="BATAL">
                </td>
            </tr>
        </table>
    </form>

</section>
</li>
</body>
</html>
</body>
</html>

<?php }?>