<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thêm sản phẩm</title>
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
	$sql_select_loai_sanpham="Select * from `loai_sanpham`";
	$result_se_loai_sanpham=mysqli_query($conn,$sql_select_loai_sanpham);
	$tong_bg=mysqli_num_rows($result_se_loai_sanpham);
	//echo $tong_bg;
	$stt_hang=0;
	while($row=mysqli_fetch_object($result_se_loai_sanpham))
{
	$stt_hang++;
	$id_loai_sanpham[$stt_hang]=$row->id_loai_sanpham;
	$ten_loai_sp[$stt_hang]=$row->ten_loai_sp;
	$img[$stt_hang]=$row->logo;
	$gioithieu[$stt_hang]=$row->mota;
	
		
}
	?>
	<div class="QT">
	<div class="QT_Box_1">
		<h1 style="text-align: center; font-size: 35px;" ><a href="../QuanTri_CSDL.php">Quản Trị Dữ Liệu</a></h1>
		<div class="QT_body">
			<div class="QuanLi_Loai_Sp"><a href="../QuanLiLoaiSanPham/Quan_Li_loai_san_pham.php">QUẢN LÍ LOẠI SẢN PHẨM</a></div>
			<div class="QuanLi_SP"><a href="Quan_Li_san_pham.php">QUẢN LÍ SẢN PHẨM</a></div>
			<div class="QuanLi_TinTuc">QUẢN LÍ TIN TỨC</div>
			<div class="QuanLi_taikhoan">QUẢN LÍ TÀI KHOẢN</div>
			<div class="QuanLi_donhang">QUẢN LÍ ĐƠN HÀNG</div>
		</div>
	</div>
	 
	<div class="QT_DienTT">
		<div class="container" style="display: flex;justify-content: center; align-content: center;height: 100vh;width: 1200px ;margin-top: 200px" >
	<form name="frm_sanpham" method="post" action="Them_luu.php" enctype="multipart/form-data">
<table class="table table-bordered" style="width: 700px;border: 2px">
				
	<tbody>
			<tr>
			  	<td colspan="2" align="center">THÊM SẢN PHẨM</td>
			</tr>
			<tr>
		  <td width="150"><strong>Loại sản phẩm</strong></td>
		  <td width="667">
			  <select name="loaisanpham">
			  <option value="0">--Chọn Loại sản phẩm--</option>
			  <?php 
		  for($i=1;$i<=$tong_bg;$i++)
		  { ?>
			  <option value=<?php echo $id_loai_sanpham[$i] ?>><?php echo $ten_loai_sp[$i] ?></option>
			  <?php } ?>

			  </select></td>
		</tr>
					<tr>
			  <td width="65">Tên sản phẩm</td>
			  <td width="100px"><input type="text" class="form-control" name="txt_tensp" style="border-color: #000000"></td>
			</tr>
			<tr>
			  <td>Ảnh</td>
			  <td><input type="file" name="img" </td>
			</tr>
			<tr>
			  <td>Giới thiệu</td>
			  <td><input type="text" class="form-control" name="txt_gioithieu" style="border-color: #000000"></td>
			</tr>
		<tr>
			  <td>Giá</td>
			  <td><input type="text" class="form-control" name="txt_gia" style="border-color: #000000"></td>
			</tr>
		<tr>
			  <td>Ghi chú</td>
			  <td><input type="text" class="form-control" name="txt_ghichu" style="border-color: #000000"></td>
			</tr>

			
			<tr>
				<td colspan="2" align="center"><input type="submit"> <input type="reset"></td>
			</tr>
				</tbody>
				
			</table>
		</form>
	</div>
		
		</div>
	</div>
	
	
</body>
</html>