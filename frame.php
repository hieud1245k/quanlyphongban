
<html>
	<head>
		<title>frame</title>
		<meta charset="utf-8">
		<style type="text/css">
body{
    font-family: Arial, Tahoma;
    font-size: 12px;
}
 
#main{
    width: 100%;
    padding: 0;
    margin-left: auto;
    margin-right: auto;
}
#head{
    height: 100px;
    background-color: #F5F5F5;
    border: 1px solid #CDCDCD;
    margin-bottom:5px;
}
#head-link{
     height: 30px;
     line-height: 30px;
     padding-left: 10px;
     padding-right: 10px;
     border: 1px solid #CDCDCD;
     background-color: #F5F5F5;
     margin-bottom:5px;
     clear: both;
}
#left{
     width: 150px;
     min-height: 400px;
     border: 1px solid #CDCDCD;
     float:left;
     background-color: #004C00;
     margin-bottom: 5px;
}
#content{
     width: 1055px;
     min-height: 400px;
     border: 1px solid #CDCDCD;
     float:left;
     margin-left: 5px;
     margin-right: 5px;
     margin-bottom: 5px;
}
#right{
     width: 234px;
     min-height: 400px;
     border: 1px solid #CDCDCD;
     float:right;
     margin-bottom: 5px;
}
#footer{
     height: 50px;
     clear: both;
     border: 1px solid #CDCDCD;
     background-color: #F8F8FF;
}
		</style>
	</head>
	<body>
		<div id="main">
		<div id="head" align=center>
			<h1><b>CHƯƠNG TRÌNH QUẢN LÝ NHÂN SỰ</B><h1>
		</div>
		<div id="head-link">
		</div>
		<div id="left">
		<form action=xulygiaodien.php method=get>
			<p><input type=submit name=nv value="xem thông tin nv"></p>
			<p><input type=submit name=pb value="xem thông tin pb"></p>
			<p><input type=submit name=tk value="tìm kiếm"></p>
			<p><input type=submit name=dn value="đăng nhập"></p>
			
		</form>
		</div>
		<div id="content">
		<?php
			if(isset($_GET['link'])) {
				$link=$_GET['link'];
			include $_SERVER["DOCUMENT_ROOT"] . "/php/$link";
				//echo $link;
			}
		?>
		</div>
		<div id="right">
		</div>
		<div id="footer">
		</div>
		</div>
	</body>
</html>