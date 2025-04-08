<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$ten_loai_sp=$_REQUEST["txt_ten_loai_sp"];
	//echo $tenhang;
	$gioithieu=$_REQUEST["txt_gioithieu"];
	//Kết nối đến Server
	$conn=mysqli_connect("localhost","root","") or die("Không tìm thấy máy chủ");
	//Tìm DB
	//mysqli_select_db()
	mysqli_select_db($conn,"web") or die("Không tìm thấy DB");
	
	
		$uploadDir_logo = "../../img/"; //đg dẫn ảnh

$file_tmp = isset($_FILES['logo']['tmp_name']) ? 
$_FILES['logo']['tmp_name'] : ""; 
$file_name = isset($_FILES['logo']['name']) ? $_FILES['logo']['name'] : ""; 
$file_type = isset($_FILES['logo']['type']) ? $_FILES['logo']['type'] : ""; 
$file_size = isset($_FILES['logo']['size']) ? $_FILES['logo']['size'] : ""; 
$file_error = isset($_FILES['logo']['error']) ? $_FILES['logo']['error'] : "";
//copy tên ảnh
$dmyhis=date("Y").date("m").date("d").date("H").date("i").date("s"); ///Lay gio cua he thong
$file__name__=$dmyhis.$file_name;
copy ($file_tmp,$uploadDir_logo.$file__name__);	
	
	
	
	//Tạo câu lệnh truy vấn
	$sql_themhang="INSERT INTO `loai_sanpham` (`id_loai_sanpham`, `ten_loai_sp`,`logo`,`mota`) VALUES ('Null', '$ten_loai_sp', '$file__name__', '$gioithieu')";
	//Thực hiện truy vấn
	mysqli_query($conn,$sql_themhang);
	
	header("Location:  Quan_Li_loai_san_pham.php");
	?>
	
	
</body>
</html>