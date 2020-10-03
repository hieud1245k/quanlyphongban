<?php
if(isset($_POST['submit'])){	
	$IDNV=$_POST['idnv'];
	$Hoten=$_POST['hoten'];
	$IDPB=$_POST['idpb'];
	$Diachi=$_POST['diachi'];
	if(strcmp($IDNV,'')==0 or strcmp($Hoten,'')==0 or strcmp($IDPB,'')==0 or strcmp($Diachi,'')==0)	 {
		header('location:themnv.php');
	} else {
		$link = mysqli_connect("localhost","root","") or die("khong the ket noi den CSDL");
		mysqli_select_db($link,"dulieu");
		$sql = "INSERT INTO `nhanvien`(`IDNV`, `Hoten`, `IDPB`, `Diachi`) VALUES ('$IDNV','$Hoten','$IDPB','$Diachi')";
		$resuft = mysqli_query($link,$sql);
		if($resuft) echo "Thêm nhân viên thành công!";
		else echo "Thêm nhân viên thất bại!";
		mysqli_close($link);
	}
}
?>