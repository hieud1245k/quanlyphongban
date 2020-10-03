<?php
	$link = mysqli_connect("localhost","root","") or die("khong the mo CSDL ".mysqli_error);
	mysqli_select_db($link,"dulieu");
	$sql = "select *from phongban";
	$resuft = mysqli_query($link,$sql);
	echo '<table border=1 width=100%>';
	echo '<tr><th>IDPB</th><th>Tenpb</th><th>Mota</th><th>Nhanvien</th></tr>';
	while($row = mysqli_fetch_array($resuft)) {
		echo "<tr>
			<td>{$row['IDPB']}</td>
			<td>{$row['Tenph']}</td>	
			<td>{$row['Mota']}</td>
			<td align=center><a href=xulyPB.php?idpb={$row['IDPB']}>xxx</a></td>
			</tr>";
	}
	echo '</table>';
	mysqli_close($link);
?>