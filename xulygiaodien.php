<?php
	if(isset($_GET['nv'])) {
		header('location: frame.php?link=xemthongtinNV.php');
	}
	if(isset($_GET['pb'])) {
		header('location: frame.php?link=xemthongtinPB.php');
	}
	if(isset($_GET['tk'])) {
		header('location: frame.php?link=timkiem.php');
	}
	if(isset($_GET['dn'])) {
		header('location: frame.php?link=login.php');
	}
?>