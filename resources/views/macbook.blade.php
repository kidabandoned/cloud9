	@extends('master')
	@section('title', 'Macbook')
	@section('section')
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<div class="price-range"><!--price-range-->
							<h2>HOT</h2>
							<div class="well">
								<img src="images/home/shipping.png" width="200" />
							</div>
						</div><!--/price-range--></div>
				</div>
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="images/product-details/newmacbook.jpg" />
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2>The New Macbook</h2>
								<p>Model: Macbook 12-inch</p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span>27.400.000 VNĐ</span>
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Mua ngay
									</button>
								</span>
								<p><b>Kho:</b> Còn hàng</p>
								<p><b>Tình trạng:</b> Mới 100%, nguyên Seal</p>
								<p><b>Hãng:</b> Apple</p>
								<p><b>Bảo hành:</b> Chính hãng 12 tháng</p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Thông số chi tiết</a></li>
							</ul>
						</div>
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
								<li>
									<ul>
										<label>Màn hình:</label>
										<span>Retina công nghệ IPS, 12 inch</span>
									</ul>
								</li>
								<li>
									<ul>
										<label>Vi xử lý:</label>
										<span>1.1 GHz Intel Core M 2</span>
									</ul>
								</li>
								<li>
									<ul>
										<label>Chip đồ họa:</label>
										<span>Intel HD Graphics 5300</span>
									</ul>
								</li>
								<li>
									<ul>
										<label>RAM:</label>
										<span>8 GB LPDDR3</span>
									</ul>
								</li><li>
									<ul>
										<label>Bộ nhớ trong:</label>
										<span>256 GB SSD</span>
									</ul>
								</li>
								<li>
									<ul>
										<label>Camera:</label>
										<span>480p Facetime Camera</span>
									</ul>
								</li>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
			</div>
		</div>
	@stop