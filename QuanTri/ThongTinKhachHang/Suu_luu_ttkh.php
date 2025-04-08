<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$idkh=$_REQUEST["idkh"];
	$ten_sanpham=$_REQUEST["txt_tensp"];
	$sdt=$_REQUEST["txt_gioithieu"];
	$email=$_REQUEST["txt_gia"];
	$Noi_dung=$_REQUEST["txt_ghichu"];
	//echo $tenhang;
	
	//Kết nối đến Server
	$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");//tạo kết nối với server
	mysqli_select_db($conn,"web") or die ("Không tìm thấy CSDL");// Tìm CSDL đề làm việc
	
		$sql_suahang = "UPDATE `khachhang` SET `ho_ten` = '$ten_sanpham', `sdt` = '$sdt',`email`='$email',`noidung`='$Noi_dung' WHERE `id_khach` = $idkh";
	

	mysqli_query($conn, $sql_suahang);
	
	header("Location: Thong_tin_kh.php ");
	?>
</body>

</html>