<?php
	$link = mysqli_connect("localhost","root","") or die("khong the mo CSDL ".mysqli_error);
	mysqli_select_db($link,"dulieu");
	$sql = "select *from nhanvien";
	$resuft = mysqli_query($link,$sql);
	echo '<table border=1 width=100%>';
	echo '<tr><th>IDNV</th><th>Hoten</th><th>IDPB</th><th>Diachi</th></tr>';
	while($row = mysqli_fetch_array($resuft)) {
		echo "<tr>
			<td>{$row['IDNV']}</td>
			<td>{$row['Hoten']}</td>	
			<td>{$row['IDPB']}</td>
			<td>{$row['Diachi']}</td>
			</tr>";
	}
	echo '</table>';
	mysqli_close($link);
?>