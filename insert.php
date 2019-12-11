<?php


	include "koneksi1.php";

	$id = $_POST["id"];
	$namabarang = $_POST["namabarang"];
	$harga = $_POST["harga"];
	$gambar =$_POST["gambar"];

	// query sql
	$sql = "INSERT INTO stock (id,namabarang, harga, gambar) VALUES('$id','$namabarang','$harga' ,'$gambar')";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

	if($query){
		header('location:read.php');
	} else {
		echo "Error :".$sql."<br>".mysqli_error($koneksi);
	}

	mysqli_close($koneksi);

?>