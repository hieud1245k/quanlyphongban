<?php
  session_start();
if(isset($_POST['submit'])){	
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(strcmp($username,'')==0 or strcmp($password,'')==0)	 {
		header('location:frame1.php');
	} else {
		$link = mysqli_connect("localhost","root","") or die("khong the ket noi den CSDL");
		mysqli_select_db($link,"dulieu");
		$sql = "select *from taikhoan where username='$username' and password='$password' ";
		$resuft = mysqli_query($link,$sql);
		if($row=mysqli_fetch_array($resuft)) {
			$_SESSION['user']=$username;
			$_SESSION['pass']=md5($password);
			header("location:frame2.php");
		} else header('location:index.php');
		mysqli_close($link);
	}
}
?>