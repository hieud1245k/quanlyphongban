<?php
if(isset($_POST['submit'])){	
	$IDPB=$_POST['idpb'];
	$ten=$_POST['ten'];	
	$mota=$_POST['mota'];
	if(strcmp($IDPB,'')==0 or strcmp($ten,'')==0 or strcmp($mota,'')==0)	 {
		header('location:thempb.php');
	} else {
		$link = mysqli_connect("localhost","root","") or die("khong the ket noi den CSDL");
		mysqli_select_db($link,"dulieu");
		$sql = "INSERT INTO `phongban`(`IDPB`, `Tenph`, `Mota`) VALUES ('$IDPB','$ten','$mota')";
		$resuft = mysqli_query($link,$sql);
		if($resuft) echo "Thêm phòng ban thành công!";
		else echo "Thêm phòng ban thất bại!";
		mysqli_close($link);
	}
}
?>