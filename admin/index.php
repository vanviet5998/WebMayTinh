<?php
	session_start();
	include "../db/connect.php";
	//session_destroy();
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['taikhoan'];
		$matkhau = md5($_POST['matkhau']);
		if($taikhoan == '' || $matkhau ==''){
			echo '<script>alert("Xin nhập đủ tài khoản và mật khẩu!")</script>';
		}else{
			$sql_select_admin = mysqli_query($con,"SELECT * FROM tbl_admin WHERE admin_taikhoan='$taikhoan' AND admin_matkhau='$matkhau' LIMIT 1" );
			$count = mysqli_num_rows($sql_select_admin);
			$row_dangnhap = mysqli_fetch_array($sql_select_admin);
			if($count >0 ){
				$_SESSION['dangnhap'] = $row_dangnhap['admin_name'];
				$_SESSION['admin_id'] = $row_dangnhap['admin_id'];
				header('Location:dashboard.php');
			}else{
				echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác!")</script>';
			}
			
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập Admin</title>
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="icon" href="../assets/images/favicon.ico" type="image/png">
	<style type="text/css" media="screen">
		body{
			margin-top:150px;
		}
		.form-check.pr-2.styling-input {
   			 margin-left: 350px;
   			 text-align:center;
		}
		.styling-col{
			border:2px solid blue;
			padding:40px 20px;
			border-radius: 10px;
			background-color:#e5e5e5;
		}
	</style>
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6  styling-col">
				<h2 align="center">Đăng nhập Admin</h2>
				<div class="form-group" >
					
					<form action="" method="POST" >
						<label for="">Tài khoản:</label>
						<input type="email" name="taikhoan" placeholder="Điền email" class="form-control"><br>
						<label for="">Mật khẩu:</label>
						<input type="password" name="matkhau" placeholder="Điền mật khẩu" class="form-control"><br>
						<input type="submit" name="dangnhap" class="btn btn-primary" value="Đăng nhập">
						
					</form>
					 <div class="form-check pr-2 styling-input">
					    <input type="checkbox" class="form-check-input " id="dropdownCheck2">
					    <label class="form-check-label " for="dropdownCheck2">
					      Nhớ mật khẩu
					    </label>
	  				</div> 
					
				</div>
			</div>
			<div class="col-md-3"></div>
		
		</div>
		
	</div>
	
	
</body>
</html>