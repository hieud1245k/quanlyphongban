<?php
	$idnv = $_GET['idnv'];
	$link = mysqli_connect("localhost","root","") or die("khong the mo CSDL ".mysqli_error);
	mysqli_select_db($link,"dulieu");
	$sql = "DELETE FROM `nhanvien` WHERE IDNV='$idnv'";
	$resuft = mysqli_query($link,$sql);
	header("location: frame.php?link=xoanv.php");
	mysqli_close($link);
?>