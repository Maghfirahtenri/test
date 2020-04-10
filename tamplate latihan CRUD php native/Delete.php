<?php 
	include_once('koneksi.php');

	$id = $_GET['id'];
	$result = mysqli_query($panggildb, "DELETE FROM datamahasiswa WHERE id=$id");
	header("Location:index.php");
 ?>