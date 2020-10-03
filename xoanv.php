<?php
	echo '<br><br><br>';		
	$link = mysqli_connect("localhost","root","") or die("khong the mo CSDL ".mysqli_error);
	mysqli_select_db($link,"dulieu");
	$sql = "select *from nhanvien";
	$resuft = mysqli_query($link,$sql);
	echo '<table border=1 width=100%>';
	echo '<caption>Them xoa nhan vien</caption>';
	echo '<tr><th>IDNV</th><th>Hoten</th><th>IDPB</th><th>Diachi</th><th>Chinhsua</th></tr>';
	while($row = mysqli_fetch_array($resuft)) {
		echo "<tr>
			<td>{$row['IDNV']}</td>
			<td>{$row['Hoten']}</td>	
			<td>{$row['IDPB']}</td>
			<td>{$row['Diachi']}</td>
			<td><a href=xoa.php?idnv={$row['IDNV']}>Xoa</a></td>
			</tr>";
	}		
	echo '</table>';
	mysqli_close($link);
?>