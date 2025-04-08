
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="Layout_quantri.css">
</head>

	<?php
if(isset($_GET['action'])=='dangxuat'){
unset($_SESSION['dangnhap']);
header('Location: login.php');
}
?>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	
	
	

	<div class="QT">
	<div class="QT_Box_1" >
		<h1 style="text-align: center; font-size: 35px;" ><a href="QuanTri_CSDL.php">Quản Trị Dữ Liệu</a></h1>
		<div class="QT_body">
			<div class="QuanLi_Loai_Sp"><a href="QuanLiLoaiSanPham/Quan_Li_loai_san_pham.php">QUẢN LÍ LOẠI SẢN PHẨM</a></div>
			<div class="QuanLi_SP"><a href="QuanLiSanPham/Quan_Li_san_pham.php">QUẢN LÍ SẢN PHẨM</a></div>
			<div class="QuanLi_TinTuc"><a href="QuanLiTinTuc/Quan_Li_tin_tuc.php">QUẢN LÍ TIN TỨC</a></div>
			<div class="QuanLi_taikhoan"><a href="QuanLiNguoiDung/Quan_li_nguoi_dung.php">QUẢN LÍ TÀI KHOẢN</a></div>
			<div class="QuanLi_donhang">QUẢN LÍ ĐƠN HÀNG</div>
			<div class="ThongTin_Kh"><a href="ThongTinKhachHang/Thong_tin_kh.php">THÔNG TIN KHÁCH HÀNG</a></div>
			<div class="DX"><a href="QuanTri_CSDL.php?action=dangxuat">Đăng xuất</a></div>
		</div>
		
	</div>
	 
	
	</div>
	
</body>
</html>