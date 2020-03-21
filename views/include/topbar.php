<?php
	//session_start();
	//include "db/connect.php";
	//khoi tao sesion khi ta tao dang ky tai khoan
	if(isset($_POST['dangnhap_home']))
	{
		$taikhoan = $_POST['email_login'];
		$matkhau = md5($_POST['password_login']);
		if($taikhoan == '' || $matkhau ==''){
			echo "<script>Làm ơn không bỏ trống!</script>";
		}else{
			$sql_select_admin = mysqli_query($con,"SELECT * FROM tbl_khachhang WHERE khachhang_email='$taikhoan' AND khachhang_password='$matkhau' LIMIT 1" );
			$count = mysqli_num_rows($sql_select_admin);
			$row_dangnhap = mysqli_fetch_array($sql_select_admin);
			if($count >0 ){
				$_SESSION['dangnhap_home'] = $row_dangnhap['khachhang_name'];
				$_SESSION['khachhang_id'] = $row_dangnhap['khachhang_id'];
				//dang nhap tren trang index
				header('Location:index.php?quanly=giohang');
				
			}else{
				echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác!")</script>';
			}
			
		}
	} 
	else if(isset($_POST['dangky']))
	 {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$note = $_POST['note'];
		$address = $_POST['address'];
		$giaohang = $_POST['giaohang'];
		

		 $sql_khachhang = mysqli_query($con,"INSERT INTO tbl_khachhang(khachhang_name,khachhang_phone,khachhang_address,khachhang_note,khachhang_email,khachhang_password,giaohang) values('$name','$phone','$address','$note','$email','$password','$giaohang')");

		$sql_select_khachhang =mysqli_query($con,"SELECT * FROM tbl_khachhang ORDER BY khachhang_id DESC LIMIT 1");
		$row_khachhang = mysqli_fetch_array($sql_select_khachhang);

		$_SESSION['dangnhap_home'] = $name;
		$_SESSION['khachhang_id'] = $row_khachhang['khachhang_id'];
		 header('Location:index.php?quanly=giohang');
	}
?>

<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Ưu đãi & Giảm giá khu vực hàng đầu 
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						<li class="text-center border-right text-white">
							<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
								<i class="fas fa-map-marker mr-2"></i>Xem đơn hàng</a>
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-truck mr-2"></i>Vận chuyển</a>
						</li>
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> 0949 129 567
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#dangnhap" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Đăng nhập </a>
						</li>
						<li class="text-center text-white">
							<a href="#" data-toggle="modal" data-target="#dangky" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Đămg ký </a>
						</li>
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	
	</div> 
	<!-- //shop locator (popup) -->
		<!-- modals -->
	<!-- log in -->
	<div class="modal fade" id="dangnhap" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Đăng nhập</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="post">
						<div class="form-group">
							<label class="col-form-label">Email:</label>
							<input type="text" class="form-control" placeholder=" " name="email_login" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Mật khẩu:</label>
							<input type="password" class="form-control" placeholder=" " name="password_login" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Đăng nhập" name="dangnhap_home" >
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Lưu?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Bạn chưc có tài khoản?
							<a href="#" data-toggle="modal" data-target="#dangky">
								Đăng ký</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
		<!-- register -->
	<div class="modal fade" id="dangky" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Đăng ký</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="post">
						<div class="form-group">
							<label class="col-form-label">Tên khách hàng:</label>
							<input type="text" class="form-control" placeholder=" " name="name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email:</label>
							<input type="email" class="form-control" placeholder=" " name="email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Số điện thoại:</label>
							<input type="text" class="form-control" placeholder=" " name="phone"  required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Địa chỉ:</label>
							<input type="text" class="form-control" placeholder=" " name="address"  required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Mật khẩu:</label>
							<input type="password" class="form-control" placeholder="" name="password"  required="">
							<input type="hidden" class="form-control" placeholder="" name="giaohang"  required="" value="0">

							
						</div>
						<div class="form-group">
							<label class="col-form-label">Ghi chú:</label>
							<textarea name="note" id="" class="form-control"></textarea>
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" name="dangky" value="Đăng ký">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">Tôi chấp nhận các điều khoản và điều kiện</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->
	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						 <!-- <img src="assets/images/logo.png" alt=" " class="img-fluid"> -->
						<a href="index.php" class="font-weight-bold ">
							 <i class="fas fa-computer-speaker"></i>Hùng Dũng 

							<!-- <img src="/images/logo.png" alt=" " class="img-fluid">-->
								
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="index.php?quanly=timkiem" method="post">
								<input class="form-control mr-sm-2" name="search_product" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search" required="">
								<button class="btn my-2 my-sm-0" type="submit" name="search_button">TÌM</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->	