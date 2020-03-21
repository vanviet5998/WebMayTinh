<!--top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>S</span>ản
				<span>P</span>hẩm</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<?php
							
							$sql_cate_home = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC"); 
							while($row_cate_home= mysqli_fetch_array($sql_cate_home)){
								$id_category = $row_cate_home['category_id'];						

						?>
						<!-- first section -->

						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic"><?php  echo $row_cate_home['category_name'];?> </h3>
							<div class="row">
								<?php
								
								$sql_product = mysqli_query($con,"SELECT * FROM tbl_sanpham ORDER BY sanpham_id DESC"); 
								while($row_sanpham= mysqli_fetch_array($sql_product)){
									if($row_sanpham['category_id'] == $id_category){					

								?>
									
								
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="assets/images/<?php echo $row_sanpham['sanpham_image']?>" alt="" width="150px" height="200px">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id']?>" class="link-product-add-cart">Xem </a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id']?>"><?php echo $row_sanpham['sanpham_name']?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo number_format($row_sanpham['sanpham_dongia']).' VNĐ'?></span>
												<del><?php echo number_format($row_sanpham['sanpham_giagoc']).' VNĐ'?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="?quanly=giohang" method="post">
													
													<fieldset>
														<input type="hidden" name="tensanpham" value="<?php echo $row_sanpham['sanpham_name']?>" />
														<input type="hidden" name="sanpham_id" value="<?php echo $row_sanpham['sanpham_id']?>" />
														<input type="hidden" name="giasanpham" value="<?php echo $row_sanpham['sanpham_giagoc']?>" />
														<input type="hidden" name="hinhanh" value="<?php echo $row_sanpham['sanpham_image']?>" />
														<input type="hidden" name="soluong" value="<?php echo $row_sanpham['sanpham_soluong']?>" />
														<input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" />
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
								
								<?php
									}
								}
								?>
							</div>
						</div>
	
						<?php
							}
						?>
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
					
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giá bán</h3>
							<div class="w3l-range">
								<ul>
									
									<li class="my-1">
										<a href="#">1.000.000 - 3.000.000</a>
									</li>
									<li>
										<a href="#">3.000.000 - 5.000.000</a>
									</li>
									<li class="my-1">
										<a href="#">5.000.000 - 10.000.000</a>
									</li>
									<li>
										<a href="#">10.000.0000 - 15.000.000</a>
									</li>
									<li class="mt-1">
										<a href="#">15.000.000 trở lên</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //price -->
						<!-- discounts -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giảm giá</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">5% trở lên</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">10% trở lên</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">20% trở lên</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">30% trở lên</span>
								</li>
								
							</ul>
						</div>
						<!-- //discounts -->
						<!-- reviews -->
						<div class="customer-rev border-bottom left-side py-2">
							<h3 class="agileits-sear-head mb-3">Đánh giá của khách hàng</h3>
							<ul>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>5.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>4.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half"></i>
										<span>3.5</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>3.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half"></i>
										<span>2.5</span>
									</a>
								</li>
							</ul>
						</div>
						<!-- //reviews -->
						<!-- electronics -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Danh mục sản phẩm</h3>
							<ul>
								
									<?php
							
										$sql_category_sidebar = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC"); 
										while($row_category_sidebar= mysqli_fetch_array($sql_category_sidebar)){
															

									?>
								<li>
									<span class="span"><a href="danhmucsanpham.php?id=<?php echo $row_category_sidebar['category_id'] ?>"><?php echo $row_category_sidebar['category_name'] ?></a></span>
								</li>
									<?php
										}
									?>
								
							</ul>
						</div>
						<!-- //electronics -->
						<!-- delivery -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Thanh toán khi giao hàng</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Đủ điều kiện nhận tiền mặt khi giao hàng</span>
								</li>
							</ul>
						</div>
						<!-- //delivery -->
						<!-- arrivals -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Thời gian nhận hàng</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">sau 3 ngày</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">sau 5 ngày</span>
								</li>
							</ul>
						</div>
						
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
