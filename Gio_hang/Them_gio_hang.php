<?php 

session_start();
$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");//tạo kết nối với server
	mysqli_select_db($conn,"web") or die ("Không tìm thấy CSDL");// Tìm CSDL đề làm việc

//Cong san pham
if(isset($_GET['cong'])){
	$id=$_GET['cong'];
	foreach($_SESSION['cart'] as $cart_item){
		if($cart_item['id']!=$id){
			$product[]=array('ten_sp'=>$cart_item['ten_sp'],'id'=>$cart_item['id'],'soluong' => $cart_item['soluong'],'gia'=>$cart_item['gia'],'img_sp'=>$cart_item['img_sp']);
			$_SESSION['cart']=$product;
		}else{
			$tangsoluong= $cart_item['soluong']+1;
			
			$product[]=array('ten_sp'=>$cart_item['ten_sp'],'id'=>$cart_item['id'],'soluong' => $tangsoluong,'gia'=>$cart_item['gia'],'img_sp'=>$cart_item['img_sp']);
		}
		$_SESSION['cart']=$product;
	}
	header('Location: Gio_hang.php');
}

//Tru san pham
if(isset($_GET['tru'])){
	$id=$_GET['tru'];
	foreach($_SESSION['cart'] as $cart_item){
		if($cart_item['id']!=$id){
			$product[]=array('ten_sp'=>$cart_item['ten_sp'],'id'=>$cart_item['id'],'soluong' => $cart_item['soluong'],'gia'=>$cart_item['gia'],'img_sp'=>$cart_item['img_sp']);
			$_SESSION['cart']=$product;
		}else{
			$giamsoluong= $cart_item['soluong']-1;
			if($cart_item['soluong'] >1){
			
			$product[]=array('ten_sp'=>$cart_item['ten_sp'],'id'=>$cart_item['id'],'soluong' => $giamsoluong,'gia'=>$cart_item['gia'],'img_sp'=>$cart_item['img_sp']);
			}else{
				$product[]=array('ten_sp'=>$cart_item['ten_sp'],'id'=>$cart_item['id'],'soluong' => $cart_item['soluong'],'gia'=>$cart_item['gia'],'img_sp'=>$cart_item['img_sp']);
			}
			
		}
		$_SESSION['cart']=$product;
	}
	header('Location: Gio_hang.php');
}
//xoa tung san pham
if(isset($_SESSION['cart']) && isset($_GET['xoa'])){
	$id=$_GET['xoa'];
	foreach($_SESSION['cart'] as $cart_item){
		
		if($cart_item['id']!=$id){
					$product[]=array('ten_sp'=>$cart_item['ten_sp'],'id'=>$cart_item['id'],'soluong' => $cart_item['soluong'],'gia'=>$cart_item['gia'],'img_sp'=>$cart_item['img_sp']);
}
		$_SESSION['cart']=$product;
		header('Location: Gio_hang.php');
	}
}

//xoa tat ca san pham
if(isset($_GET['xoatatca'])&& $_GET['xoatatca']==1){
	unset($_SESSION['cart']);
	header('Location: Gio_hang.php');
}

//Them san pham vao gio hang
if(isset($_POST['themgiohang'])){
//	session_destroy();
	$id=$_GET['idsanpham'];
	$so_luong =1;
	$sql="SELECT * FROM sanpham WHERE id_sanpham='$id' LIMIT 1";
	$query= mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($query);
	if($row){	$new_product=array(array('ten_sp'=>$row['ten_sp'],'id'=>$id,'soluong'=>$so_luong,'gia'=>$row['gia'],'img_sp'=>$row['img_sp']));
		//Kiem tra sesssion gio hang ton tai
		if(isset($_SESSION['cart'])){
			$found = false;
			foreach($_SESSION['cart'] as $cart_item){
				//neu du lieu trung
				if($cart_item['id']==$id){
					$product[]=array('ten_sp'=>$cart_item['ten_sp'],'id'=>$cart_item['id'],'soluong' => $cart_item['soluong'] + 1,'gia'=>$cart_item['gia'],'img_sp'=>$cart_item['img_sp']);
					$found=true;
				}else{
					//neu khong trung du lieu
					$product[]=array('ten_sp'=>$cart_item['ten_sp'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia'],'img_sp'=>$cart_item['img_sp']);
				}

			}
			if($found==false)
			{
				//lien ket du lieu new product voi product
				$_SESSION['cart']=array_merge($product,$new_product);
			}else{
				$_SESSION['cart']=$product;
			}	
		}else{
			$_SESSION['cart']=$new_product;
		}
			 
	}
	header('Location: Gio_hang.php');
}


?>


