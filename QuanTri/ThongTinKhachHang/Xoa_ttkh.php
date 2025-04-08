<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$idsp=$_REQUEST["idkh"];
	$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");//tạo kết nối với server
	mysqli_select_db($conn,"web") or die ("Không tìm thấy CSDL");// Tìm CSDL đề làm việc
	$sql_xoa_sp="DELETE FROM `khachhang` WHERE `khachhang`.`id_khach` = $idsp";
	
	mysqli_query($conn,$sql_xoa_sp);
	header("Location: Thong_tin_kh.php");
	?>
</body>
	
</html>