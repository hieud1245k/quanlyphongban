<?php
	$link = mysqli_connect("localhost","root","") or die("khong the mo CSDL ".mysqli_error);
	mysqli_select_db($link,"dulieu");
	$sql = "select *from phongban";
	$resuft = mysqli_query($link,$sql);
	echo '<table border=1 width=100%>';
	echo '<caption>Cap nhat thong tin phong ban</caption>';
	echo '<tr><th>IDPB</th><th>Tenpb</th><th>Mota</th><th>capnhat</th></tr>';
	while($row = mysqli_fetch_array($resuft)) {
		echo "<tr>
			<td>{$row['IDPB']}</td>
			<td>{$row['Tenph']}</td>	
			<td>{$row['Mota']}</td>
			<td align=center><a href=form_capnhat_pb.php?idpb={$row['IDPB']}>capnhat</a></td>
			</tr>";
	}
	echo '</table>';
	mysqli_close($link);
?>
<?php
	echo '<br><br><br>';
	$link = mysqli_connect("localhost","root","") or die("khong the mo CSDL ".mysqli_error);
	mysqli_select_db($link,"dulieu");
	$sql = "select *from nhanvien";
	$resuft = mysqli_query($link,$sql);
	echo '<table border=1 width=100%>';
	echo '<caption>Cap nhat thong tin nhanvien</caption>';
	echo '<tr><th>IDNV</th><th>Hoten</th><th>IDPB</th><th>Diachi</th><th>cap nhat</th></tr>';
	while($row = mysqli_fetch_array($resuft)) {
		echo "<tr>
			<td>{$row['IDNV']}</td>
			<td>{$row['Hoten']}</td>	
			<td>{$row['IDPB']}</td>
			<td>{$row['Diachi']}</td>
			<td align=center><a href=form_capnhat_nv.php?idnv={$row['IDNV']}>capnhat</a></td>
			</tr>";
	}
	echo '</table>';
	//echo "<p><a href=frame.php?link=tuychon.php>quay lai</a></b>";
	mysqli_close($link);
?>
