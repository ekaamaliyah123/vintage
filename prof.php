<?php


	include "koneksi1.php";
	$gambar =$_POST["gambar"];

	// query sql
	$sql = "INSERT INTO users (gambar) VALUES('$gambar')";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

	if($query){
		header('location:read.php');
	} else {
		echo "Error :".$sql."<br>".mysqli_error($koneksi);
	}

	mysqli_close($koneksi);

?>