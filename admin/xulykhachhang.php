<?php 
	 include "../db/connect.php";
	 //  if(isset($_GET['xoakh'])){
	 // 	$xoa =$_GET['xoakh'];
	 // 	$sql_delete = mysqli_query($con,"DELETE FROM tbl_khachhang WHERE khachhang_id ='$xoa'");
	 // 	header('Location:xulykhachhang.php');
	 // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Khách hàng</title>
	<link rel="icon" href="../assets/images/favicon.ico" type="image/png">
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
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
	<br>
	<div class="container">
		<div class="row">

		
			<div class="col-md-12">
				<h4>Xem lịch sử khách hàng</h4>
				<?php

				 	$sql_select_khachhang = mysqli_query($con,"SELECT * FROM tbl_khachhang,tbl_giaodich WHERE tbl_khachhang.khachhang_id = tbl_giaodich.khachhang_id GROUP BY tbl_giaodich.giaodich_ma  ORDER BY tbl_khachhang.khachhang_id DESC");
				?> 
				<table class="table table-bordered">
					<tr>
						<th>Thứ tự</th>
						<th>Mã khách hàng</th>
						<th>Tên khách hàng</th>
						<th>Điện thoại</th>
						<th>Địa chỉ</th>							
						<th>Email</th>	
						<th>Ghi chú</th>				
						<th>Quản lý</th>
					</tr>
					<?php
						$i=0;
						while($row_khachhang = mysqli_fetch_array($sql_select_khachhang)){
							$i++;

					?> 
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $row_khachhang['khachhang_id'];?></td>
						<td><?php echo $row_khachhang['khachhang_name'];?></td>			
						<td><?php echo $row_khachhang['khachhang_phone'];?></td>					
						<td><?php echo $row_khachhang['khachhang_address'];?></td>

						<td><?php echo $row_khachhang['khachhang_email'];?></td>	
						<td><?php echo $row_khachhang['khachhang_note'];?></td>	
						<td><a href="?quanly=xemgiaodich&khachhang=<?php echo $row_khachhang['giaodich_ma']?>">Xem giao dịch</a></td>
					</tr>
					<?php
						}

					?> 
				</table>
			</div>
			<div class="col-md-12">
				<h4>Liệt kê lịch sử đơn hàng</h4>
				<?php
					if(isset($_GET['khachhang'])){
						$magiaodich = $_GET['khachhang'];
					}
					else{
						$magiaodich='';
					}	
				 	$sql_select = mysqli_query($con,"SELECT * FROM tbl_giaodich,tbl_khachhang,tbl_sanpham WHERE tbl_giaodich.sanpham_id = tbl_sanpham.sanpham_id AND tbl_giaodich.khachhang_id = tbl_khachhang.khachhang_id AND tbl_giaodich.giaodich_ma ='$magiaodich' ORDER BY tbl_giaodich.giaodich_id DESC");
				 	

				?> 
				<table class="table table-bordered">
					<tr>
						<th>Thứ tự</th>
						<th>Mã giao dịch</th>
						<th>Tên sản phẩm</th>
						<th>Ngày đặt</th>
						
					</tr>
					<?php
						$i=0;
						while($row_donhang = mysqli_fetch_array($sql_select)){
							$i++;

					?> 
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $row_donhang['giaodich_ma'];?></td>
						
						
						<td><?php echo $row_donhang['sanpham_name'];?></td>
						<td><?php echo $row_donhang['giaodich_ngaythang'];?></td>
					
						
					</tr>
					<?php
						}
					?> 
				</table>
			</div>
		</div>
	</div>

</body>
</html>