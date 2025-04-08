<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$idsp=$_REQUEST["idsp"];
	$ten_loai_sanpham=$_REQUEST["txt_ten_loai_sp"];
	$gioi_thieu=$_REQUEST["txt_gioithieu"];
	
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
			$sql_suahang = "UPDATE `loai_sanpham` SET `ten_loai_sp` = '$ten_loai_sanpham', `logo` = '$logo', `mota` = '$gioi_thieu' WHERE `id_loai_sanpham` = $idsp";
		} else {
			die("Lỗi tải lên tệp tin.");
		}
	} else {
		$sql_suahang = "UPDATE `loai_sanpham` SET `ten_loai_sp` = '$ten_loai_sanpham', `mota` = '$gioi_thieu' WHERE `id_loai_sanpham` = $idsp";
	}

	mysqli_query($conn, $sql_suahang);
	header("Location: Quan_Li_loai_san_pham.php ");
	?>
</body>
</html>