<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" >
	
	<link rel="stylesheet" href="../../css/DangNhap-CSS.css">
</head>

	
<?php
session_start();
$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");//tạo kết nối với server
	mysqli_select_db($conn,"web") or die ("Không tìm thấy CSDL");// Tìm CSDL đề làm việc
	 
	if(isset($_POST['dangnhap'])){
$taikhoan=$_POST['txt_email'];
$matkhau =$_POST['txt_pwd'];

$sql="SELECT * FROM user WHERE email='$taikhoan' AND matkhau='$matkhau' LIMIT 1";
$row = mysqli_query($conn, $sql);
$count = mysqli_num_rows($row);
if($count>0){

$_SESSION['dangnhap'] = $taikhoan;
	header("Location: QuanTri_CSDL.php");
}else{
echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng, vui lòng nhập lại.")</script>';
	header("Location:login.php");

	}
	}
	?>
<body>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<div class="MyContent" style="margin-top: 50px">
		
		<div class="Bang" style="height: 300px;margin-left: auto;margin-right: auto">
			<div class="row">	
			</div>
			<form  name="frm_login" autocomplete = "off" method="post" action="">
				  <div class="mb-3" style="margin-top: 20px">
					<label for="exampleInputEmail1" class="form-label"><b>Tài khoản</b></label>
					<input type="text" class="form-control" id="exampleInputEmail1" name="txt_email">
				  </div>
				  <div class="mb-3">
					<label for="exampleInputPassword1" class="form-label"><b>Mật Khẩu</b></label>
					<input type="password" class="form-control" id="exampleInputPassword1" name="txt_pwd">
				  </div>
				  <input type="submit" style="background-color: #000000;color: #FFFFFF;width: 100%;padding: 8px 0;margin-top: 5px;border-radius: 10px " onClick="checklg()" name="dangnhap" value="Đăng nhập"></input>
			</form>
			
		
		</div>
	
	</div>
	
</body>
<script language="javascript">
		function checklg(){
			var user=document.frm_login.txt_email.value;
			var pass=document.frm_login.txt_pwd.value;
			if(user==""){
				alert("Bạn chưa nhập Email. Hãy kiểm tra lại")
				document.frm_login.txt_email.focus();
			}else if(pass==""){
				alert("Bạn chưa nhập Mật khẩu. Hãy kiểm tra lại")
				document.frm_login.txt_pwd.focus();
			}
			else{
				document.frm_login.submit();
			}
		}
			
	
	</script>
</html>