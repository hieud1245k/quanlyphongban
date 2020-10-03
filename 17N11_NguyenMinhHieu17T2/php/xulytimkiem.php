<?php
if(isset($_POST['submit'])){	
	$IDNV=$_POST['txtnv'];
	$Hoten=$_POST['txtht'];
	if(strcmp($IDNV,'')==0 or strcmp($Hoten,'')==0)	 {
		header('location:timkiem.php');
	} else {
		$link = mysqli_connect("localhost","root","") or die("khong the ket noi den CSDL");
		mysqli_select_db($link,"dulieu");
		$sql = "select *from nhanvien where IDNV='$IDNV' and Hoten='$Hoten' ";
		$resuft = mysqli_query($link,$sql);
		echo '<table border=1 width=100%>';
		echo '<tr><td>IDNV</td><td>Hoten</td><td>IDPB</td><td>Diachi</td></tr>';
		if($row=mysqli_fetch_array($resuft)) {
			echo "<tr>
					<td>{$row['IDNV']}</td>
					<td>{$row['Hoten']}</td>
					<td>{$row['IDPB']}</td>
					<td>{$row['Diachi']}</td>
					</tr>";
		} else header('location:timkiem.php');
		echo '</table>';
		mysqli_close($link);
	}
}
?>
		