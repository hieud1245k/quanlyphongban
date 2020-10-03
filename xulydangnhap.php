<?php
  session_start();
if(isset($_POST['submit'])){	
	$_SESSION['user']=($username=$_POST['username']);
	$_SESSION['pass']=md5($password=$_POST['password'],true);
	if(strcmp($username,'')==0 or strcmp($password,'')==0)	 {
		header('location:frame1.php');
	} else {
		$link = mysqli_connect("localhost","root","") or die("khong the ket noi den CSDL");
		mysqli_select_db($link,"dulieu");
		$sql = "select *from taikhoan where username='$username' and password='$password' ";
		$resuft = mysqli_query($link,$sql);
		if($row=mysqli_fetch_array($resuft)) {
			header("location:frame2.php");
		} else header('location:frame1.php');
		mysqli_close($link);
	}
}
?>