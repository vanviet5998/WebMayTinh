<?php 
	 include "../db/connect.php";
	 if(isset($_POST['thembaiviet'])){
	 	
	 	$mabaiviet = $_POST['mabaiviet'];
	 	$tenbaiviet = $_POST['tenbaiviet'];
	 	$hinhanh = $_FILES['hinhanh']['name'];
	 	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	 	$tomtat = $_POST['tomtat'];
	 	$noidung = $_POST['noidung'];
	 	$danhmuc =  $_POST['danhmuc'];

	 	$path ="../uploads/";

	 	$sql_insert_product = mysqli_query($con,"INSERT INTO tbl_baiviet(baiviet_id,baiviet_ten,baiviet_tomtat,baiviet_image,baiviet_noidung,danhmuctin_id) VALUES('$mabaiviet','$tenbaiviet','$tomtat','$hinhanh','$noidung','$danhmuc')");

	 	move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
	 }else if(isset($_POST['capnhatbaiviet'])){

	 	$id_update = $_POST['id_update'];

	 	
	 	$tenbaiviet = $_POST['tenbaiviet'];
	 	$hinhanh = $_FILES['hinhanh']['name'];
	 	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	 	$tomtat = $_POST['tomtat'];
	 	$noidung = $_POST['noidung'];
	 	$danhmuc =  $_POST['danhmuc'];

	 	$path ="../uploads/";

	 	if($hinhanh ==''){
	 		$sql_update_image = "UPDATE tbl_baiviet SET baiviet_ten='$tenbaiviet', baiviet_tomtat='$tomtat', baiviet_image='$hinhanh', baiviet_noidung='$noidung', danhmuctin_id='$danhmuc' WHERE baiviet_id ='$id_update'";
	 	
	 	}else{
	 		move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
	 		$sql_update_image = "UPDATE tbl_baiviet SET baiviet_ten='$tenbaiviet', baiviet_tomtat='$tomtat', baiviet_image='$hinhanh', baiviet_noidung='$noidung', danhmuctin_id='$danhmuc' WHERE baiviet_id ='$id_update'";
	 	}
	 	mysqli_query($con,$sql_update_image);
	 }
	
	if(isset($_GET['xoa'])){
		$id = $_GET['xoa'];
		$sql_xoa = mysqli_query($con,"DELETE FROM tbl_baiviet WHERE baiviet_id='$id'");
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
				$sql_capnhat = mysqli_query($con,"SELECT * FROM tbl_baiviet WHERE baiviet_id='$id_capnhat'");
				$row_capnhat = mysqli_fetch_array($sql_capnhat);

				$id_category_1 = $row_capnhat['danhmuctin_id'];
			?>
				<div class="col-md-5 ">
					<h4>Cập nhật bài viết</h4>
					
					<form action="" method="POST" enctype="multipart/form-data">
						<label >Mã bài viết:</label>
						<input type="number" class="form-control" name="id_update" value="<?php echo $row_capnhat['baiviet_id'];?>"><br>
						<label >Tên bài viết:</label>
						<input type="text" class="form-control" name="tenbaiviet" value="<?php echo $row_capnhat['baiviet_ten'];?>" placeholder="Tên bài viết"><br>
						<label for="">Tóm tắt:</label>
						<textarea name="tomtat" rows="3" class="form-control"><?php echo $row_capnhat['baiviet_tomtat'];?></textarea>
						<label >Hình ảnh:</label>
						<input type="file" class="form-control" name="hinhanh" placeholder="Hình ảnh"><br>
						<img src="../uploads/<?php echo $row_capnhat['baiviet_image'];?>" alt="" height="80" weight="80">
						<br>
						<label for="">Nội dung:</elabel>
						<textarea name="noidung" rows="15" class="form-control"><?php echo $row_capnhat['baiviet_noidung'];?></textarea>
						<br>
						<label for="">Danh mục</label>
						<?php
							$sql_danhmuc =mysqli_query($con,"SELECT * FROM tbl_danhmuctin ORDER BY danhmuctin_id DESC");

						?>
						<select name="danhmuc" class="form-control">
							<option value="0">------Chọn danh mục-------</option>
							<?php
								while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
									if($id_category_1 == $row_danhmuc['danhmuctin_id']){
								
							?>
							<option selected value="<?php echo $row_danhmuc['danhmuctin_id']?>"><?php echo $row_danhmuc['danhmuctin_ten']?></option>
							<?php
									}else{
							?>
							<option  value="<?php echo $row_danhmuc['danhmuctin_id']?>"><?php echo $row_danhmuc['danhmuctin_ten']?></option>
							<?php			
									}
								}
							?>
						</select>
						<br>
						<input type="submit" class="btn btn-default" name="capnhatbaiviet"  value="Cập nhật bài viết">
					</form>
			
				</div>
				<?php
				}else{
					?> 
			<div class="col-md-5 ">
				<h4>Thêm bài viết</h4>
				
				<form action="" method="POST" enctype="multipart/form-data">
					<label >Mã bài viết:</label>
					<input type="number"  min="1" class="form-control" name="mabaiviet" value="Mã bài viết"><br>
					<label >Tên bài viết:</label>
					<input type="text" class="form-control" name="tenbaiviet" value="Tên bài viết"><br>
					<label for="">Tóm tắt:</label>
					<textarea name="tomtat" rows="3" class="form-control"></textarea>
					<label >Hình ảnh:</label>
					<input type="file" class="form-control" name="hinhanh" placeholder="Hình ảnh"><br>
					
					<br>
					<label for="">Nội dung:</elabel>
					<textarea name="noidung" rows="15" cols="20"  class="form-control"></textarea>
					<br>
					<label for="">Danh mục</label>
					<?php
						$sql_danhmuc =mysqli_query($con,"SELECT * FROM tbl_danhmuctin ORDER BY danhmuctin_id DESC");

					?>
					<select name="danhmuc" class="form-control">
						<option value="0">------Chọn danh mục-------</option>
						<?php
							while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){

							
						?>
						<option value="<?php echo $row_danhmuc['danhmuctin_id']?>"><?php echo $row_danhmuc['danhmuctin_ten']?></option>
						<?php
							}
						?>
					</select>
					<br>
					<input type="submit" class="btn btn-default" name="thembaiviet"  value="Thêm sản phẩm">
				</form>
			</div>

			<?php
					}
			?>
			<div class="col-md-2">	</div>
			
			<pre>
				


			</pre>
		<div class="row">
			<div class="col-md-12">
				<h4>Liệt kê bài viết</h4>
			 	<?php
				 	 $sql_select_bv = mysqli_query($con,"SELECT * FROM tbl_baiviet,tbl_danhmuctin WHERE tbl_baiviet.danhmuctin_id = tbl_danhmuctin.danhmuctin_id ORDER BY tbl_baiviet.baiviet_id DESC");

				?> 
				<table class="table table-bordered">
					<tr>
						<th>Thứ tự</th>
						<th>Mã bài viết</th>
						<th>Tên bài viết</th>
						<th>Tóm tắt</th>
						<th>Hình ảnh</th>
						<th>Nội dung</th>
						<th>Danh mục</th>
						<th>Quản lý</th>
					</tr>
					 <?php
						$i=0;
						while($row_bv = mysqli_fetch_array($sql_select_bv)){
							$i++;

					?> 
					<tr>
						<td><?php echo $i?></td>
						<td><?php echo $row_bv['baiviet_id'];?></td>
						<td><?php echo $row_bv['baiviet_ten'];?></td>
						<td><?php echo $row_bv['baiviet_tomtat'];?></td>
						<td> <img src="../uploads/<?php echo $row_bv['baiviet_image'];?>" height="80" weight="80"></td>
						<td><?php echo $row_bv['baiviet_noidung'];?></td>
						<td><?php echo $row_bv['danhmuctin_ten'];?></td>
						
						<td ><a href="xulybaiviet.php" style="text-decoration: none;">Thêm</a>||<a href="?xoa=<?php echo $row_bv['baiviet_id']?>"  style="text-decoration: none;">Xóa</a>||<a href="xulybaiviet.php?quanly=capnhat&capnhat_id=<?php echo $row_bv['baiviet_id']?>"  style="text-decoration: none;">Cập nhật</a></td>
					</tr>
					<?php
							
						}
					?>
					
				</table>		
			</div>
		</div>
			
		
	
	
	<pre>
					


	</pre>
</body>
</html>