<?php
	session_start();
?>
<html>
	<head>
	</head>
	<body>
		<div class='title'>
		<a href=frame2.php target=_parent><font size=4>CHƯƠNG TRÌNH QUẢN LÝ PHÒNG BAN</font></a>
		</div>
		<div class='title' align=right>
			Xin chào <?php echo $_SESSION['user']; ?> 
			<a href=logout.php target=_parent><button type=button name=logout>Logout</button></a>
		</div>
	</body>
</html>