<?php 
	 include "../db/connect.php";
	 if(isset($_POST['themsanpham'])){
	 	//them san pham
	 	$masp = $_POST['masanpham'];
	 	$tensp = $_POST['tensanpham'];
	 	$hinhanh = $_FILES['hinhanh']['name'];
	 	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	 	$soluong = $_POST['soluong'];
	 	$giagoc = $_POST['giagoc'];
	 	$giakm = $_POST['giakhuyenmai'];
	 	$mota = $_POST['mota'];
	 	$tinhtrang = $_POST['tinhtrang'];
	 	$hangsx = $_POST['hangsanxuat'];
	 	$namsx = $_POST['namsanxuat'];
	 	$nuocsx = $_POST['nuocsanxuat'];
	 	$danhmuc =  $_POST['danhmuc'];

	 	$path ="../uploads/";

	 	$sql_insert_product = mysqli_query($con,"INSERT INTO tbl_sanpham(sanpham_id,sanpham_name,sanpham_mota,sanpham_tinhtrang,sanpham_image,sanpham_dongia,sanpham_giagoc,sanpham_soluong,sanpham_hangsx,sanpham_namsx,sanpham_nuocsx,category_id) VALUES('$masp','$tensp','$mota','$tinhtrang','$hinhanh','$giagoc','$giakm','$soluong','$hangsx','$namsx','$nuocsx','$danhmuc')");

	 	move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
	 }else if(isset($_POST['capnhatsanpham'])){
	 	$id_update =$_POST['id_update'];

	 	$tensp = $_POST['tensanpham'];
	 	$hinhanh = $_FILES['hinhanh']['name'];
	 	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	 	$soluong = $_POST['soluong'];
	 	$giagoc = $_POST['giagoc'];
	 	$giakm = $_POST['giakhuyenmai'];
	 	$mota = $_POST['mota'];
	 	$tinhtrang = $_POST['tinhtrang'];
	 	$hangsx = $_POST['hangsanxuat'];
	 	$namsx = $_POST['namsanxuat'];
	 	$nuocsx = $_POST['nuocsanxuat'];
	 	$danhmuc =  $_POST['danhmuc'];

	 	$path ="../uploads/";

	 	if($hinhanh ==''){
	 		$sql_update_image = "UPDATE tbl_sanpham SET sanpham_name='$tensp',sanpham_mota='$mota',sanpham_tinhtrang='$tinhtrang',sanpham_dongia='$giakm',sanpham_giagoc='$giagoc',sanpham_soluong='$soluong',sanpham_hangsx='$hangsx',sanpham_namsx='$namsx',sanpham_nuocsx='$nuocsx',category_id='$danhmuc' WHERE sanpham_id ='$id_update'";
	 	
	 	}else{
	 		move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
	 		$sql_update_image = "UPDATE tbl_sanpham SET sanpham_name='$tensp',sanpham_mota='$mota',sanpham_tinhtrang='$tinhtrang',sanpham_dongia='$giakm',sanpham_giagoc='$giagoc',sanpham_soluong='$soluong',sanpham_hangsx='$hangsx',sanpham_namsx='$namsx',sanpham_nuocsx='$nuocsx',category_id='$danhmuc' WHERE sanpham_id ='$id_update'";
	 	}
	 	mysqli_query($con,$sql_update_image);
	 }
	
	if(isset($_GET['xoa'])){
		$id = $_GET['xoa'];
		$sql_xoa = mysqli_query($con,"DELETE FROM tbl_sanpham WHERE sanpham_id='$id'");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
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
			if(isset($_GET['quanly'])=='capnhat'){
				$id_capnhat = $_GET['capnhat_id'];
				$sql_capnhat = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_id='$id_capnhat'");
				$row_capnhat = mysqli_fetch_array($sql_capnhat);

				$id_category_1 = $row_capnhat['category_id'];
			?>
				<div class="col-md-4 ">
				<h4>Cập nhật sản phẩm</h4>
				
				<form action="" method="POST" enctype="multipart/form-data">
					 <label >Mã sản phẩm:</label> 
					<input type="number"  class="form-control" name="id_update" value="<?php echo $row_capnhat['sanpham_id'];?>"><br>
					<label >Tên sản phẩm:</label>
					<input type="text" class="form-control" name="tensanpham" value="<?php echo $row_capnhat['sanpham_name'];?>" placeholder="Tên sản phẩm"><br>
					<label >Hình ảnh:</label>
					<input type="file" class="form-control" name="hinhanh" placeholder="Hình ảnh"><br>
					<img src="../uploads/<?php echo $row_capnhat['sanpham_image'];?>" alt="" height="80" weight="80">
					<br>
					<label >Số lượng:</label>
					<input type="number"  min="1" class="form-control" name="soluong" placeholder="Số lượng" value="<?php echo $row_capnhat['sanpham_soluong'];?>"><br>
					
					<label >Giá gốc:</label>
					<input type="number"  value="<?php echo $row_capnhat['sanpham_dongia'];?>" class="form-control" name="giagoc" placeholder="Giá khuyến mãi"><br>
					<label >Giá khuyến mãi:</label>
					<input type="number"  value="<?php echo $row_capnhat['sanpham_giagoc'];?>" class="form-control" name="giakhuyenmai" placeholder="Giá khuyến mãi"><br>
					<label for="">Mô tả:</label>
					<textarea name="mota" rows="10" class="form-control"><?php echo $row_capnhat['sanpham_mota'];?></textarea>
					<label for="">Tình trạng:</label>
					<textarea name="tinhtrang" class="form-control"><?php echo $row_capnhat['sanpham_tinhtrang'];?></textarea>
					<label >Hãng sản xuất:</label>
					<input type="text" class="form-control" name="hangsanxuat" placeholder="Hãng sản xuất" value="<?php echo $row_capnhat['sanpham_hangsx'];?>"><br>
					<label >Nước sản xuất:</label>
					<input type="text" class="form-control" name="nuocsanxuat" placeholder="Nước sản xuất" value="<?php echo $row_capnhat['sanpham_nuocsx'];?>"><br>
					<label >Năm sản xuất:</label>
					<input type="number" class="form-control"  min="2000"  max="2020" name="namsanxuat" placeholder="Nước sản xuất" value="<?php echo $row_capnhat['sanpham_namsx'];?>"><br>
					<label for="">Danh mục</label>
					<?php
						$sql_danhmuc =mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC");

					?>
					<select name="danhmuc" class="form-control">
						<option value="0">------Chọn danh mục-------</option>
						<?php
							while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
								if($id_category_1 == $row_danhmuc['category_id']){
							
						?>
						<option selected value="<?php echo $row_danhmuc['category_id']?>"><?php echo $row_danhmuc['category_name']?></option>
						<?php
								}else{
						?>
						<option  value="<?php echo $row_danhmuc['category_id']?>"><?php echo $row_danhmuc['category_name']?></option>
						<?php			
								}
							}
						?>
					</select>
					<br>
					<input type="submit" class="btn btn-default" name="capnhatsanpham"  value="Cập nhật sản phẩm">
				</form>
			
			</div>
				<?php
				}else{
					?> 
			<div class="col-md-4 ">
				<h4>Thêm sản phẩm</h4>
				
				<form action="" method="POST" enctype="multipart/form-data">
					<label >Mã sản phẩm:</label>
					<input type="text" class="form-control" name="masanpham" placeholder="Mã sản phẩm"><br>
					<label >Tên sản phẩm:</label>
					<input type="text" class="form-control" name="tensanpham" placeholder="Tên sản phẩm"><br>
					<label >Hình ảnh:</label>
					<input type="file" class="form-control" name="hinhanh" placeholder="Hình ảnh"><br>
					<label >Số lượng:</label>
					<input type="number"  min="1" class="form-control" name="soluong" placeholder="Số lượng"><br>
					
					<label >Giá gốc:</label>
					<input type="number"  value="50000" class="form-control" name="giagoc" placeholder="Giá khuyến mãi"><br>
					<label >Giá khuyến mãi:</label>
					<input type="number"  value="50000" class="form-control" name="giakhuyenmai" placeholder="Giá khuyến mãi"><br>
					<label for="">Mô tả:</label>
					<textarea name="mota" class="form-control"></textarea>
					<label for="">Tình trạng:</label>
					<textarea name="tinhtrang" class="form-control"></textarea>
					<label >Hãng sản xuất:</label>
					<input type="text" class="form-control" name="hangsanxuat" placeholder="Hãng sản xuất"><br>
					<label >Nước sản xuất:</label>
					<input type="text" class="form-control" name="nuocsanxuat" placeholder="Nước sản xuất"><br>
					<label >Năm sản xuất:</label>
					<input type="number" class="form-control"  min="2000"  max="2020" name="namsanxuat" placeholder="Nước sản xuất"><br>
					<label for="">Danh mục</label>
					<?php
						$sql_danhmuc =mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC");

					?>
					<select name="danhmuc" class="form-control">
						<option value="0">------Chọn danh mục-------</option>
						<?php
							while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){

							
						?>
						<option value="<?php echo $row_danhmuc['category_id']?>"><?php echo $row_danhmuc['category_name']?></option>
						<?php
							}
						?>
					</select>
					<br>
					<input type="submit" class="btn btn-default" name="themsanpham"  value="Thêm sản phẩm">
				</form>
			</div>

			<?php
					}
			?>
			<div class="col-md-4">	</div>
			
			<pre>
				


			</pre>
		<div class="row">
			<div class="col-md-12">
				<h4>Liệt kê sản phẩm</h4>
			 	<?php
				 	 $sql_select_sp = mysqli_query($con,"SELECT * FROM tbl_sanpham,tbl_category WHERE tbl_sanpham.category_id = tbl_category.category_id ORDER BY tbl_sanpham.sanpham_id DESC");
				?> 
				<table class="table table-bordered">
					<tr>
						<th>Thứ tự</th>
						<th>Mã sản phẩm</th>
						<th>Tên sản phẩm</th>
						<th>Hình ảnh</th>
						<th>Danh mục</th>
						<th>Số lượng</th>
						<th>Giá gốc</th>
						<th>Giá khuyến mãi</th>
						<th>Mô tả</th>
						<th>Tình trạng</th>
						<th>Hãng sản xuất</th>
						<th>Năm sản xuất</th>
						<th>Nước sản xuất</th>
						<th>Quản lý</th>
					</tr>
					 <?php
						$i=0;
						while($row_sp = mysqli_fetch_array($sql_select_sp)){
							$i++;

					?> 
					<tr>
						<td><?php echo $i?></td>
						<td><?php echo $row_sp['sanpham_id']?></td>
						<td><?php echo $row_sp['sanpham_name']?></td>
						<td> <img src="../uploads/<?php echo $row_sp['sanpham_image']?>" height="80" weight="80"></td>
						<td><?php echo $row_sp['category_name']?></td>
						<td><?php echo $row_sp['sanpham_soluong']?></td>
						<td><?php echo  number_format($row_sp['sanpham_dongia']).' VNĐ'?></td>
						<td><?php echo number_format($row_sp['sanpham_giagoc']).' VNĐ'?></td>
						<td><?php echo $row_sp['sanpham_mota']?></td>
						<td><?php echo $row_sp['sanpham_tinhtrang']?></td>
						<td><?php echo $row_sp['sanpham_hangsx']?></td>
						<td><?php echo $row_sp['sanpham_namsx']?></td>
						<td><?php echo $row_sp['sanpham_nuocsx']?></td>
						
						<td ><a href="xulysanpham.php" style="text-decoration: none;">Thêm</a>||<a href="?xoa=<?php echo $row_sp['sanpham_id']?>" style="text-decoration: none;">Xóa</a>||<a href="xulysanpham.php?quanly=capnhat&capnhat_id=<?php echo $row_sp['sanpham_id']?>" style="text-decoration: none;">Cập nhật</a></td>
					</tr>
					<?php
						}
					?>
					
				</table>		
			</div>
		</div>
			
		
	<!-- </div> -->
	
	<pre>
					


	</pre>
</body>
</html>