<?php
	session_start();
	if(isset($_SESSION['dangnhap'])){
		header('Location: index.php');
	}

	if(isset($_GET['login'])){
		$dangxuat = $_GET['login'];
	}else{
		$dangxuat ='';
	}

	if($dangxuat == 'dangxuat'){
		session_destroy();
	 	header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome Admin</title>
	<link rel="icon" href="../assets/images/favicon.ico" type="image/png">
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<!-- <p>Xin chào:<?php //echo $_SESSION['dangnhap']?><a href="?login=dangxuat">Đăng xuất</a></p> -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="dashboard.php"><img src="../assets/images/quanly1.png" alt="quanly"><strong>Quản lý </strong></a>	
			
			 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			 </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="xulydonhang.php"><img src="../assets/images/donhang1.png" alt="donhang" width="20">Đơn hàng<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="xulydmsanpham.php"><img src="../assets/images/danhmuc.png" alt="danhmucsanpham"  width="20">Danh mục sản phẩm</a>
			      </li>
			      
			     <li class="nav-item">
			        <a class="nav-link" href="xulysanpham.php"><img src="../assets/images/sanpham.png" alt="sanpham"  width="30">Sản phẩm</a>
			      </li>
			       <li class="nav-item">
			        <a class="nav-link" href="xulydmbaiviet.php"><img src="../assets/images/dmbaiviet.png" alt="danhmucbaiviet"  width="20">Danh mục bài viết</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="xulybaiviet.php"><img src="../assets/images/baiviet.png" alt="baiviet"  width="20">Bài viết</a>
			      </li>
			       <li class="nav-item">
			        <a class="nav-link" href="xulykhachhang.php"><img src="../assets/images/khachhang1.png" alt="khachhang" width="30">Khách hàng</a>
			      </li>
			    </ul>
			   
			  </div>
		</div>
	</nav>
</body>
</html>