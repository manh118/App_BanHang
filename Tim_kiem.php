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
	
	<link rel="stylesheet" href="../css/Style.css"> 
	<link rel="stylesheet" href="../css/Web2css.css">
	<link rel="stylesheet" href="../QuanTri/Layten.php">
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
			<div class="col-md-3" ><a href="Web.php"><img src="img/logo (1).webp" class="img-fluid" alt="logo" width="220" height="100"></a>
			</div>
			<div class="col-md-4 py-2 ">
				<form action="Tim_kiem.php?quanly=timkiem" method="get" style="display: flex;flex-direction: row;">
				<div class="input-group">
					<?php
        // Lấy từ khóa từ URL nếu nó tồn tại
        $tukhoa = isset($_GET['tukhoa']) ? $_GET['tukhoa'] : '';
        ?>
					<input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm" aria-label="Recipient's username" aria-	describedby="basic-addon2" style="font-style: italic; opacity: 0.5" name="tukhoa" value="<?php echo htmlspecialchars($tukhoa); ?>" >
  					<input type="submit" class="input-group-text" id="basic-addon2" value="Tìm kiếm" name="timkiem">
					</div>					
				</form>
				
				</div>
			<div class="col-md-3 py-2" >
	<!---->
			
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
    					0
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
			
			<div class="col-md-2 py-2 text-white" style="background-color: #9c8350; margin-left: 12px;"><i class="fa-solid fa-bars"></i>&nbsp;&nbsp;Danh mục sản phẩm</div>
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
	<section class="MyManicontent">		 		
		<div class="Om">
			<div class="sidebar">
				
				<?php 
					$sql_loaisp="SELECT * FROM loai_sanpham ORDER BY id_loai_sanpham DESC";
					$query_loaisp=mysqli_query($conn,$sql_loaisp);
				?>
				<li><h5 style="margin-top: 10px;"><a href="Web2.php">Loại sản phẩm</a></h5></li>
				
				<ul class="list_sidebar">
					
				<?php 
				while($_row_loaisp= mysqli_fetch_array($query_loaisp)){
				?>
				
					<li><a href="Web2.php?quanly&id=<?php echo $_row_loaisp['id_loai_sanpham'] ?>"><?php echo $_row_loaisp['ten_loai_sp'] ?></a></li>
				
				
				<?php
				
					}
				?>
</ul>
			</div>
			<div class="Hienthi">
				
			<?php 
				$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");//tạo kết nối với server
	mysqli_select_db($conn,"web") or die ("Không tìm thấy CSDL");// Tìm CSDL đề làm việc
				
				if (isset($_GET['timkiem'])){
					$tukhoaa= $_GET['tukhoa'];
					
					$sql_timkiem = "SELECT * FROM sanpham WHERE ten_sp LIKE '%" .$tukhoaa. "%' ";
					$query_timkiem = mysqli_query($conn,$sql_timkiem);
				}else{
					echo "Nhap tu khoa cần tìm";
				}
				?>
				
				<h3>Từ khóa cần tìm : <?php echo $tukhoaa ?></h3>
			<ul class="pproduct_list">
				<?php 
				while($row_pro = mysqli_fetch_array($query_timkiem)){
				?>
				<li>
					<a href="Web2_Chi_tiet_sp.php?quanly&id=<?php echo $row_pro['id_sanpham'] ?>">
						<img width="250" height="250px" src="img/<?php echo $row_pro['img_sp']?>">
						<div class="title_product"><h4><?php echo $row_pro['ten_sp']?></h4></div>
						<p class="price_product"><?php echo $row_pro['gia']?></p>
					
					</a>
					
				</li>
				
				<?php 
				}
				?>
				</ul>
				
				
				</ul>
			</div>
		</div>
		
		
	</section>
	<div class="clear"></div>
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
					<img src="img/logo (1).webp" height="80" style="margin-bottom: 15px;"><br>
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