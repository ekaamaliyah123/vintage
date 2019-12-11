<?php
	include "koneksi1.php";

	$id = ["id"];
	$namabarang = ["namabarang"];
	$harga = ["harga"];
	$gambar =["gambar"];


	// query sql
	$query = mysqli_query($koneksi, "UPDATE stock SET namabarang = '$namabarang', harga = '$harga', gambar ='$gambar' WHERE id = 'id'");	

	if (mysqli_affected_rows($koneksi) == 1){
		echo "berhasil";
	
	}else {
		echo "gagal";
	}
?>