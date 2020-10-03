<?php
	$idnv=$_GET['idnv'];
	$link = mysqli_connect("localhost","root","") or die("khong the mo CSDL ".mysqli_error);
	mysqli_select_db($link,"dulieu");
	$sql = "select *from nhanvien where IDNV='$idnv'";
	$resuft = mysqli_query($link,$sql);
	$row = mysqli_fetch_array($resuft);
		$Hoten=$row{'Hoten'};
		$IDPB=$row{'IDPB'};
		$Diachi=$row{'Diachi'};
	echo '<center><br><br>';
	mysqli_close($link);
?>
	<table border=1 width=400 height=150>
		<tr>
			<th colspan=2 align=center>Cap nhat thong tin NV</th>
			</tr>
		<form action=xulycapnhat.php method=post>
			<tr>
				<td align=left>IDNV</td>
				<td><input type=text name=id value="<?php echo $idnv;?>" readonly></td>
			</tr>
			<tr>	
				<td align=left>Hoten</td>
				<td><input type=text name=hoten value="<?php echo $Hoten;?>"></td>
			</tr>
			<tr>	
				<td align=left>IDPB</td>
				<td><input type=text name=idpb value="<?php echo $IDPB;?>" readonly></td>
			</tr>
			<tr>
				<td align=left>Diachi</td>
				<td><input type=text name=diachi value="<?php echo $Diachi;?>"></td>
			</tr>
			<tr>
				<td  colspan=2 align=center>
					<input type=submit name=submit1 value='cap nhat'>
					<input type=submit name=exit1 value='quay lai'>
				</td>
			</tr>
		</form>
	</table>