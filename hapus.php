<?php
	include "koneksi1.php";

	$idh = $_GET["hapus"];

	// query sql
	$sql = "DELETE FROM stock WHERE id='$idh'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

	if($query){
		echo "Data berhasil di Hapus!";
	} else {
		echo "Error :".$sql."<br>".mysqli_error($koneksi);
	}

	mysqli_close($koneksi);
?>