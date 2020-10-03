<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
	</head>
	<body>
		<center><br><br>
		<table border=1 width=300 height=100>
			<tr>
				<th colspan=2 align=center>Login</td>
			</tr>
			<form action="xulydangnhap.php" method="post">
				<tr>
					<td align=left>Username</td>
					<td><input type=text name=username></td>
				</tr>
				<tr>
					<td align=left>Password</td>
					<td><input type=password name=password></td>
				</tr>
				<tr>
					<td colspan=2 align=center>
						<input type=submit name=submit value="Submit">
						<input type=reset value="Reset">
					</td>
				</tr>
			</form>
		</table>
	</body>
</html>