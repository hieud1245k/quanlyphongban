<?php
	session_start();
?>
<html>
	<head>
		<style type="text/css">
			.title {
				display:inline;
			}
		</style>
	</head>
	<body>
		<div class='title'>
		<a href=frame2.php target=_parent><font size=4>CHƯƠNG TRÌNH QUẢN LÝ PHÒNG BAN</font></a>
		</div>
		<div class='title' align=right>
			<form action=frame1.php method=get target=_parent>
				Xin chào <?php echo $_SESSION['user']; ?> 
				<input type=submit value="Logout">
			</form>
		</div>
	</body>
</html>