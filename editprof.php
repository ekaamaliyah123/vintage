<?php
  session_start();
  if(!isset($_SESSION['username'])){
  header("location:login.php");
}else{
?>

<!DOCTYPE>
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

<div class="card">
  <div class="card-header">
  
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    <form method="post" action="">
       <table border="0">
       <tr>
         <th>Nama</th>
         <td>:</td>
         <td><input type="text" name="nama" class="form-control" value="<?php echo $_SESSION['nama']?>"></td>
       </tr>
       <tr>
         <th>Username</th>
         <td>:</td>
         <td><input type="text" name="username" class="form-control" value="<?php echo $_SESSION['username']?>"></td>
       </tr>
       <tr>
         <th>Gambar</th>
         <td>:</td>
         <td><img src="gambar/<?php echo $_SESSION['gambar'];?>" class="img-thumbnail" width="15%">
               </td>
       </tr>
       <tr>
         <td></td>
         <td></td>
         <form method="post" enctype="multipart/form-data" action="">
           <td><input type="file" name="gambar"></td>
      </form>
         
       </tr>
       <tr>
         <td></td>
         <td></td>
         <td><button class="btn btn-primary" name="save"> Save</i></button></td>
       </tr>
     </table>
     </form>


    </blockquote>
  </div>
</div>
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