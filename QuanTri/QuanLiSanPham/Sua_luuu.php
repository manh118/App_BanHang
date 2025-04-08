<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$idsp=$_REQUEST["idsp"];
	$ten_sanpham=$_REQUEST["txt_tensp"];
	$gioi_thieu=$_REQUEST["txt_gioithieu"];
	$gia=$_REQUEST["txt_gia"];
	$ghi_chu=$_REQUEST["txt_ghichu"];
	//echo $tenhang;
	
	//Kết nối đến Server
	$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");//tạo kết nối với server
	mysqli_select_db($conn,"web") or die ("Không tìm thấy CSDL");// Tìm CSDL đề làm việc
	
	
	$logo = $_FILES['img']['name'];
	$logo_tmp = $_FILES['img']['tmp_name'];

	if ($logo) {
		$upload_dir = '../../img/';
		$logo_path = $upload_dir . basename($logo);

		// Di chuyển tệp tin tải lên đến thư mục đích
		if (move_uploaded_file($logo_tmp, $logo_path)) {
			$sql_suahang = "UPDATE `sanpham` SET `ten_sp` = '$ten_sanpham', `img_sp` = '$logo', `gioithieu` = '$gioi_thieu',`gia`='$gia',`ghichu`='$ghi_chu' WHERE `id_sanpham` = $idsp";
		} else {
			die("Lỗi tải lên tệp tin.");
		}
	} else {
		$sql_suahang = "UPDATE `sanpham` SET `ten_sp` = '$ten_sanpham', `gioithieu` = '$gioi_thieu',`gia`='$gia',`ghichu`='$ghi_chu' WHERE `id_sanpham` = $idsp";
	}

	mysqli_query($conn, $sql_suahang);
	header("Location: Quan_Li_san_pham.php ");
	?>
</body>
</html>