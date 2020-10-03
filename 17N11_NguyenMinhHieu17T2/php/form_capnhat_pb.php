<?php
	$idpb=$_GET['idpb'];
	$link = mysqli_connect("localhost","root","") or die("khong the mo CSDL ".mysqli_error);
	mysqli_select_db($link,"dulieu");
	$sql = "select *from phongban where IDPB='$idpb'";
	$resuft = mysqli_query($link,$sql);
	$row = mysqli_fetch_array($resuft);
		
	mysqli_close($link);
	echo '<center><br><br>';
?>
<table border=1 width=400 height=150>
	<tr>
			<th colspan=2 align=center>Cap nhat thong tin PB</th>
			</tr>
	<form action=xulycapnhat.php method=post>
			<tr>
				<td align=left>IDPB</td>
				<td><input type=text name=id value=<?php echo $idpb; ?> readonly></td>
			</tr>
			<tr>	
				<td align="left">Ten phban</td>
				<td><input type="text" name="tenpb" value="<?php echo $row['Tenph'];?>"></td>
			</tr>
			<tr>
				<td align="left">Mota</td>
				<td><input type=text name=mota value="<?php echo $row['Mota'];?>"></td>
			</tr>
			<tr>
				<td  colspan=2 align=center>
					<input type=submit name=submit value='cap nhat'>
					<input type=submit name=exit value='quay lai'>
				</td>
			</tr>
		</form>
		</table>
	

	