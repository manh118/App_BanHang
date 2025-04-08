<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thêm sản phẩm</title>


</head>

<body>
	
	
	<?php
	
	//Kết nối đến Server
	$conn=mysqli_connect("localhost","root","") or die("Không tìm thấy máy chủ");
	//Tìm DB
	//mysqli_select_db()
	mysqli_select_db($conn,"web") or die("Không tìm thấy DB");
	
	
	$idsp=$_REQUEST["loaisanpham"];
	$tensp=$_REQUEST["txt_tensp"];
	
	$uploadDir_img = "../../img/"; //đg dẫn ảnh

$file_tmp = isset($_FILES['img']['tmp_name']) ? 
$_FILES['img']['tmp_name'] : ""; 
$file_name = isset($_FILES['img']['name']) ? $_FILES['img']['name'] : ""; 
$file_type = isset($_FILES['img']['type']) ? $_FILES['img']['type'] : ""; 
$file_size = isset($_FILES['img']['size']) ? $_FILES['img']['size'] : ""; 
$file_error = isset($_FILES['img']['error']) ? $_FILES['img']['error'] : "";
//copy tên ảnh
$dmyhis=date("Y").date("m").date("d").date("H").date("i").date("s"); ///Lay gio cua he thong
$file__name__=$dmyhis.$file_name;
copy ($file_tmp,$uploadDir_img.$file__name__);	
	
	
	$gioithieu=$_REQUEST["txt_gioithieu"];
	$gia=$_REQUEST["txt_gia"];
	$ghichu=$_REQUEST["txt_ghichu"];
	

	//Tạo câu lệnh truy vấn'
	
	$sql_themsp="INSERT INTO `sanpham` (`id_sanpham`, `id_loai_sanpham`, `ten_sp`, `img_sp`, `gioithieu`, `gia`, `ghichu`) VALUES ('Null', '$idsp', '$tensp', '$file__name__', '$gioithieu', '$gia', '$ghichu')";
	
	mysqli_query($conn,$sql_themsp);
	
	header("Location: Quan_Li_san_pham.php ");
	?>
	
	
</body>
</html>