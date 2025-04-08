<?php 
		session_start();
		
		?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<style>
		.nau{color: #D9AB49}
	</style>
	
	<link rel="stylesheet" href="../../css/Style.css"> 
	<link rel="stylesheet" href="../../css/Web2css.css">
	<link rel="stylesheet" href="../QuanTri/Layten.php">
	<link rel="stylesheet" href="../../css/DangNhap-CSS.css">
	
	<style>
		.Mau1{
			color: #9c8350;
		}
	</style>
	
</head>
	
<style>
	.KoGach a{
		text-decoration: none;
	}
</style>
	
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<?php
	$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");//tạo kết nối với server
	mysqli_select_db($conn,"web") or die ("Không tìm thấy CSDL");// Tìm CSDL đề làm việc
	
	
	?>
<section class="MyHeader" style="background-color:#2E2E2E"> 
	<div class="container py-2">
		<div class="row">
			<div class="col-md-3" ><a href="../Web.php"><img src="../img/logo (1).webp" class="img-fluid" alt="logo" width="220" height="100"></a>
			</div>
			<div class="col-md-4 py-2 ">
				<form action="Tim_kiem.php?quanly=timkiem" method="get" style="display: flex;flex-direction: row;">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm" aria-label="Recipient's username" aria-	describedby="basic-addon2" style="font-style: italic; opacity: 0.5" name="tukhoa">
  					<input type="submit" class="input-group-text" id="basic-addon2" value="Tìm kiếm" name="timkiem">
					</div>					
				</form>
				</div>
			<div class="col-md-3 py-2" >
			
				<div class="textbox" style="background-color: #99790D;display: flex; align-items: center;">
					<div class="fs-7" style="color: #FEFEFE ; margin-left:5px">
        				<i class="fa-solid fa-phone-volume"></i>&nbsp;&nbsp;
						<a>HOTLINE: 19006750</a>
				 </div>
			
				</div>
				
			</div>
			<div class="col-md-2 py-2">
				<div class="row">
					<div class="col">
						<a href="#" class=" position-relative">
					<span class="fs-4" style="color: aliceblue"><i class="fa-regular fa-heart"></i></span>
  					<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    					
    				<span class="visually-hidden">unread messages</span>
  					</span>
				</a>
					</div>
					<div class="col">
					<a href="#" class=" position-relative">
					<span class="fs-4" style="color: aliceblue">
						<i class="fa-solid fa-basket-shopping"></i></span>
  					<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
						<?php 
						
						 // Đếm tổng số lượng sản phẩm trong giỏ hàng

							
									$tongsp = 0;
									foreach ($_SESSION['cart'] as $cart_item) {
										$tongsp += $cart_item['soluong'];
									}

									echo $tongsp ;
						
						?>
    				<span class="visually-hidden">unread messages</span>
  					</span>
				</a>
					</div>
					<div class="col">
						<button class="btn btn-secondary" data-toggle="dropdown">1</button>
						<div class="dropdown-menu">						
						<a href="#" class="dropdown-item" >item1</a>
						<a href="#" class="dropdown-item" >item1</a>
						</div>				
					</div>				
				</div>									
			</div>
			</div>		
		</div>		

	
	</section>
	<section class="MyMainmenu" style="background-color: aliceblue ; siz" >
	<div class="container">
		<div class="row">
			
			<div class="col-md-2 py-2 text-white" style="background-color: #9c8350; margin-left: 12px;"><a href="../Web2.php" style="color: #FFFFFF;"><i class="fa-solid fa-bars"></i>&nbsp;&nbsp;Danh mục sản phẩm</a></div>
			<div class="col-md-4"></div>
			<div class="col-md-5">
			<nav class="navbar navbar-expand-lg navbar-light " style="height: 40px;margin-left: 120px ">
  <div class="container-fluid">
    <a class="navbar-brand d-none" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			 <li class="nav-item">
          <a class="nav-link Mau1 active" aria-current="page" href="#">Khuyến mãi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link Mau1 active" href="#">Dịch vụ</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link Mau1 active" href="#">Tin tức</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link Mau1 active" href="#">Liên hệ</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
			</div>
		</div>
		
		</div>
	
	</section>
	<div class="DNTK">
			<div class="text-content">
				<i class="text1">Trang chủ / <i style="color: #E5C18C">Giỏ Hàng</i></i>
				<h4 class="text2">GIỎ HÀNG</h4>
			</div>
		</div>
	<section class="MyManicontent">		
		
		
	
		<table class="table table-bordered" style="border: 2px;text-align: center;margin-top: 20px">
			<thead>
					<th width="100px">STT</th>
					<th width="200px">Tên sản phẩm</th>
					<th width="200px">Ảnh</th>
					<th width="300px">Số Lượng</th>
					<th width="150px">Giá</th>
					<th width="200px">Thành tiền</th>
					<th width="100px">Quản Lý</th>
				
			</thead>
				<?php 
			
			
			
					if (isset($_SESSION['cart'])) {
						
						if(isset($_GET['trang'])){
							$page=$_GET['trang'];
						}else{
							$page='';
						}
					if($page=='' || $page == 1){
						$begin = 0;
					}else{
						$begin = ($page*4)-4;
					}

						 
						
						$cart_items = array_slice($_SESSION['cart'], $begin,4);
						// Lấy tổng số sản phẩm trong giỏ hàng
						$total_items = count($_SESSION['cart']);
						
							$i = $begin;
							$tongtien = 0;
							foreach ($cart_items as $cart_item) {
								$thanhtien = $cart_item['soluong'] * $cart_item['gia'];
								$i++;
						?>
								<tr>
									<td><?php echo $i ?></td>
									<td><?php echo $cart_item['ten_sp'] ?></td>
									<td><img src="../img/<?php echo $cart_item['img_sp'];  ?>" width="150px"></td>
									<td>
										<a href="Them_gio_hang.php?cong=<?php echo $cart_item['id']?>"><i class="fa-solid fa-plus"></i></a>&nbsp;
										<?php echo $cart_item['soluong'] ?>
										&nbsp;<a href="Them_gio_hang.php?tru=<?php echo $cart_item['id']?>"><i class="fa-solid fa-minus"></i></a>
									</td>
									<td> <p style="color: red"><?php echo number_format($cart_item['gia'], 0, ',', '.') . 'đ'; ?></p></td>
									<td><?php echo number_format($thanhtien, 0, ',', '.') . 'đ' ?></td>
									<td><a href="Them_gio_hang.php?xoa=<?php echo $cart_item['id']?>">Xóa</a></td>
								</tr>
						<?php
							}
						?>
			
				<?php 
			
					if (isset($_SESSION['cart'])) {
			$tongtien = 0;
    						foreach ($_SESSION['cart'] as $cart_item) {
							$tongtien += $cart_item['soluong'] * $cart_item['gia'];
    						}
					}
						?>
				
			
						<tbody >
						<td colspan="7" style="">
						<p style="margin-bottom: 0;float: left">Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.') . 'đ' ?></p>
						<p style="float: right;margin-bottom: 0;margin-right: 20px"><a href="Them_gio_hang.php?xoatatca=1">Xóa tất cả</a></p>
						
								</td>
							</tbody>
			
			
			<td colspan="7"><p style="margin-bottom: 0"><a href="camon.php">Đặt hàng</a></p></td>
						<?php
					
						} else {
						?>
							<tbody>
								<td colspan="7"><p>Hiện tại giỏ hàng trống</p></td>
							</tbody>
						<?php
						}
						?>
			</table>
		<ul class="pagination">
					<li class="pagination-item">
					  <a href="" class="pagination-item_link">
						<i class="fa-solid fa-angle-left"></i>
						</a>
					</li>
					<?php 
                // Tính toán tổng số trang
                $total_pages = ceil($total_items / 4);
                for ($i = 1; $i <= $total_pages; $i++) {
                ?>
					  <li class="pagination-item " <?php if($i==$page){echo 'style="background:#9c8350 "';}else{echo '';} ?>>
					  <a href="gio_hang.php?trang=<?php echo $i ?>" class="pagination-item_link"><?php echo $i ?></a></li> 
						<?php
						}
						  ?>  
					
					  
					  
					  <li class="pagination-item ">
					  <a href="" class="pagination-item_link">
						<i class="fa-solid fa-angle-right"></i>
						</a>
					</li>
			</ul>
	</section>
	
		
	<section class="MyFooter bg-dark text-white py-4">
		<div class="container">
			<div class="row">
			  <div class="col-md-3 py-5">
					<h4>Tìm hiểu thêm</h4>
					<ul class="list-menu">			
						<li class="li_menu"><a href="/" title="Trang chủ" rel="nofollow">Trang chủ</a></li>					
						<li class="li_-menu"><a href="/" title="Giới thiệu" rel="nofollow">Giới thiệu</a></li>				
						<li class="li_-menu"><a href="/" title="Sản phẩm" rel="nofollow">Sản phẩm</a></li>
						<li class="li_-menu"><a href="/" title="Sản phẩm" rel="nofollow">Tuyển dụng</a></li>
						<li class="li_-menu"><a href="/" title="Tin tức" rel="nofollow">Tin tức</a></li>					
						<li class="li_-menu"><a href="/" title="Liên hệ" rel="nofollow">Liên hệ</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 py-5">
					<h4>Tìm hiểu thêm</h4>
					<ul class="list-menu">			
						<li class="li_menu"><a href="/" title="Trang chủ" rel="nofollow">Trang chủ</a></li>					
						<li class="li_-menu"><a href="/" title="Giới thiệu" rel="nofollow">Giới thiệu</a></li>				
						<li class="li_-menu"><a href="/" title="Sản phẩm" rel="nofollow">Sản phẩm</a></li>
						<li class="li_-menu"><a href="/" title="Sản phẩm" rel="nofollow">Tuyển dụng</a></li>
						<li class="li_-menu"><a href="/" title="Tin tức" rel="nofollow">Tin tức</a></li>					
						<li class="li_-menu"><a href="/" title="Liên hệ" rel="nofollow">Liên hệ</a></li>
						
					</ul>

				</div>
				<div class="col-md-3 py-5">
				<h4>Hỗ trợ khách hàng</h4>
					<ul class="list-menu">			
						<li class="li_menu"><a href="/" title="Trang chủ" rel="nofollow">Trang chủ</a></li>					
						<li class="li_-menu"><a href="/" title="Giới thiệu" rel="nofollow">Giới thiệu</a></li>				
						<li class="li_-menu"><a href="/" title="Sản phẩm" rel="nofollow">Sản phẩm</a></li>
						<li class="li_-menu"><a href="/" title="Sản phẩm" rel="nofollow">Tuyển dụng</a></li>
						<li class="li_-menu"><a href="/" title="Tin tức" rel="nofollow">Tin tức</a></li>					
						<li class="li_-menu"><a href="/" title="Liên hệ" rel="nofollow">Liên hệ</a></li>
						
					</ul>
				
				</div>
				
				<div class="col-md-3 py-5 ">
				<h4>Theo dõi</h4>
					<ul class="list-menu">			
						<li class="li_menu"><a href="/" title="Trang chủ" rel="nofollow">Trang chủ</a></li>					
						<li class="li_-menu"><a href="/" title="Giới thiệu" rel="nofollow">Giới thiệu</a></li>				
						<li class="li_-menu"><a href="/" title="Sản phẩm" rel="nofollow">Sản phẩm</a></li>
						<li class="li_-menu"><a href="/" title="Sản phẩm" rel="nofollow">Tuyển dụng</a></li>
						<li class="li_-menu"><a href="/" title="Tin tức" rel="nofollow">Tin tức</a></li>					
						<li class="li_-menu"><a href="/" title="Liên hệ" rel="nofollow">Liên hệ</a></li>
						
					</ul>
				
				</div>
				
			</div>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<a href="../Web.php"><img src="../img/logo (1).webp" height="80" style="margin-bottom: 15px;"></a><br>
					<span class="fs-6"><i class="fa-solid fa-location-dot nau"></i> &nbsp;&nbsp;Trụ sở :Tầng 6 - Tòa nhà Ladeco - 266 Đội Cấn </span><br>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phường Liễu Giai - Quận Ba Đình - TP Hà Nội</p>
					
					<p class="fs-6"><i class="fa-solid fa-headset nau" ></i>&nbsp;&nbsp;Tổng đài: 19006750</p>
					<p class="fs-6"><i class="fa-solid fa-envelope nau"></i>&nbsp;&nbsp;Email: support@sapo.vn</p>
					
				</div>
				<div class="col-md-6" style="margin-top: 30px">
				<h5>NHẬN TIN KHUYẾN MÃI</h5>
					<div class="input-group mb-3">
  					<input style="margin-top: 20px" type="text" class="form-control" placeholder="Nhập Email của bạn" aria-label="" aria-describedby="basic-addon2">
  					<span style="margin-top: 20px ; background-color: #F90D11 ; color: aliceblue" class="input-group-text" id="basic-addon2" >Đăng ký</span>
</div>
					<div>
						<span class="box border " style="color:#3004B1"><i class="fa-brands fa-facebook"></i></span>
						<span class="box border " style="color:#0CB8D9"><i class="fa-brands fa-twitter"></i></span>
						<span class="box border " style="color:#EB2942"><i class="fa-brands fa-google"></i></span>
						<span class="box border " style="color:#D3001B"><i class="fa-brands fa-youtube"></i></span>
					</div>
				</div>
			
			</div>
			<hr>
			<div class="row">
				<div style="text-align: center">@ Bản quyền thuộc về Awesome Team | Cung cấp bởi <a style="color: #D9AB49">Sapo</a></div>
				
			</div>
			
		</div>
	
	
	</section>
	
</body>
</html>

<script>document.addEventListener('DOMContentLoaded', (event) => {
				const quantityInput = document.getElementById('quantity');
				const increaseBtn = document.getElementById('increase');
				const decreaseBtn = document.getElementById('decrease');

				increaseBtn.addEventListener('click', () => {
					quantityInput.value = parseInt(quantityInput.value) + 1;
				});

				decreaseBtn.addEventListener('click', () => {
					if (quantityInput.value > 0) {
						quantityInput.value = parseInt(quantityInput.value) - 1;
					}
				});
			});
			</script>
<!--		 											PHÂN TRANG	
				<ul class="pagination">
					<li class="pagination-item">
					  <a href="" class="pagination-item_link">
						<i class="fa-solid fa-angle-left"></i>
						</a>
					</li>
					  <li class="pagination-item pagination-item--active">
					  <a href="b5.php" class="pagination-item_link">1</a>
					</li>
					  <li class="pagination-item ">
					  <a href="" class="pagination-item_link">2</a>
					</li>
					  <li class="pagination-item ">
					  <a href="" class="pagination-item_link">3</a>
					</li>
					  <li class="pagination-item ">
					  <a href="" class="pagination-item_link">4</a>
					</li>
					  <li class="pagination-item ">
					  <a href="" class="pagination-item_link">5</a>
					</li>
					  <li class="pagination-item ">
					  <a href="" class="pagination-item_link">...</a>
					</li>
					  <li class="pagination-item ">
					  <a href="" class="pagination-item_link">14</a>
					</li>
					  
					  <li class="pagination-item ">
					  <a href="" class="pagination-item_link">
						<i class="fa-solid fa-angle-right"></i>
						</a>
					</li>
			</ul>
			-->	  