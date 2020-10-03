<?php
	session_start();
	if(isset($_SESSION['user']))
		header('location:frame2.php');
	//echo $_SESSION['user'];
?>
<html>
	<head>
		<div id=title>
		<title>Quản lý phòng ban</title>
		<meta charset="utf-8">
		<frameset border=2 rows="60,*,50">
			<frame src="trangchu.php" />
			<frameset cols="20%,*">
				<frame name='tuychon' src='tuychon.php' />
				<frame name='noidung' />
			</frameset>
			<frame />
			<noframes> Trình duyệt không hỗ trợ Frame</noframes>
		</frameset>
		</div>
	</head>
</html>
