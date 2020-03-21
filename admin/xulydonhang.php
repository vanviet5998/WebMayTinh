<?php 
	 include "../db/connect.php";

	 if(isset($_POST['capnhatdonhang'])){
	 	$xuly = $_POST['xuly'];
	 	$mahang = $_POST['mahang_xuly'];
	 	$sql_update_donhang = mysqli_query($con,"UPDATE tbl_donhang SET donhang_tinhtrang='$xuly' WHERE mahang='$mahang'");
	 }

	 if(isset($_GET['xoadonhang'])){
	 	$mahang_xoa =$_GET['xoadonhang'];
	 	$sql_delete = mysqli_query($con,"DELETE FROM tbl_donhang WHERE mahang ='$mahang_xoa'");
	 	header('Location:xulydonhang.php');
	 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đơn hàng</title>
	<link rel="icon" href="../assets/images/favicon.ico" type="image/png">
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body style="overflow-x: hidden;">
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
				<?php
				if(isset($_GET['quanly'])=='xemdonhang'){
					$mahang = $_GET['mahang'];
					$sql_chitiet = mysqli_query($con,"SELECT * FROM tbl_donhang,tbl_sanpham WHERE tbl_donhang.sanpham_id =tbl_sanpham.sanpham_id AND tbl_donhang.mahang='$mahang'");
					// $row_chitiet = mysqli_fetch_array($sql_chitiet);
					?> 
			<div class="col-md-7">	
					<h4>Xem chi tiết đơn hàng</h4>
				<form action="" method="POST" >
					<table class="table table-bordered">
					<tr>
						<th>Thứ tự</th>
						<th>Mã hàng</th>
						<th width="200">Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Giá khuyến mãi</th>
						<th>Tổng tiền</th>
						<th>Ngày đặt</th>
						<!-- <th>Quản lý</th> -->
					</tr>
					<?php
						$i=0;
						while($row_donhang = mysqli_fetch_array($sql_chitiet)){
							$i++;

					?> 
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $row_donhang['mahang'];?></td>
						<td ><?php echo $row_donhang['sanpham_name'];?></td>
						<td><?php echo $row_donhang['soluong'];?></td>
						<td><?php echo number_format($row_donhang['sanpham_dongia']). ' VNĐ';?></td>
						<td><?php echo number_format($row_donhang['soluong'] * $row_donhang['sanpham_dongia']) . ' VNĐ';?></td>
						<td><?php echo $row_donhang['donhang_ngaythang'];?></td>
						<input type="hidden" name="mahang_xuly" value="<?php echo $row_donhang['mahang']?>">
					</tr>
					<?php
						}
					?> 
					</table>	
					<select class="form-control" name="xuly">
						<option value="1">Đã xử lý</option>
						<option value="0">Chưa xử lý</option>
					</select>
					<br>
					<input type="submit" value="Cập nhật đơn hàng" name="capnhatdonhang" class="btn btn-success">
				</form>
			</div>
					 <?php
					}else{
						?> 
			 <div class="col-md-7">		
					<h4>Đơn hàng</h4>
			</div> 			
						
						<?php
					}

					?> 
		
			<div class="col-md-5">
				<h4>Liệt kê đơn hàng</h4>
				<?php
				 	$sql_select = mysqli_query($con,"SELECT * FROM tbl_sanpham,tbl_khachhang,tbl_donhang WHERE tbl_donhang.sanpham_id = tbl_sanpham.sanpham_id AND tbl_donhang.khachhang_id = tbl_khachhang.khachhang_id ORDER BY tbl_donhang.donhang_id DESC");

				?> 
				<table class="table table-bordered">
					<tr>
						<th>Thứ tự</th>
						<!-- <th>Mã đơn hàng</th>
						<th>Mã sản phẩm</th>
						<th>Số lượng</th> -->
						<th>Mã hàng</th>
						<th>Tình trạng đơn hàng</th>
						<th>Tên khách hàng</th>
						<th>Ngày đặt</th>
						<th>Ghi chú</th>
						<th>Quản lý</th>
					</tr>
					<?php
						$i=0;
						while($row_donhang = mysqli_fetch_array($sql_select)){
							$i++;

					?> 
					<tr>
						<td><?php echo $i;?></td>
						
						<td><?php echo $row_donhang['mahang'];?></td>
						<td>
							<?php
								if($row_donhang['donhang_tinhtrang'] == 0){
									echo "Chưa xử lý";
								}else{
									echo "Đã xử lý";
								}
							?>
						</td>
						<td><?php echo $row_donhang['khachhang_name'];?></td>
						<td><?php echo $row_donhang['donhang_ngaythang'];?></td>
					
						<td><?php echo $row_donhang['khachhang_note'];?></td>
					
						<td><a href="?xoadonhang=<?php echo $row_donhang['mahang']?>">Xóa</a>||<a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahang']?>">Xem đơn hàng</a></td>
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