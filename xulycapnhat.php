<?php
if(isset($_POST['exit'])) header("location: capnhat.php");	
if(isset($_POST['submit'])){	
	$IDPB=$_POST['id'];
	$Tenph=$_POST['tenpb'];
	$Mota=$_POST['mota'];
	if(strcmp($Tenph,'')==0 or strcmp($Mota,'')==0)	 {
		header('location:form_capnhat_pb.php');
	} else {
		$link = mysqli_connect("localhost","root","") or die("khong the ket noi den CSDL");
		mysqli_select_db($link,"dulieu");
		$sql = "UPDATE `phongban` SET `IDPB`='$IDPB',`Tenph`='$Tenph',`Mota`='$Mota' WHERE IDPB='$IDPB'";
		$resuft = mysqli_query($link,$sql);
		mysqli_close($link);
		header("location: capnhat.php");
	}
	
}
if(isset($_POST['exit1'])) header("location:capnhat.php");	
if(isset($_POST['submit1'])){	
	$IDNV=$_POST['id'];
	$Hoten=$_POST['hoten'];
	$IDPB=$_POST['idpb'];
	$Diachi=$_POST['diachi'];
	//echo $IDNV,' ',$Hoten,' ',$IDPB,' ',$Diachi;
	/*
	if(strcmp($Hoten,'')==0 or strcmp($Diachi,'')==0)	 {
		header('location:form_capnhat_nv.php?idnv={$IDNV}');
		return;
	} else */
		$link = mysqli_connect("localhost","root","") or die("khong the ket noi den CSDL");
		mysqli_select_db($link,"dulieu");
		$sql = "UPDATE `nhanvien` SET `IDNV`='$IDNV',`Hoten`='$Hoten',`IDPB`='$IDPB',`Diachi`='$Diachi' WHERE IDNV='$IDNV'";
		$resuft = mysqli_query($link,$sql);
		mysqli_close($link);
		header("location: capnhat.php");
	//echo $IDNV,$Hoten,$IDPB,$Diachi;
}
?>
		

		