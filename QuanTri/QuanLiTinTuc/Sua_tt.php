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
	$idsp=$_REQUEST["idsp"];
	$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");//tạo kết nối với server
	mysqli_select_db($conn,"web") or die ("Không tìm thấy CSDL");// Tìm CSDL đề làm việc
	$sql_select_sanpham="Select * from `tintuc` where id_tintuc=$idsp";
	$result_se_sanpham=mysqli_query($conn,$sql_select_sanpham);
	$row=mysqli_fetch_object($result_se_sanpham);
	$id_tintuc=$row->id_tintuc;
	$tieude=$row->tieu_de;
	$img=$row->img;
	$gioithieu=$row->tin_tuc;
	
	?>
	
	<div class="QT">
	<div class="QT_Box_1">
		<h1 style="text-align: center; font-size: 35px;" >Quản Trị Dữ Liệu</h1>
		<div class="QT_body">
			<div class="QuanLi_Loai_Sp"><a href="Quan_Li_loai_san_pham.php">QUẢN LÍ LOẠI SẢN PHẨM</a></div>
			<div class="QuanLi_SP"><a href="../QuanLiSanPham/Quan_Li_san_pham.php">QUẢN LÍ SẢN PHẨM</a></div>
			<div class="QuanLi_TinTuc">QUẢN LÍ TIN TỨC</div>
			<div class="QuanLi_taikhoan">QUẢN LÍ TÀI KHOẢN</div>
			<div class="QuanLi_donhang">QUẢN LÍ ĐƠN HÀNG</div>
		</div>
	</div>
	 
	<div class="QT_DienTT">
		<div class="container" style="display: flex;justify-content: center; align-content: center;height: 100vh;width: 1200px ;margin-top: 200px" >
	<form name="frm_sanpham" method="post" action="Sua_luu_tt.php?idsp=<?php echo $id_tintuc ?>" enctype="multipart/form-data">
<table class="table table-bordered" style="width: 700px;border: 2px">
				
	<tbody>
			<tr>
			  	<td colspan="2" align="center">CẬP NHẬP TIN TỨC</td>
			</tr>
					<tr>
			  <td width="100px">Tiêu đề</td>
			  <td width="100px"><input type="text" class="form-control" name="txt_tieude" style="border-color: #000000"  value="<?php echo $tieude?>"></td>
			</tr>
			<tr>
			  <td>Ảnh</td>
			  <td><img src="../../img/<?php echo $img?>"><input type="file" name="img"  </td>
			</tr>
			<tr>
			  <td>Giới thiệu</td>
			  <td><input type="text" class="form-control" name="txt_tintuc" style="border-color: #000000"  value="<?php echo $gioithieu?>"></td>
			</tr>		

			
			<tr>
				<td colspan="2" align="center"><input type="submit" value="Gửi"> <input type="reset" value="Đặt lại"></td>
			</tr>
				</tbody>
				
			</table>
		</form>
	</div>
		
		</div>
	</div>
	
	
</body>
</html>