<?php
	echo '<br><br><br>';		
	$link = mysqli_connect("localhost","root","") or die("khong the mo CSDL ".mysqli_error);
	mysqli_select_db($link,"dulieu");
	$sql = "select *from nhanvien";
	$resuft = mysqli_query($link,$sql);
	echo '<form action=xoa1.php method=get>';
	echo '<table border=1 width=100%>';
	echo '<caption>Them xoa nhan vien</caption>';
	echo '<tr><th>IDNV</th><th>Hoten</th><th>IDPB</th><th>Diachi</th><th>Chinhsua</th></tr>';
	while($row = mysqli_fetch_array($resuft)) {
		echo "<tr>
			<td>{$row['IDNV']}</td>
			<td>{$row['Hoten']}</td>	
			<td>{$row['IDPB']}</td>
			<td>{$row['Diachi']}</td>
			<td align=center><input type=checkbox name=cat[] value={$row['IDNV']}></a></td>
		</tr>";
	}		
	echo '</table><p align=right><input type=submit value=submit></p></form>';
	mysqli_close($link);
?>