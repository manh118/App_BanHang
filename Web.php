<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Web</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<style>
		.nau{color: #D9AB49}
		

	</style>
	
				<link rel="stylesheet" href="QuanTri/1.css">
				<link rel="stylesheet" href="css/Style.css">
	<style>
		.Mau1{
			color: #9c8350;
		}
		
		a{
			text-decoration: none;
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
	
<div class="MyHeader" > 
	<div class="container py-2">
		<div class="row">		
			<div class="col-md-3" ><a href="Web.php"><img src="img/logo (1).webp" class="img-fluid" alt="logo" width="220" height="100"></a>
			</div>
			<div class="col-md-4 py-2 ">
				<form action="Tim_kiem.php?quanly=timkiem" method="get" style="display: flex;flex-direction: row;" autocomplete="off">
				<div class="input-group">
					<!-- <?php
        // Lấy từ khóa từ URL nếu nó tồn tại
        $tukhoa = isset($_GET['tukhoa']) ? $_GET['tukhoa'] : '';
        ?> -->
					<input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm" aria-label="Recipient's username" aria-	describedby="basic-addon2" style="font-style: italic; opacity: 0.5" name="tukhoa">
  					<input type="submit" class="input-group-text" id="basic-addon2" value="Tìm kiếm" name="timkiem">
					</div>					
				</form>   
				
				</div>
			<div class="col-md-3 py-2" >
	
			
				<div class="textbox" style="background-color: #99790D;display: flex; align-items: center;">
					<div class="fs-7" style="color: #FEFEFE ; margin-left:5px">
        				<i class="fa-solid fa-phone-volume"></i>&nbsp;&nbsp;
						<a>HOTLINE: 190067501</a>
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
					<a href="Gio_hang/Gio_hang.php" class=" position-relative">
					<span class="fs-4" style="color: aliceblue">
						<i class="fa-solid fa-basket-shopping"></i></span>
  					<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    					0
    				<span class="visually-hidden">unread messages</span>
  					</span>
				</a>
					</div>
					<div class="col">
						<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i></button>
						  <ul class="dropdown-menu" style="background-color: #8E8E8E">
							<li><a class="dropdown-item" href="DangKy.php">Đăng Ký</a></li>							  
							<li><a class="dropdown-item" href="DangNhap.php">Đăng Nhập</a></li>							
<!--							<li><a class="dropdown-item" href="#">Đăng Xuất</a></li>-->
						  </ul>
						</div>				
					</div>				
				</div>									
			</div>
			</div>		
		</div>		

	
	</div>
	
<div class="MyMainmenu" style="background-color: aliceblue;" >
<!--	margin-top:75.41px;-->
	<div class="MyMainmenu-content" style="">
		<div class="row">
			<div class="col-md-2 py-2 text-white" style="background-color: #9c8350; margin-left: 12px;"><a href="Web2.php" style="color: #FFFFFF;"><i class="fa-solid fa-bars"></i>&nbsp;&nbsp;Danh mục sản phẩm</a></div>
			<div class="col-4" style="line-height: 43px; margin-left: 15px"><i>Stationery lựa chọn số 1 cho bạn - Hãy đến với chúng tôi</i></div>
			<div class="col-5">
			<nav class="navbar navbar-expand-lg navbar-light " style="height: 40px;margin-left: 120px ">
  <div class="container-fluid">
    <a class="navbar-brand d-none" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
		 <li><a  href="#" style="color: #000000">Khuyến mãi</a></li>
        <li ><a href="#" style="color: #000000">Dịch vụ</a></li>
		  <li><a  href="TinTuc.php" style="color: #000000">Tin tức</a></li>
		  <li><a  href="LienHe.php" style="color: #000000">Liên hệ</a></li> 
      </ul>
      
    </div>
  </div>
</nav>
			</div>
		</div>
		
		</div>
	
	</div>
	
	<div class="MySlide " >
				<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slider_1.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slider_1.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slider_1.webp" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
			</div>
	
	<div class="MyManicontent" >
		<section class="s1">
		
				 </section>
		<section class="s2 py-4">
			<div class="container">
				<div class="row" style="text-align: center">
					<div class="col"><a href="Web2.php"><img src="img/202406211758262024061818473920240618181909cate_1.webp"><p style="padding-top: 5px">Học Sinh</p></a></div>				
					<div class="col"><a href="Web2.php"><img src="img/cate_2.webp"><p style="padding-top: 5px">Văn phòng</p></a></div>				
					<div class="col py-2"><a href="Web2.php"><img src="img/cate_3.webp"><p style="padding-top: 5px">Phụ kiện</p></a></div>
					<div class="col"><img src="img/202406211759082024061819193120240618144458cate_4.webp"><p style="padding-top: 5px">Cặp-Túi sách</p></div>
					<div class="col"><img src="img/cate_5.webp"><p style="padding-top: 5px">Dụng cụ vẽ</p></div>
				</div>
			</div>
		</section>
		<section class="s3">
			<div class="container">
				<div style="text-align: center"><img src="img/20240618215840FlSale.webp"></div>
				<div class="textbox1">
					<div class="textbox2" ></div>
					<div class="row" style="text-align: center; margin-top: 15px"  >
						<div class="col"><img src="img/sp10.webp" class="img-fluid" ><p style="margin-top: 10px;margin-bottom: 5px">Vở viết kẻ ngang</p><p style="margin-bottom: 10px;color:#CD090C">12.000đ&nbsp;&nbsp;&nbsp;<a style="text-decoration: line-through;font-size: 90%">49.000đ</a></p>
						<button type="button" class="btn" data-bs-toggle="button" style="background-color: #CD090C;color: aliceblue">Mua</button>
						</div>
						<div class="col"><img src="img/sp8-3.webp" class="img-fluid"><p style="margin-top: 10px;margin-bottom: 5px">Hộp đựng văn phòng</p>
						<p style="margin-bottom: 10px;color:#CD090C">12.000đ&nbsp;&nbsp;&nbsp;<a style="text-decoration: line-through;font-size: 90%">49.000đ</a></p>
						<button type="button" class="btn" data-bs-toggle="button" style="background-color: #CD090C;color: aliceblue">Mua</button>
						</div>
						<div class="col"><img src="img/sp7.webp" class="img-fluid" ><p style="margin-top: 10px;margin-bottom: 5px">Sổ tay cá nhân</p>
						<p style="margin-bottom: 10px;color:#CD090C ">12.000đ&nbsp;&nbsp;&nbsp;<a style="text-decoration: line-through;font-size: 90%">49.000đ</a></p>
						<button type="button" class="btn " data-bs-toggle="button" style="background-color: #CD090C;color: aliceblue">Mua</button>
						</div>
						<div class="col"><img src="img/sp6.webp" class="img-fluid" ><p style="margin-top: 10px;margin-bottom: 5px">Máy tính mini gấu</p>
						<p style="margin-bottom: 10px;color:#CD090C ">12.000đ&nbsp;&nbsp;&nbsp;<a style="text-decoration: line-through;font-size: 90%">49.000đ</a></p>
						<button type="button" class="btn " data-bs-toggle="button" style="background-color: #CD090C;color: aliceblue">Mua</button>
						</div>
					</div>
				</div>	
				
			</div>
		</section> 
		<section class="s4" style="background-color: #E8DBDB; margin-top: 50px" > <br>		
			<h2 style="text-align: center; margin-top: 50PX;margin-bottom: 30px">SẢN PHẨM NỔI BẬT</h2>
				<div class="container">
			<div class="row" style="text-align: center">
				<div class="col"><img src="img/sp7.webp" class="img-fluid" style="width: 400px; height: auto"><p style="margin-top: 10px;margin-bottom: 5px; font-size: 150%">Vở viết kẻ ngang</p><p style="margin-bottom: 10px;color:#CD090C;font-size: 150%">12.000đ&nbsp;&nbsp;&nbsp;<a style="text-decoration: line-through;font-size: 80%">49.000đ</a></p>
				</div>
				<div class="col"><img src="img/sp8-3.webp" class="img-fluid" style="width: 400px; height: auto"><p style="margin-top: 10px;margin-bottom: 5px;font-size: 150%">Vở viết kẻ ngang</p><p style="margin-bottom: 10px;color:#CD090C;font-size: 150%">12.000đ&nbsp;&nbsp;&nbsp;<a style="text-decoration: line-through;font-size: 80%">49.000đ</a></p></div>
				<div class="col"><img src="img/sp6.webp "class="img-fluid" style="width: 400px; height: auto"><p style="margin-top: 10px;margin-bottom: 5px;font-size: 150%">Vở viết kẻ ngang</p><p style="margin-bottom: 10px;color:#CD090C;font-size: 150%">12.000đ&nbsp;&nbsp;&nbsp;<a style="text-decoration: line-through;font-size: 80%">49.000đ</a></p></div>
				</div>
			</div>
				
		</section>
		<section class="s5">
			<h2 style="text-align: center;margin-top: 100px;margin-bottom: 50px; " >VĂN PHÒNG PHẨM CHO BẠN</h2>
		<div class="Product_list">
			<div class="row" style="margin-left: 150px;margin-right:150px ;text-align: center">
				<div class="col-md-3">
					<img src="img/sp11.webp" class="img-fluid">
					<p style="margin-top:10px;margin-bottom:0; font-size: 150%">Vở viết kẻ ngang</p><p style="color:#CD090C;font-size: 150%">12.000đ</p>
				</div>
				<div class="col-md-3">
					<img src="img/sp12.webp" class="img-fluid">
					<p style="margin-top:10px;margin-bottom:0; font-size: 150%">Túi đựng mỹ phẩm</p><p style="color:#CD090C;font-size: 150%">7.000đ</p>
				</div>
				<div class="col-md-3">
					<img src="img/sp9.webp" class="img-fluid">
					<p style="margin-top:10px;margin-bottom:0; font-size: 150%">Bìa kẹp tài liệu</p><p style="color:#CD090C;font-size: 150%">32.000đ</p>
				</div>
				<div class="col-md-3">
					<img src="img/sp13.webp" class="img-fluid">
					<p style="margin-top:10px;margin-bottom:0; font-size: 150%">Bút xóa giấy</p><p style="color:#CD090C;font-size: 150%">16.000đ</p>
				</div>
				<div class="col-md-3">
					<img src="img/sp14.webp" class="img-fluid">
					<p style="margin-top:10px;margin-bottom:0; font-size: 150%">Bút đánh dấu màu</p><p style="color:#CD090C;font-size: 150%">32.000đ</p>
				</div>
				<div class="col-md-3">
					<img src="img/s1" class="img-fluid">
					<p style="margin-top:10px;margin-bottom:0; font-size: 150%">Sổ tay mini</p><p style="color:#CD090C;font-size: 150%">24.000đ</p>
				</div>
				<div class="col-md-3">
					<img src="img/sp15.webp" class="img-fluid">
					<p style="margin-top:10px;margin-bottom:0; font-size: 150%">Sổ tay mini</p><p style="color:#CD090C;font-size: 150%">20.000đ</p>
				</div>
				<div class="col-md-3">
					<img src="img/s2.jpeg" class="img-fluid">
					<p style="margin-top:10px;margin-bottom:0; font-size: 150%">Kẹp tài liệu A4</p><p style="color:#CD090C;font-size: 150%">17.000đ</p>
				</div>
				<a href="Web2.php" class="btn" style="background-color: #A39180; color: aliceblue; width: 200px; height: 50px; margin-top: 10px;align-content: center;margin-left: auto;margin-right: auto">Xem Thêm </a>
				
				

				
			</div>
			
			</div>
			
		</section>
		<div class="s6">
				<div class="s6-1">
					<div class="s6-1-1"><b>DỊCH VỤ CỦA CHÚNG TÔI</b></div>
					<div class="s6-1-2">
					<p> <img src="img/icon_service_1 (1).svg" alt="">&nbsp;&nbsp;&nbsp;
						GIAO HÀNG FREE NỘI THÀNH</p>
					<p><img src="img/icon_service_2.svg" alt="">&nbsp;&nbsp;&nbsp;
						TRẢ HÀNG TRONG VÒNG 24H</p>
					<p>
						<img src="img/icon_service_3.svg" alt="">&nbsp;&nbsp;&nbsp;
						KIỂM TRA HÀNG KHI NHẬN HÀNG</p>
					<p>
						<img src="img/icon_service_4.svg" alt="">&nbsp;&nbsp;&nbsp;
						THANH TOÁN COD</p>
					</div>
			</div>
				<div class="s6-2">
				<img style="" src="img/img_people.webp" alt="" >
					
			</div>
			
		</div>
<!--
		<section class="s6" style="background-color: #E8DBDB; margin-top: 50px">
			<div class="container" style="margin-left: 150px">
				<h3 style="text-align: left; margin-top: 50PX;margin-bottom: 30px">DỊCH VỤ CỦA CHÚNG TÔI</h3>
				<h4>Giao hàng</h4>
				<h4>Giao hàng</h4>
				<h4>Giao hàng</h4>
				<h4>Giao hàng</h4>
			</div>
		</section>
-->
		<br>
		
	</div>
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


<!--			<div class="row">
					<div class="col">
						<div class="row">
							<div class="col-3">
								<div class="fs-3" style="color: #FEFEFE"><i class="fa-solid fa-phone-volume"></i>
								</div>
							</div>
							<div class="col-9" style="text-align: center"> 
								<b style="color:#FFFFFF">HOTLINE<br></b>									
							<strong class="text-danger">19006750</strong>
							</div>
						</div>
					
					</div>
					<div class="col">
					<div class="row">
							<div class="col-3">
								<div class="fs-3" style="color: #FEFEFE" ><i class="fa-solid fa-user"></i>
								</div>
							</div>
							<div class="col-9" style="text-align: center"> 
								<b style="color: #FEFEFE">Xin Chào!<br></b>									
							<strong class="KoGach" ><a href="b5.php">Đăng nhập</a></strong>
							</div>
						</div>
					</div>
				</div> -->
