<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="../Layout_quantri.css">
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	
	<?php
	$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");//tạo kết nối với server
	mysqli_select_db($conn,"web") or die ("Không tìm thấy CSDL");// Tìm CSDL đề làm việc
	$sql_select_sanpham="Select * from `tintuc`";
	$result_se_sanpham=mysqli_query($conn,$sql_select_sanpham);
	$tong_bg=mysqli_num_rows($result_se_sanpham);
	//echo $tong_bg;
	$stt_hang=0;
	while($row=mysqli_fetch_object($result_se_sanpham))
{
	$stt_hang++;
	$id_tintuc[$stt_hang]=$row->id_tintuc;
	$tieu_de[$stt_hang]=$row->tieu_de;
	$img[$stt_hang]=$row->img;
	$tin_tuc[$stt_hang]=$row->tin_tuc;
		
}
	?>
	
	
	<div class="QT">
	<div class="QT_Box_1">
		<h1 style="text-align: center; font-size: 35px;" ><a href="../QuanTri_CSDL.php">Quản Trị Dữ Liệu</a></h1>
		<div class="QT_body">
			<div class="QuanLi_Loai_Sp"><a href="../QuanLiLoaiSanPham/Quan_Li_loai_san_pham.php">QUẢN LÍ LOẠI SẢN PHẨM</a></div>
			<div class="QuanLi_SP"><a href="../QuanLiSanPham/Quan_Li_san_pham.php">QUẢN LÍ SẢN PHẨM</a></div>
			<div class="QuanLi_TinTuc"><a href="Quan_Li_tin_tuc.php">QUẢN LÍ TIN TỨC</a></div>
			<div class="QuanLi_taikhoan"><a href="../QuanLiNguoiDung/Quan_li_nguoi_dung.php">QUẢN LÍ TÀI KHOẢN</a></div>
			<div class="QuanLi_donhang">QUẢN LÍ ĐƠN HÀNG</div>
			<div class="ThongTin_Kh"><a href="ThongTinKhachHang/Thong_tin_kh.php">THÔNG TIN KHÁCH HÀNG</a></div>
		</div>
	</div>
	 
	<div class="QT_DienTT">
		<div class="container">
			<hr width="100%">
			<h2 style="text-align: center">Danh Mục Tin Tức </h2>
			<p><a href="Them_tt.php" class="btn btn-success">Thêm tin tức +</a></p>
			<table class="table table-bordered" style="border: 2px">
			<thead>
					<th width="100px">STT</th>
					<th width="200px">Tiêu đề</th>
					<th width="200px">Ảnh</th>
					<th width="300px">Tin tức</th>
					<th width="5%">Sửa</th>
					<th width="5%">Xóa</th>
			</thead>
				<?php 
					for($i=1;$i<=$tong_bg;$i++)
	  				{
				?>
				<tbody>
			<td><?php echo $i?></td>
			<td><?php echo $tieu_de[$i]?></td>
			<td><img width="300px" height="300px" src="../../img/<?php echo $img[$i]?>"></td>
			<td><?php echo $tin_tuc[$i]?></td>
			<td><a href="Sua_tt.php?idsp=<?php echo $id_tintuc[$i] ?>" class="btn" style="color: #A9B45E;justify-content: center"><i class="fa-solid fa-pen-to-square"></i></a></td>
			<td><a href="Xoa_tt.php?idsp=<?php echo $id_tintuc[$i]?>" onClick = "return confirm('Bạn chắc chắn muốn xóa?')" class="btn" style="color: #CF0609"><i class="fa-solid fa-trash-can"></i></a></td>	
				</tbody>
				<?php
				
					}
				?>
			</table>
				
		</div>
		
		</div>
	</div>
	
</body>
</html>